<?php
namespace NextTalent\AcumulusPhp\Models\Response;

class Invoice {
	public $invoicenumber;
	public $token;
	public $entryid;
	public $paymentstatus;

	function __construct($xml) {
		if(isset($xml['entryid'])) {
			$this->entryid = $xml['entryid'];
		}
		if(isset($xml['token'])) {
			$this->token = $xml['token'];
		}
		if(isset($xml['invoicenumber'])) {
			$this->invoicenumber = $xml['invoicenumber'];
		}
		if(isset($xml['paymentstatus'])) {
			$this->invoicenumber = $xml['paymentstatus'];
		}

	}

}