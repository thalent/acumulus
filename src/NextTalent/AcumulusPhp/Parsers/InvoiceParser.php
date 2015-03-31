<?php

namespace NextTalent\AcumulusPhp\Parsers;
use NextTalent\AcumulusPhp\Models\Response\Invoice;

/**
 * Class InvoiceParser
 * @package NextTalent\AcumulusPhp\Parsers
 */
class InvoiceParser implements ParserInterface
{
    /**
     * @param $invoice
     */
    public function __construct($invoice)
    {
        $this->invoice = $invoice;
    }

    /**
     * Returns array with keys 'invoicenumber', 'token' and 'entryid'
     * @return Invoice
     */
    public function parse()
    {
        return new Invoice($this->invoice);
    }
}
