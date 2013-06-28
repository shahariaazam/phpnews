<?php
require "load.php";

//load application model
require "Model/Model.php";

//load application controller
require "Controller/NewsController.php";

$C = new NewsController();
$C->test();