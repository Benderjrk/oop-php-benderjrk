# oop-php-benderjrk
Building a PHP learning template for an OOP (Object Oriented Programming)

## Create a PHP File Structure Worthy Of Reuse
In an attempt to better understand Object Oriented Programming with PHP. I am creating this for an easy to use php project I understand.

## File Structure
- index.php
    - abstract
        - paymentTypes.abstract.php
    - classes
        - airplaneFactory.class.php (simple class factory)
        - buyProduct.class.php (creating a class to extend an abstract from paymentType.abstract.php to buyProduct.class.php)
        - payments.class.php (interface classes. grouping like classes together)
        - person.class.php (class with constructor, static data, static methods and methods)
    - includes
        - autoloader.inc.php (autoloads the classes in index.php)
        - nameSubmit.inc.php (php page when form is submitted)
    - validator
        - formValidator.valid.php (working with more complex objects. Using static functions in public functions, complex function use cases)
- README.md

## To Use
The projects starts if you have a server capable of running php and point it towards the index.php file. I hope that it enough for you. I don't know what it really does yet.

Command line (if you have php installed): php -S 127.0.0.1:8000 
