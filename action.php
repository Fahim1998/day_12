<?php

require_once 'vendor/autoload.php';
use App\classes\calculator;


if (isset($_POST ['operator']))
{
    $calculator=new calculator($_POST);
    $result    =$calculator->index();
    include 'index.php';
}
else
{
    header('Location: index.php');
}

