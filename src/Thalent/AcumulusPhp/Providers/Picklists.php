<?php namespace Thalent\AcumulusPhp;

/**
 * Class Picklists
 * @package Thalent\AcumulusPhp
 */
class Picklists extends AcumulusConnector
{
    /**
     * @return $this
     */
    public function getAccounts()
    {
        $this->apiCall = 'picklists/picklist_accounts.php';
        $this->xmlPayload = null;

        return $this;
    }

}
