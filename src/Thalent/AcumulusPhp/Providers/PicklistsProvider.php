<?php namespace Thalent\AcumulusPhp\Providers;
use Thalent\AcumulusPhp\AcumulusConnector;

/**
 * Class Picklists
 * @package Thalent\AcumulusPhp
 */
class PicklistsProvider extends AcumulusConnector
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
