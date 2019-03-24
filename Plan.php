<?php

require 'TrialPlan.php';
require 'PaidPlan.php';
require 'GiftPlan.php';

class Plan 
{
    protected $planName;
    protected $price;
    protected $period;    
    
    public function setPlanName($planName)
    {
        $this->planName = $planName;
        return $this;
    }
    public function getPlanName()
    {
        return $this->planName;
    }
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this->period;
    }
    public function getPeriod()
    {
        return $this->period;
    }
}