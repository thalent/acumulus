<?php
/**
 * Created by PhpStorm.
 * User: sieger
 * Date: 7-7-14
 * Time: 23:52
 */

namespace NextTalent\AcumulusPhp\Models;

class Entry extends Model
{
protected $token;
protected $entryid;
protected $entrydate;
protected $entrytype;
protected $entrydescription;
protected $entrynote;
protected $fiscaltype;
protected $vatreversecharge;
protected $foreigneu;
protected $foreignnoneu;
protected $foreignvat;
protected $marginscheme;
protected $contactid;
protected $accountid;
protected $costcenterid;
protected $costtypeid;
protected $invoicenumber;
protected $invoicenote;
protected $invoicelayout;
protected $invoicelayoutid;
protected $totalvalueexclvat;
protected $totalvalue;
protected $paymenttermdays;
protected $deleted;
protected $paymentstatus;

	/**
	 * @return mixed
	 */
	public function getForeignvat() {
		return $this->foreignvat;
	}

	/**
	 * @param mixed $foreignvat
	 */
	public function setForeignvat($foreignvat) {
		$this->foreignvat = $foreignvat;
	}

	/**
	 * @return mixed
	 */
	public function getInvoicelayoutid() {
		return $this->invoicelayoutid;
	}

	/**
	 * @param mixed $invoicelayoutid
	 */
	public function setInvoicelayoutid($invoicelayoutid) {
		$this->invoicelayoutid = $invoicelayoutid;
	}


    /**
     * @return mixed
     */
    public function getPaymentstatus()
    {
        return $this->paymentstatus;
    }

    /**
     * @param mixed $paymentstatus
     */
    public function setPaymentstatus($paymentstatus)
    {
        $this->paymentstatus = $paymentstatus;
    }

    /**
     * @return mixed
     */
    public function getPaymenttermdays()
    {
        return $this->paymenttermdays;
    }

    /**
     * @param mixed $paymenttermdays
     */
    public function setPaymenttermdays($paymenttermdays)
    {
        $this->paymenttermdays = $paymenttermdays;
    }

    /**
     * @return mixed
     */
    public function getAccountid()
    {
        return $this->accountid;
    }

    /**
     * @param mixed $accountid
     */
    public function setAccountid($accountid)
    {
        $this->accountid = $accountid;
    }

    /**
     * @return mixed
     */
    public function getContactid()
    {
        return $this->contactid;
    }

    /**
     * @param mixed $contactid
     */
    public function setContactid($contactid)
    {
        $this->contactid = $contactid;
    }

    /**
     * @return mixed
     */
    public function getCostcenterid()
    {
        return $this->costcenterid;
    }

    /**
     * @param mixed $costcenterid
     */
    public function setCostcenterid($costcenterid)
    {
        $this->costcenterid = $costcenterid;
    }

    /**
     * @return mixed
     */
    public function getCosttypeid()
    {
        return $this->costtypeid;
    }

    /**
     * @param mixed $costtypeid
     */
    public function setCosttypeid($costtypeid)
    {
        $this->costtypeid = $costtypeid;
    }

    /**
     * @return mixed
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param mixed $deleted
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

    /**
     * @return mixed
     */
    public function getEntrydate()
    {
        return $this->entrydate;
    }

    /**
     * @param mixed $entrydate
     */
    public function setEntrydate($entrydate)
    {
        $this->entrydate = $entrydate;
    }

    /**
     * @return mixed
     */
    public function getEntrydescription()
    {
        return $this->entrydescription;
    }

    /**
     * @param mixed $entrydescription
     */
    public function setEntrydescription($entrydescription)
    {
        $this->entrydescription = $entrydescription;
    }

    /**
     * @return mixed
     */
    public function getEntryid()
    {
        return $this->entryid;
    }

    /**
     * @param mixed $entryid
     */
    public function setEntryid($entryid)
    {
        $this->entryid = $entryid;
    }

    /**
     * @return mixed
     */
    public function getEntrynote()
    {
        return $this->entrynote;
    }

    /**
     * @param mixed $entrynote
     */
    public function setEntrynote($entrynote)
    {
        $this->entrynote = $entrynote;
    }

    /**
     * @return mixed
     */
    public function getEntrytype()
    {
        return $this->entrytype;
    }

    /**
     * @param mixed $entrytype
     */
    public function setEntrytype($entrytype)
    {
        $this->entrytype = $entrytype;
    }

    /**
     * @return mixed
     */
    public function getFiscaltype()
    {
        return $this->fiscaltype;
    }

    /**
     * @param mixed $fiscaltype
     */
    public function setFiscaltype($fiscaltype)
    {
        $this->fiscaltype = $fiscaltype;
    }

    /**
     * @return mixed
     */
    public function getForeigneu()
    {
        return $this->foreigneu;
    }

    /**
     * @param mixed $foreigneu
     */
    public function setForeigneu($foreigneu)
    {
        $this->foreigneu = $foreigneu;
    }

    /**
     * @return mixed
     */
    public function getForeignnoneu()
    {
        return $this->foreignnoneu;
    }

    /**
     * @param mixed $foreignnoneu
     */
    public function setForeignnoneu($foreignnoneu)
    {
        $this->foreignnoneu = $foreignnoneu;
    }

    /**
     * @return mixed
     */
    public function getInvoicelayout()
    {
        return $this->invoicelayout;
    }

    /**
     * @param mixed $invoicelayout
     */
    public function setInvoicelayout($invoicelayout)
    {
        $this->invoicelayout = $invoicelayout;
    }

    /**
     * @return mixed
     */
    public function getInvoicenote()
    {
        return $this->invoicenote;
    }

    /**
     * @param mixed $invoicenote
     */
    public function setInvoicenote($invoicenote)
    {
        $this->invoicenote = $invoicenote;
    }

    /**
     * @return mixed
     */
    public function getInvoicenumber()
    {
        return $this->invoicenumber;
    }

    /**
     * @param mixed $invoicenumber
     */
    public function setInvoicenumber($invoicenumber)
    {
        $this->invoicenumber = $invoicenumber;
    }

    /**
     * @return mixed
     */
    public function getMarginscheme()
    {
        return $this->marginscheme;
    }

    /**
     * @param mixed $marginscheme
     */
    public function setMarginscheme($marginscheme)
    {
        $this->marginscheme = $marginscheme;
    }

    /**
     * @return mixed
     */
    public function getPaymentterm()
    {
        return $this->paymenttermdays;
    }

    /**
     * @param mixed $paymenttermdays
     */
    public function setPaymentterm($paymenttermdays)
    {
        $this->paymenttermdays = $paymenttermdays;
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * @return mixed
     */
    public function getTotalvalue()
    {
        return $this->totalvalue;
    }

    /**
     * @param mixed $totalvalue
     */
    public function setTotalvalue($totalvalue)
    {
        $this->totalvalue = $totalvalue;
    }

    /**
     * @return mixed
     */
    public function getTotalvalueexclvat()
    {
        return $this->totalvalueexclvat;
    }

    /**
     * @param mixed $totalvalueexclvat
     */
    public function setTotalvalueexclvat($totalvalueexclvat)
    {
        $this->totalvalueexclvat = $totalvalueexclvat;
    }

    /**
     * @return mixed
     */
    public function getVatreversecharge()
    {
        return $this->vatreversecharge;
    }

    /**
     * @param mixed $vatreversecharge
     */
    public function setVatreversecharge($vatreversecharge)
    {
        $this->vatreversecharge = $vatreversecharge;
    }

}
