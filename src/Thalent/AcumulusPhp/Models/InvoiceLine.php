<?php

namespace Thalent\AcumulusPhp\Models;

class InvoiceLine
{
protected $itemnumber;
protected $product;
protected $unitprice;
protected $vatrate;
protected $quantity;
protected $costprice;

    public function getInvoiceLine()
    {
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCostprice()
    {
        return $this->costprice;
    }

    /**
     * @param mixed $costprice
     */
    public function setCostprice($costprice)
    {
        $this->costprice = $costprice;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getItemnumber()
    {
        return $this->itemnumber;
    }

    /**
     * @param mixed $itemnumber
     */
    public function setItemnumber($itemnumber)
    {
        $this->itemnumber = $itemnumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param mixed $product
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUnitprice()
    {
        return $this->unitprice;
    }

    /**
     * @param mixed $unitprice
     */
    public function setUnitprice($unitprice)
    {
        $this->unitprice = $unitprice;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVatrate()
    {
        return $this->vatrate;
    }

    /**
     * @param mixed $vatrate
     */
    public function setVatrate($vatrate)
    {
        $this->vatrate = $vatrate;

        return $this;
    }

}
