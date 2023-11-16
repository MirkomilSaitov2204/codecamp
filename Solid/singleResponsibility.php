<?php
// A class should have only one reason to change


// Bad way
//class User {
//    public function save()
//    {
//
//    }
//
//    public function sendEmail()
//    {
//
//    }
//}

//Good
class User {
    public function save()
    {

    }
}

class EmailService {
    public function sendEmail()
    {

    }
}