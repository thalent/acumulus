<?php
namespace Thalent\AcumulusPhp\Parsers;

use Thalent\AcumulusPhp\Models\Contact;

/**
 * Class ContactsParser
 * @package Thalent\AcumulusPhp\Parsers
 */
class ContactsParser extends Parser implements ParserInterface
{
    /**
     * @var
     */
    protected $contacts;

    /**
     * @param $contacts
     */
    public function __construct($contacts)
    {
        $this->contacts = $contacts;
    }

    /**
     * @return array
     */
    public function parse()
    {
        if (empty($this->contacts)) {
            return null;
        }

        // When filter is used, one result comes back in the form of an array
        if (array_key_exists("contactid", $this->contacts)) {
            return $this->parseContact($this->contacts);
        }

        foreach ($this->contacts as $contact) {
            $models[] = $this->parseContact($contact);
        }

        return $models;

    }

    /**
     * @param $contact
     * @param $models
     * @return array
     */
    public function parseContact($contact)
    {
        $model = new Contact();

        // Sometimes a response comes back as contactname instead of
        // contactname1. Fixing it here before model is created.
        if (array_key_exists('contactname', $contact)) {
            $contact['contactname1'] = $contact['contactname'];
            unset($contact['contactname']);
        }

        return $this->buildModel($contact, $model);

    }

}
