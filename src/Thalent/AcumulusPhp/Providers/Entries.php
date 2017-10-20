<?php namespace Thalent\AcumulusPhp;
/**
 * Class Entries
 * @package Thalent\AcumulusPhp
 */
class Entries extends AcumulusConnector
{
    /**
     * Supply a valid entryid and get related info. Applies to various types including invoices, expenses and balances. Depending on the type of entry some details may be of less relevance or simply presented as empty.
     * @link https://apidoc.sielsystems.nl/content/entry-get-entry-details
     * @param $entry_id
     * @return $this
     */
    public function getEntryDetails($entry_id)
    {
        $this->apiCall = 'entry/entry_info.php';
        $this->xmlPayload = sprintf('<entryid>%d</entryid>', $entry_id);

        return $this;
    }
}
