<?php

//The Open-Closed Principle requires that classes
// should be open for extension and closed to modification.

$paypalIpn = new PaypalIpn();

$creditCard = new CreditCard();

$paymentManager = new PaymentManager($creditCard);

$paymentManager->process();
