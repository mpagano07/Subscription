<?php

require 'PlanInterface.php';
//require 'SubscriberInterface.php';
//require 'SubscriptionInterface.php';
require 'Plan.php';
//require 'Subscriber.php';
///require 'Subscription.php';


$plan = new Plan;

$plan
->setPlanName($setPlanName('PaidPlan'))
->setPrice($setPrice('9.99'))
->setPeriod($setPeriod('30Dias'));

var_dump($plan);