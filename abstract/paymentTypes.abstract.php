<?php

// this is used to be able to extend into buyProduct.class.php
abstract class Visa {
    public function visaPayment() {
        return "Perform Visa transaction";
    }
    // must be this method in the extended class
    abstract public function getPayments();
}

?>