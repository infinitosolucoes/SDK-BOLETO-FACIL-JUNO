<?php

include_once('Config.php');

class PaymentStatus {

	private $beginDueDate;
	private $endDueDate;
	private $beginPaymentDate;
	private $endPaymentDate;
	private $responseType;
	

    /**
     * @return mixed
     */
    public function getBeginDueDate()
    {
        return $this->beginDueDate;
    }

    /**
     * @param mixed $beginDueDate
     *
     * @return self
     */
    public function setBeginDueDate($beginDueDate)
    {
        $this->beginDueDate = $beginDueDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndDueDate()
    {
        return $this->endDueDate;
    }

    /**
     * @param mixed $endDueDate
     *
     * @return self
     */
    public function setEndDueDate($endDueDate)
    {
        $this->endDueDate = $endDueDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBeginPaymentDate()
    {
        return $this->beginPaymentDate;
    }

    /**
     * @param mixed $beginPaymentDate
     *
     * @return self
     */
    public function setBeginPaymentDate($beginPaymentDate)
    {
        $this->beginPaymentDate = $beginPaymentDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndPaymentDate()
    {
        return $this->endPaymentDate;
    }

    /**
     * @param mixed $endPaymentDate
     *
     * @return self
     */
    public function setEndPaymentDate($endPaymentDate)
    {
        $this->endPaymentDate = $endPaymentDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getResponseType()
    {
        return $this->responseType;
    }

    /**
     * @param mixed $responseType
     *
     * @return self
     */
    public function setResponseType($responseType)
    {
        $this->responseType = $responseType;

        return $this;
    }
}