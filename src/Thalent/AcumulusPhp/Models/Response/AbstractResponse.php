<?php
/**
 * Created by PhpStorm.
 * User: mthal_000
 * Date: 3/30/2015
 * Time: 6:02 AM
 */

namespace Thalent\AcumulusPhp\Models\Response;


abstract class AbstractResponse {
	/**
	 * @var string
	 */
	public $status;
	/**
	 * @var Errrors[]
	 */
	public $errors;
	/**
	 * @var Warning[]
	 */
	public $warnings;
}