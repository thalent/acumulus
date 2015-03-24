<?php namespace NextTalent\AcumulusPhp\Providers;
use NextTalent\AcumulusPhp\AcumulusConnector;

/**
 * Class Picklists
 * @package NextTalent\AcumulusPhp
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
