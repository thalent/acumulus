<?php

namespace NextTalent\AcumulusPhp\Parsers;

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
     * @return mixed
     */
    public function parse()
    {
        return $this->invoice;
    }
}
