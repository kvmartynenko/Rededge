<?php

$recepient = "rbru-metrika@yandex.ru";
$sitename = "Rededge";


$phone = trim($_POST["phone"]);
$message = "Телефон: $phone \n";

$pagetitle = "Письмо с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");