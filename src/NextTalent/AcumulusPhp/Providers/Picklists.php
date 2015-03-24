<?php namespace NextTalent\AcumulusPhp;

/**
 * Class Picklists
 * @package NextTalent\AcumulusPhp
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
