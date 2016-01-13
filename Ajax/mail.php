<?php

$recepient = "kirevden@gmail.com";
$sitename = "Название сайта";

$name = trim($_POST["name"]);
$phone = trim ($_POST[phone]);
$message = "Имя: $name \nТелефон: $phone \nТекс: $text";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Cotent-type: text/plain; churset=\"utf-8\"\n From: $recepient");