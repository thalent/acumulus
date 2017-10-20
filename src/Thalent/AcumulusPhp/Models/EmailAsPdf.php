<?php
/**
 * Created by PhpStorm.
 * User: mthal_000
 * Date: 3/25/2015
 * Time: 1:20 AM
 */

namespace Thalent\AcumulusPhp\Models;


class EmailAsPdf {
	protected $emailto;
	protected $emailbcc;
	protected $emailfrom;
	protected $subject;
	protected $message;
	protected $confirmreading;

	/**
	 * @return mixed
	 */
	public function getConfirmreading() {
		return $this->confirmreading;
	}

	/**
	 * @param mixed $confirmreading
	 */
	public function setConfirmreading($confirmreading) {
		$this->confirmreading = $confirmreading;
	}

	/**
	 * @return mixed
	 */
	public function getEmailbcc() {
		return $this->emailbcc;
	}

	/**
	 * @param mixed $emailbcc
	 */
	public function setEmailbcc($emailbcc) {
		$this->emailbcc = $emailbcc;
	}

	/**
	 * @return mixed
	 */
	public function getEmailfrom() {
		return $this->emailfrom;
	}

	/**
	 * @param mixed $emailfrom
	 */
	public function setEmailfrom($emailfrom) {
		$this->emailfrom = $emailfrom;
	}

	/**
	 * @return mixed
	 */
	public function getEmailto() {
		return $this->emailto;
	}

	/**
	 * @param mixed $emailto
	 */
	public function setEmailto($emailto) {
		$this->emailto = $emailto;
	}

	/**
	 * @return mixed
	 */
	public function getMessage() {
		return $this->message;
	}

	/**
	 * @param mixed $message
	 */
	public function setMessage($message) {
		$this->message = $message;
	}

	/**
	 * @return mixed
	 */
	public function getSubject() {
		return $this->subject;
	}

	/**
	 * @param mixed $subject
	 */
	public function setSubject($subject) {
		$this->subject = $subject;
	}


}