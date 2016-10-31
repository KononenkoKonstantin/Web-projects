<?php

$recepient = "kon-kos1@yandex.ua";
$sitename = "skash.ua";

$name = trim($_GET["name"]);
$email = trim($_GET["email"]);
$phone = trim($_GET["phone"]);
$text = trim($_GET["text"]);

$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \nE-mail: $email \nТелефон: $phone \nТекст: $text";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");