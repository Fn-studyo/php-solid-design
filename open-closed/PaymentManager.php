<?php

class PaymentManager{

    protected $paymentMethod;

    public function __construct(PaymentMethodInterface $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function process()
    {
        $this->paypalIpn->processPayment();
    }
}