<?php

require "functions.php";
require 'index.view.php';
require "Task.php";
require "database/Connection.php";

$pdo = connectToDb();
$tasks = fetchAllTasks($pdo);

require "index.view.php";