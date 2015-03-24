<?php namespace NextTalent\AcumulusPhp\Models;

class Invoice
{
    protected $concept;
    protected $number;
    protected $vattype;
    protected $issuedate;
    protected $costcenter;
    protected $accountnumber;
    protected $paymentstatus;
    protected $paymentdate;
    protected $description;
    protected $template;
    protected $emailto;
    protected $emailbcc;
    protected $emailfrom;
    protected $subject;
    protected $message;
    protected $confirmreading;
    protected $contact;

    /**
     * @return mixed
     */
    public function getAccountnumber()
    {
        return $this->accountnumber;
    }

    /**
     * @param mixed $accountnumber
     */
    public function setAccountnumber($accountnumber)
    {
        $this->accountnumber = $accountnumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getConcept()
    {
        return $this->concept;
    }

    /**
     * @param mixed $concept
     */
    public function setConcept($concept)
    {
        $this->concept = $concept;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getConfirmreading()
    {
        return $this->confirmreading;
    }

    /**
     * @param mixed $confirmreading
     */
    public function setConfirmreading($confirmreading)
    {
        $this->confirmreading = $confirmreading;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param mixed $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCostcenter()
    {
        return $this->costcenter;
    }

    /**
     * @param mixed $costcenter
     */
    public function setCostcenter($costcenter)
    {
        $this->costcenter = $costcenter;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmailbcc()
    {
        return $this->emailbcc;
    }

    /**
     * @param mixed $emailbcc
     */
    public function setEmailbcc($emailbcc)
    {
        $this->emailbcc = $emailbcc;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmailfrom()
    {
        return $this->emailfrom;
    }

    /**
     * @param mixed $emailfrom
     */
    public function setEmailfrom($emailfrom)
    {
        $this->emailfrom = $emailfrom;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmailto()
    {
        return $this->emailto;
    }

    /**
     * @param mixed $emailto
     */
    public function setEmailto($emailto)
    {
        $this->emailto = $emailto;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIssuedate()
    {
        return $this->issuedate;
    }

    /**
     * @param mixed $issuedate
     */
    public function setIssuedate($issuedate)
    {
        $this->issuedate = $issuedate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentdate()
    {
        return $this->paymentdate;
    }

    /**
     * @param mixed $paymentdate
     */
    public function setPaymentdate($paymentdate)
    {
        $this->paymentdate = $paymentdate;

        return $this;
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

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * @param mixed $template
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVattype()
    {
        return $this->vattype;
    }

    /**
     * @param mixed $vattype
     */
    public function setVattype($vattype)
    {
        $this->vattype = $vattype;

        return $this;
    }

}
