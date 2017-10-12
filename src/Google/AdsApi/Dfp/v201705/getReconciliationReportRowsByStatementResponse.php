<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getReconciliationReportRowsByStatementResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201705\ReconciliationReportRowPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201705\ReconciliationReportRowPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\ReconciliationReportRowPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\ReconciliationReportRowPage $rval
     * @return \Google\AdsApi\Dfp\v201705\getReconciliationReportRowsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}