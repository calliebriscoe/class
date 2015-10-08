<?php

function $_Get

function findTemperature()
{
  
};

$entered_first = $_GET['first_name'];

echo 'First Name: '. $entered_first . "</br>";

$entered_last = $_GET['last_name'];

echo 'Last Name: '. $entered_last . "</br>";

$entered_email = $_GET['email'];

echo 'Email: '. $entered_email . "</br>";

$entered_latitude = $_GET['latitude'];

$entered_longitude = $_GET['longitude'];

echo 'For '. $entered_latitude . " and " . $entered_longitude . " the temperature is:</br>";
