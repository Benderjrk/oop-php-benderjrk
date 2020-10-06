<?php
// interfaces
interface PaymentInterface {
    // only this class will be available in pay(PaymentInterface $paymentType) since it's the only one declared 
    public function paymentProcess();
}
interface LoginInterface {
    public function oAuth();
}

class Paypal implements PaymentInterface, LoginInterface {
    public function oAuth() {}
    public function payNow() {}
    // this is added to allow for other functions to be inside of BuyProduct allowing for reusable code
    public function paymentProcess() {
        $this->oAuth();
        $this->payNow();
    }
}
class BankTransfer implements PaymentInterface, LoginInterface {
    public function oAuth() {}
    public function payNow() {}
    // this is added to allow for other functions to be inside of BuyProduct allowing for reusable code
    public function paymentProcess() {
        $this->oAuth();
        $this->payNow();
    }
}
class Visa implements PaymentInterface {
    public function payNow() {}
    public function paymentProcess() {
        $this->payNow();
    }
}
class Cash implements PaymentInterface {
    public function payNow() {}
    public function paymentProcess() {
        $this->payNow();
    }
}

class BuyProduct {
    // using interface to group classed together that need a similar function
    public function pay(PaymentInterface $paymentType) {
        $paymentType->paymentProcess();
    }
}

$paymentType = new Cash();
$buyProducts = new BuyProduct();
$buyProducts->pay($paymentType);


?>