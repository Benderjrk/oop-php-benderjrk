<?php

// extending with the abstract in paymentTypes.abstract.php
class BuyProduct extends Visa {

    // need this method because its an abstract public function and acts like an interface
    public function getPayments() {
        return $this->visaPayment();
    }
}

?>