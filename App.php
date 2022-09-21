<?php
require_once __DIR__."/Helper/InputHelper.php";
require_once __DIR__."/Repository/TodoList.repo.php";
require_once __DIR__."/Service/TodoList.service.php";
require_once __DIR__."/View/TodoList.view.php";
require_once __DIR__."/Config/Database.php";
require_once __DIR__ . '/Entity/todolist.php';

use Repository\todoListRepositoryImpl;
use Service\todoListServiceImpl;
use View\todoListView;

$connection=\Config\Database::getConnection();
$todoListRepo=new todoListRepositoryImpl($connection);
$todoListService=new todoListServiceImpl($todoListRepo);
$todoListView=new todoListView($todoListService);

$todoListView->show();
