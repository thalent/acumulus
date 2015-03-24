<?php namespace NextTalent\AcumulusPhp\Parsers;

use NextTalent\AcumulusPhp\Models\Entry;

/**
 * Class EntryParser
 * @package NextTalent\AcumulusPhp\Parsers
 */
class EntryParser extends Parser implements ParserInterface
{
    /**
     * @param $entry
     */
    public function __construct($entry)
    {
        $this->entry = $entry;
    }

    /**
     * @return mixed
     */
    public function parse()
    {
        $model = new Entry;

       return $this->buildModel($this->entry, $model);
    }
}
