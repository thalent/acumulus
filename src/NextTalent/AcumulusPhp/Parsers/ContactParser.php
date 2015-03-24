<?php
namespace NextTalent\AcumulusPhp\Parsers;

use NextTalent\AcumulusPhp\Models\Contact;

/**
 * Class ContactParser
 * @package NextTalent\AcumulusPhp\Parsers
 */
class ContactParser extends Parser implements ParserInterface
{
    /**
     * @param $contact
     */
    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return null
     */
    public function parse()
    {
        if (empty($this->contact)) {
            return null;
        }
        $model = new Contact();

        return $this->buildModel($this->contact, $model);
    }
}
