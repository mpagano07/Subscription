<?php

require 'PlanInterface.php';
//require 'SubscriberInterface.php';
//require 'SubscriptionInterface.php';
require 'Plan.php';
//require 'Subscriber.php';
///require 'Subscription.php';


$plan = new Plan;

$plan
->setPlanName('PaidPlan')
->setPrice('9.99')
->setPeriod('30Dias');

var_dump($plan);