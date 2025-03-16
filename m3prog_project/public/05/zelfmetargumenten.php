<?php

function convertCurrency($amount, $fromCurrency, $toCurrency) {
    print_r(func_get_args());
}

function sendEmail($to, $from, $subject, $message) {
    print_r(func_get_args());
}

function generateRandomString($length) {
    print_r(func_get_args());
}

function calculateArea($length, $width) {
    print_r(func_get_args());
}


convertCurrency(100, "euro", "yen");
generateRandomString(10);
calculateArea(10, 20);
sendEmail("leraar@college.nl", "student@college.nl", "huiswerk", "voor volgende week");

?>
