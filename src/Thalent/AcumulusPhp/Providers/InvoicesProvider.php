<?php

namespace Thalent\AcumulusPhp\Providers;

use Thalent\AcumulusPhp\AcumulusConnector;
use Thalent\AcumulusPhp\Exceptions\ValidationErrorException;
use Thalent\AcumulusPhp\InvoiceBuilder;

class InvoicesProvider extends AcumulusConnector
{
    /**
     * Add the invoice to Acumulus. Pass the $invoiceBuilder->build() method to this function.
     *  https://apidoc.sielsystems.nl/content/invoice-add
     * @param $invoiceBuilder
     * @return $this
     */
    public function addInvoice(InvoiceBuilder $invoiceBuilder)
    {
        $this->apiCall = 'invoices/invoice_add.php';
        $this->xmlPayload = $invoiceBuilder->build();

        return $this;
    }

    /**
     * Gets the next invoice number and returns it as a string
     * @link https://apidoc.sielsystems.nl/content/invoice-get-next-invoice-number
     * @return $this
     */
    public function getNextInvoiceNumber()
    {
        $this->apiCall = 'invoices/invoice_get_next_number.php';
        $this->xmlPayload = null;

        return $this;
    }

    /**
     * Get the URL to a PDF invoice based on a token
     * https://apidoc.sielsystems.nl/content/invoice-get-pdf-invoice
     * @param $token
     * @return $this
     */
    public function getPdfInvoice($token)
    {
        $this->apiCall = 'invoices/invoice_get_pdf.php?token=' . $token;
        $this->xmlPayload = null;

        return $this;
    }

    public function getPaymentStatus($token)
    {
        $this->apiCall = 'invoices/invoice_paymentstatus_get.php';
        $this->xmlPayload = sprintf('<token>%s</token>', $token);

        return $this;
    }

    public function setPaymentStatus($token, $paymentstatus = 1, $paymentdate = null)
    {
		 if($paymentdate === null) {
			 $paymentdate = date('Y-m-d');
		 }

        // Validate paymentdate before sending it off
        $datetime = \DateTime::createFromFormat("Y-m-d", $paymentdate);
        if (!$datetime and $datetime->format('Y-m-d') !== $paymentdate) {
            throw new ValidationErrorException("Paymentdate should be in YYYY-MM-DD format");
        }

        $this->apiCall = 'invoices/invoice_paymentstatus_set.php';
        $this->xmlPayload .= sprintf('<token>%s</token>', $token);
        $this->xmlPayload .= sprintf('<paymentstatus>%d</paymentstatus>', $paymentstatus);
        $this->xmlPayload .= sprintf('<paymentdate>%s</paymentdate>', $paymentdate);

        return $this;
    }

}
