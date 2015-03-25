<?php namespace NextTalent\AcumulusPhp;

use NextTalent\AcumulusPhp\Exceptions\ValidationErrorException;
use NextTalent\AcumulusPhp\Models\Contact;
use NextTalent\AcumulusPhp\Models\EmailAsPdf;
use NextTalent\AcumulusPhp\Models\Invoice;
use NextTalent\AcumulusPhp\Models\InvoiceLine;

/**
 * Class InvoiceBuilder
 * @package NextTalent\AcumulusPhp
 */
class InvoiceBuilder
{
	/**
	 * @var Contact
	 */
	protected $customer;
	/**
	 * @var
	 */
	protected $invoiceLines;
	protected $overwriteCustomer;

	/**
	 * @var EmailAsPdf
	 */
	protected $emailAsPdf;

		/**
		 *
		 */
	public function __construct() {
		$this->invoice = new Invoice;
	}

	/**
	 * @param  InvoiceLine $invoiceLine
	 * @return $this
	 */
	public function addLine(InvoiceLine $invoiceLine) {
		$this->invoiceLines[] = $invoiceLine;

		return $this;
	}

	/**
	 * @param  Contact $customer
	 * @param  bool $overwriteIfExists
	 * @return $this
	 * @throws \Exception
	 */
	public function setCustomer(Contact $customer, $overwriteIfExists = false) {
		if (!$customer instanceof Contact) {
			throw new ValidationErrorException("Customer should be a contact model");
		}

		$this->customer = $customer;
		$this->overwriteCustomer = $overwriteIfExists;

		return $this;
	}

	/**
	 * @param  Invoice $invoice
	 * @return $this
	 * @throws \Exception
	 */
	public function setInvoiceData(Invoice $invoice) {
		if (!$invoice instanceof Invoice) {
			throw new ValidationErrorException("Invoice should be an invoice model");
		}

		$this->invoice = $invoice;

		return $this;
	}

	/**
	 * @return string
	 * @throws \Exception
	 */
	public function build() {
		$customer = new \SimpleXMLElement('<customer></customer>');

		$customer->addChild('type', $this->customer->getContacttype());
		$customer->addChild('companyname1', $this->customer->getContactname1());
		$customer->addChild('companyname2', $this->customer->getContactname2());
		$customer->addChild('fullname', $this->customer->getContactperson());
		$customer->addChild('salutation', $this->customer->getContactsalutation());
		$customer->addChild('address1', $this->customer->getContactaddress1());
		$customer->addChild('address2', $this->customer->getContactaddress2());
		$customer->addChild('postalcode', $this->customer->getContactpostalcode());
		$customer->addChild('countrycode', $this->customer->getContactcountrycode());
		$customer->addChild('vatnumber', $this->customer->getContactvatnumber());
		$customer->addChild('telephone', $this->customer->getContacttelephone());
		$customer->addChild('fax', $this->customer->getContactfax());
		$customer->addChild('email', $this->customer->getContactemail());
		$customer->addChild('bankaccountnumber', $this->customer->getContactiban());
		$customer->addChild('mark', $this->customer->getContactmark());

		$invoice = $customer->addChild('invoice');
		$invoice->addChild('concept', $this->invoice->getConcept());
		$invoice->addChild('number', $this->invoice->getNumber());
		$invoice->addChild('vattype', $this->invoice->getVattype());
		$invoice->addChild('issuedate', $this->invoice->getIssuedate());
		$invoice->addChild('costcenter', $this->invoice->getCostcenter());
		$invoice->addChild('accountnumber', $this->invoice->getAccountnumber());
		$invoice->addChild('paymentstatus', $this->invoice->getPaymentstatus());
		$invoice->addChild('paymentdate', $this->invoice->getPaymentdate());
		$invoice->addChild('description', $this->invoice->getDescription());
		$invoice->addChild('template', $this->invoice->getConcept());

		if (count($this->invoiceLines) == 0) {
			throw new ValidationErrorException("You need to have invoicelines for your invoice");
		}
		foreach ($this->invoiceLines as $invoiceLine) {
			$line = $invoice->addChild('line');
			$line->addChild('itemnumber', $invoiceLine->getItemnumber());
			$line->addChild('product', $invoiceLine->getProduct());
			$line->addChild('unitprice', $invoiceLine->getUnitprice());
			$line->addChild('vatrate', $invoiceLine->getVatrate());
			$line->addChild('quantity', $invoiceLine->getQuantity());
			$line->addChild('costprice', $invoiceLine->getCostprice());
		}
		if (!is_null($this->invoice->getEmailto())) {
			$emailaspdf = $invoice->addChild('emailaspdf');
			$emailaspdf->addChild('emailto', $this->invoice->getEmailto());
			$emailaspdf->addChild('emailbcc', $this->invoice->getEmailbcc());
			$emailaspdf->addChild('emailfrom', $this->invoice->getEmailfrom());
			$emailaspdf->addChild('subject', $this->invoice->getSubject());
			$emailaspdf->addChild('message', $this->invoice->getMessage());
			$emailaspdf->addChild('confirmreading', $this->invoice->getConfirmreading());
		}

		$xml = $customer->asXML();

		// XML output starts with an xml version declaration, this cuts that off.
		// Pretty hacky, but it works.
		// TODO: Think of something a better solution
		return substr($xml, 21);

	}

	public function setMailAsPdf(EmailAsPdf $email) {
		$this->emailAsPdf = $email;
	}

}
