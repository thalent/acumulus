<?php

namespace NextTalent\AcumulusPhp\Models;

class Contact extends Model {

	protected $contactid;
	protected $contactyourid;
	protected $contactemail;
	protected $contacttype;
	protected $overwriteifexists;
	protected $contactname1;
	protected $contactname2;
	protected $contactperson;

	/**
	 * @return mixed
	 */
	public function getContactid() {
		return $this->contactid;
	}

	/**
	 * @param mixed $contactid
	 */
	public function setContactid($contactid) {
		$this->contactid = $contactid;
	}

	/**
	 * @return mixed
	 */
	public function getContactyourid() {
		return $this->contactyourid;
	}

	/**
	 * @param mixed $contactyourid
	 */
	public function setContactyourid($contactyourid) {
		$this->contactyourid = $contactyourid;
	}

	/**
	 * @return mixed
	 */
	public function getContactemail() {
		return $this->contactemail;
	}

	/**
	 * @param mixed $contactemail
	 */
	public function setContactemail($contactemail) {
		$this->contactemail = $contactemail;
	}

	/**
	 * @return mixed
	 */
	public function getContacttype() {
		return $this->contacttype;
	}

	/**
	 * @param mixed $contacttype
	 */
	public function setContacttype($contacttype) {
		$this->contacttype = $contacttype;
	}

	/**
	 * @return mixed
	 */
	public function getOverwriteifexists() {
		return $this->overwriteifexists;
	}

	/**
	 * @param mixed $overwriteifexists
	 */
	public function setOverwriteifexists($overwriteifexists) {
		$this->overwriteifexists = $overwriteifexists;
	}

	/**
	 * @return mixed
	 */
	public function getContactname1() {
		return $this->contactname1;
	}

	/**
	 * @param mixed $contactname1
	 */
	public function setContactname1($contactname1) {
		$this->contactname1 = $contactname1;
	}

	/**
	 * @return mixed
	 */
	public function getContactname2() {
		return $this->contactname2;
	}

	/**
	 * @param mixed $contactname2
	 */
	public function setContactname2($contactname2) {
		$this->contactname2 = $contactname2;
	}

	/**
	 * @return mixed
	 */
	public function getContactperson() {
		return $this->contactperson;
	}

	/**
	 * @param mixed $contactperson
	 */
	public function setContactperson($contactperson) {
		$this->contactperson = $contactperson;
	}

	/**
	 * @return mixed
	 */
	public function getContactsalutation() {
		return $this->contactsalutation;
	}

	/**
	 * @param mixed $contactsalutation
	 */
	public function setContactsalutation($contactsalutation) {
		$this->contactsalutation = $contactsalutation;
	}

	/**
	 * @return mixed
	 */
	public function getContactaddress1() {
		return $this->contactaddress1;
	}

	/**
	 * @param mixed $contactaddress1
	 */
	public function setContactaddress1($contactaddress1) {
		$this->contactaddress1 = $contactaddress1;
	}

	/**
	 * @return mixed
	 */
	public function getContactaddress2() {
		return $this->contactaddress2;
	}

	/**
	 * @param mixed $contactaddress2
	 */
	public function setContactaddress2($contactaddress2) {
		$this->contactaddress2 = $contactaddress2;
	}

	/**
	 * @return mixed
	 */
	public function getContactpostalcode() {
		return $this->contactpostalcode;
	}

	/**
	 * @param mixed $contactpostalcode
	 */
	public function setContactpostalcode($contactpostalcode) {
		$this->contactpostalcode = $contactpostalcode;
	}

	/**
	 * @return mixed
	 */
	public function getContactcity() {
		return $this->contactcity;
	}

	/**
	 * @param mixed $contactcity
	 */
	public function setContactcity($contactcity) {
		$this->contactcity = $contactcity;
	}

	/**
	 * @return mixed
	 */
	public function getContactlocationcode() {
		return $this->contactlocationcode;
	}

	/**
	 * @param mixed $contactlocationcode
	 */
	public function setContactlocationcode($contactlocationcode) {
		$this->contactlocationcode = $contactlocationcode;
	}

	/**
	 * @return mixed
	 */
	public function getContactcountrycode() {
		return $this->contactcountrycode;
	}

	/**
	 * @param mixed $contactcountrycode
	 */
	public function setContactcountrycode($contactcountrycode) {
		$this->contactcountrycode = $contactcountrycode;
	}

	/**
	 * @return mixed
	 */
	public function getContactcountry() {
		return $this->contactcountry;
	}

	/**
	 * @param mixed $contactcountry
	 */
	public function setContactcountry($contactcountry) {
		$this->contactcountry = $contactcountry;
	}

	/**
	 * @return mixed
	 */
	public function getContactvatnumber() {
		return $this->contactvatnumber;
	}

	/**
	 * @param mixed $contactvatnumber
	 */
	public function setContactvatnumber($contactvatnumber) {
		$this->contactvatnumber = $contactvatnumber;
	}

	/**
	 * @return mixed
	 */
	public function getContactvatratebase() {
		return $this->contactvatratebase;
	}

	/**
	 * @param mixed $contactvatratebase
	 */
	public function setContactvatratebase($contactvatratebase) {
		$this->contactvatratebase = $contactvatratebase;
	}

	/**
	 * @return mixed
	 */
	public function getContacttelephone() {
		return $this->contacttelephone;
	}

	/**
	 * @param mixed $contacttelephone
	 */
	public function setContacttelephone($contacttelephone) {
		$this->contacttelephone = $contacttelephone;
	}

	/**
	 * @return mixed
	 */
	public function getContactfax() {
		return $this->contactfax;
	}

	/**
	 * @param mixed $contactfax
	 */
	public function setContactfax($contactfax) {
		$this->contactfax = $contactfax;
	}

	/**
	 * @return mixed
	 */
	public function getContactmark() {
		return $this->contactmark;
	}

	/**
	 * @param mixed $contactmark
	 */
	public function setContactmark($contactmark) {
		$this->contactmark = $contactmark;
	}

	/**
	 * @return mixed
	 */
	public function getContactinvoicetemplateid() {
		return $this->contactinvoicetemplateid;
	}

	/**
	 * @param mixed $contactinvoicetemplateid
	 */
	public function setContactinvoicetemplateid($contactinvoicetemplateid) {
		$this->contactinvoicetemplateid = $contactinvoicetemplateid;
	}

	/**
	 * @return mixed
	 */
	public function getContactstatus() {
		return $this->contactstatus;
	}

	/**
	 * @param mixed $contactstatus
	 */
	public function setContactstatus($contactstatus) {
		$this->contactstatus = $contactstatus;
	}

	/**
	 * @return mixed
	 */
	public function getContactiban() {
		return $this->contactiban;
	}

	/**
	 * @param mixed $contactiban
	 */
	public function setContactiban($contactiban) {
		$this->contactiban = $contactiban;
	}

	/**
	 * @return mixed
	 */
	public function getContactbic() {
		return $this->contactbic;
	}

	/**
	 * @param mixed $contactbic
	 */
	public function setContactbic($contactbic) {
		$this->contactbic = $contactbic;
	}

	/**
	 * @return mixed
	 */
	public function getContactsepamandatenr() {
		return $this->contactsepamandatenr;
	}

	/**
	 * @param mixed $contactsepamandatenr
	 */
	public function setContactsepamandatenr($contactsepamandatenr) {
		$this->contactsepamandatenr = $contactsepamandatenr;
	}

	/**
	 * @return mixed
	 */
	public function getContactsepamandatedate() {
		return $this->contactsepamandatedate;
	}

	/**
	 * @param mixed $contactsepamandatedate
	 */
	public function setContactsepamandatedate($contactsepamandatedate) {
		$this->contactsepamandatedate = $contactsepamandatedate;
	}

	/**
	 * @return mixed
	 */
	public function getContactsepaincassostatus() {
		return $this->contactsepaincassostatus;
	}

	/**
	 * @param mixed $contactsepaincassostatus
	 */
	public function setContactsepaincassostatus($contactsepaincassostatus) {
		$this->contactsepaincassostatus = $contactsepaincassostatus;
	}

	/**
	 * @return mixed
	 */
	public function getContactinvoicenotes() {
		return $this->contactinvoicenotes;
	}

	/**
	 * @param mixed $contactinvoicenotes
	 */
	public function setContactinvoicenotes($contactinvoicenotes) {
		$this->contactinvoicenotes = $contactinvoicenotes;
	}

	/**
	 * @return mixed
	 */
	public function getContactabout() {
		return $this->contactabout;
	}

	/**
	 * @param mixed $contactabout
	 */
	public function setContactabout($contactabout) {
		$this->contactabout = $contactabout;
	}
	protected $contactsalutation;
	protected $contactaddress1;
	protected $contactaddress2;
	protected $contactpostalcode;
	protected $contactcity;
	protected $contactlocationcode;
	protected $contactcountrycode;
	protected $contactcountry;
	protected $contactvatnumber;
	protected $contactvatratebase;
	protected $contacttelephone;
	protected $contactfax;
	protected $contactmark;
	protected $contactinvoicetemplateid;
	protected $contactstatus;
	protected $contactiban;
	protected $contactbic;
	protected $contactsepamandatenr;
	protected $contactsepamandatedate;
	protected $contactsepaincassostatus;
	protected $contactinvoicenotes;
	protected $contactabout;
}
