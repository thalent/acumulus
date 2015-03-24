<?php
/**
 * Created by PhpStorm.
 * User: sieger
 * Date: 7-7-14
 * Time: 22:34
 */

namespace NextTalent\AcumulusPhp\Parsers;

/**
 * Class Parser
 * @package NextTalent\AcumulusPhp\Parsers
 */
class Parser
{
    /**
     * @param $contact
     * @param $model
     */
    public function buildModel($item, $model)
    {
        foreach ($item as $name => $value) {

            if (empty($value)) {
                $value = null;
            }

            $fieldName = 'set' . ucfirst($name);
            // Call the function by the array key name
            $model->$fieldName($value);

        }

        return $model;
    }

}
