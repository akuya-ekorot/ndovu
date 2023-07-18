<?php

interface Gateway {
    public function findCustomer();
    public function findSubscriptionByCustomer();
}

class StripeGateway implements Gateway {

    public function findCustomer() {
    }

    public function findSubscriptionByCustomer() {
    }
}

class PaystackGateway implements Gateway {

    public function findCustomer() {
    }

    public function findSubscriptionByCustomer() {
    }
}

class Subscription {

    protected Gateway $gateway;

    public function __construct(Gateway $gateway) {
        $this->gateway = $gateway;
    }

    public function create() {
    }

    public function cancel() {
    }

    public function invoice() {
    }

    public function swap() {
    }
}

$paystack_subscription = new Subscription(new PaystackGateway());
$stripe_subscription = new Subscription(new StripeGateway());

var_dump($paystack_subscription);
var_dump($stripe_subscription);

?>
