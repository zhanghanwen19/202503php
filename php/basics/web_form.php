<?php

require_once '../helpers.php';

header('Content-Type: text/html; charset=utf-8');

printRWithBr($_GET);
echoHr();
printRWithBr($_REQUEST);
echoHr();
printRWithBr($_COOKIE);

// 如果你的 session 没有开启，访问 session 可能会报错
session_start();
printRWithBr($_SESSION);

echoHr();
printRWithBr($_SERVER);

echoHr();
printRWithBr($_FILES);

// ⚠️ 始终要记住用户输入的任何内容都是不可信的, 都要进行验证和过滤

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echoHr();
    echoWithBr('只有 POST 请求才会输出以下内容:');
    // 处理表单提交
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    //$age = $_POST['age'] ?? '';

    printRWithBr($_POST);

    // 这里可以添加更多的表单处理逻辑，比如验证和存储数据
    echo "Name: $name<br>";
    echo "Email: $email<br>";
   // echo "Age: $age<br>";
}

// 能这么实现, 但是不要这么做, 我们一般会使用 throw 抛出异常或者是框架的错误处理机制
//header("HTTP/1.1 404 Not Found");
//echo "<h1>404 Not Found</h1>";
//exit;