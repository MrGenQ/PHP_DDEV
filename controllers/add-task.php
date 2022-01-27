<?php
use ToDo\Database;
use ToDo\Task;
if(isset($_POST['save'])){

    $connection = Database::connect();
    $task = new Task($connection);
    $task-> createTask($_POST);
}

require 'views/pages/add-task.view.php';