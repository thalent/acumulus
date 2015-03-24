<?php
namespace NextTalent\AcumulusPhp;
use NextTalent\AcumulusPhp\Exceptions\NotAnArrayException;

/**
 * Class Contacts
 * Responsible for creating the body for Contacts related API calls
 * @link https://apidoc.sielsystems.nl/acumulus-api/contacts
 * @package NextTalent\AcumulusPhp
 */
class Contacts extends AcumulusConnector
{
    /**
     * This API-call allows you to retrieve full detailed contact information about the requested contactid.
     * @link https://apidoc.sielsystems.nl/content/contact-get-contact-details
     * @param $contact_id
     */
    public function getContactDetails($contact_id)
    {
        $this->apiCall = 'contacts/contact_get.php';
        $this->xmlPayload = sprintf('<contactid>%d</contactid>', $contact_id);

        return $this;
    }

    /**
     * Submit a contact identifier and obtain a list of invoices (if any) received from this particular contact.
     * @link https://apidoc.sielsystems.nl/content/contact-list-incoming-invoices
     * @param $contact_id
     * @return $this
     */
    public function getIncomingInvoices($contact_id)
    {
        $this->apiCall = 'contacts/contact_invoices_incoming.php';
        $this->xmlPayload = sprintf('<contactid>%d</contactid>', $contact_id);

        return $this;
    }

    /**
     * Submit a contact identifier and obtain a list of invoices (if any) send to this particular contact.
     * @link https://apidoc.sielsystems.nl/content/contact-list-outgoing-invoices
     * @param $contact_id
     * @return $this
     */
    public function getOutgoingInvoices($contact_id)
    {
        $this->apiCall = 'contacts/contact_invoices_outgoing.php';
        $this->xmlPayload = sprintf('<contactid>%d</contactid>', $contact_id);

        return $this;
    }

    /**
     * This API-call allows you to query your contacts. It has a few nice features including an option to provide a term to search for and a selection count and offset to receive only a limited amount of matches.
     * @link https://apidoc.sielsystems.nl/content/contacts-list-contacts
     * @param $options
     * @return $this
     * @throws Exception
     */
    public function getAvailableContacts($options)
    {
        if (!is_array($options)) {
            throw new NotAnArrayException("Options should be an array");
        }

        $this->xmlPayload = null;

        if (isset($options['filter'])) {
            $this->xmlPayload .= sprintf('<filter>%s</filter>', $options['filter']);
        }
        if (isset($options['offset'])) {
            $this->xmlPayload .= sprintf('<offset>%d</offset>', $options['offset']);
        }
        if (isset($options['rowcount'])) {
            $this->xmlPayload .= sprintf('<rowcount>%d</rowcount>', $options['rowcount']);
        }
        if (isset($options['contacttype'])) {
            $this->xmlPayload .= sprintf('<contacttype>%d</contacttype>', $options['contacttype']);
        }

        $this->apiCall = 'contacts/contacts_list.php';

        return $this;

    }
}
