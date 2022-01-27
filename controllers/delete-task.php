<?php
use ToDo\Request;
use ToDo\Database;
use ToDo\Task;
$id = intval(basename(Request::uri()));
$connection = Database::connect();
$task = new Task($connection);
$task->deleteTask($id);
