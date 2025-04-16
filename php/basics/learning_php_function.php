<?php

function sayHello(): void
{
    echo "你好, 欢迎来到 PHP 编程世界！<br>";
}

function helloUser($name): void
{
    echo "你好, " . $name . "！<br>";
}

function addNumbers(int &$num1, int $num2): int
{
    $num1 = 1;
    return $num1 + $num2;
}

sayHello();
helloUser("小明");
$num1 = 5;
$sum = addNumbers($num1, 10);
echo $sum . "<br>";
echo "这是变量 num1 的值: $num1<br>";

$a = 5;
$b = &$a; // $b 是 $a 的引用
$b = 20; // 修改 $b 的值
$c = $a; // $c 是 $a 的值的拷贝, 是一个新的变量
echo "这是变量 a 的值: $a<br>"; // 输出: 20

/**
 * 按照城市和日期获取天气信息
 *
 * @param string $city 城市
 * @param string $date 日期
 * @return array|null
 */
function getWeather(string $city, string $date = '2025-04-15'): ?array
{
    $weather = [
        '北京' => ['2025-04-15' => '晴', '2025-04-16' => '阴', '2025-04-17' => '雨'],
        '上海' => ['2025-04-15' => '阴', '2025-04-16' => '雨', '2025-04-17' => '晴'],
        '广州' => ['2025-04-15' => '雨', '2025-04-16' => '晴', '2025-04-17' => '阴']
    ];

    $result = [];
    if (isset($weather[$city][$date])) {
        $result['city'] = $city;
        $result['date'] = $date;
        $result['weather'] = $weather[$city][$date];
        return $result;
    }
    return null;
}

$weather = getWeather('广州', '2025-04-17');
echo $weather['date'] . ' ' . $weather['city'] . "的天气是: " . $weather['weather'] . "<br>";

/**
 * 计算多个数的和
 * 可变参数函数, $numbers 是一个包含所有传入参数的数组
 *
 * @param ...$numbers
 * @return int
 */
function sumNumbers(...$numbers): int
{
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number; // $sum += $number 是 $sum = $sum + $number 的简写
    }
    return $sum;
}

$sum = sumNumbers(1, 2, 3);
echo "1 + 2 + 3 = " . $sum . "<br>";

/**
 * 演示命名参数
 *
 * @param string $username
 * @param string $email
 * @param bool $isActive
 * @param bool $isAdmin
 * @return void
 */
function createUser(string $username, string $email, bool $isActive = true, bool $isAdmin = false): void
{
    echo "创建用户: <br>";
    echo "  用户名: " . $username . "<br>";
    echo "  邮箱: " . $email . "<br>";
    echo "  激活状态: " . ($isActive ? '是' : '否') . "<br>";
    echo "  管理员: " . ($isAdmin ? '是' : '否') . "<br>";
    echo "----<br>";
}

$name = 'lustormstout';
createUser(username: $name, email: 'lustormstout@example.com', isAdmin: 1);

//返回值声明类型
function calculateSum(float $a, float $b) : float {
    return $a + $b;
}
echo calculateSum(3.1, 4.2);
echo "<br>";
function getUserName(int $userId) : ?string { // 返回值可能是 string 或 null
    if ($userId === 1) {
        return "Alice";
    } else {
        return null; // 允许返回 null
    }
}
echo getUserName(1);
echo "<br>";
function processData(array $data) : void { // void 表示函数不应该 return 任何值
    // 处理数据...
    // return 123; // 错误！void 函数不能返回值
    // return; // 可以，相当于 return null;
}

// PHP 8.0+ mixed type
function getAnything() : mixed {
    // 可以返回任何类型的值
    $rand = rand(1,3);
    if ($rand == 1) return 123;
    if ($rand == 2) return "hello";
    return false;
}
echo getAnything();

//作用域
//局部
function myFunc() {
    $localVar = 10; // $localVar 是局部变量
    echo "Inside function: localVar = " . $localVar . "\n";
}

myFunc();
echo "<br>";
//全局
$globalVar = "I am global";

function tryAccessGlobal() {
    // echo $globalVar; // 错误！会产生 Undefined variable 错误
    // PHP 会认为你想访问一个名为 $globalVar 的局部变量，但它不存在
}

tryAccessGlobal();
echo $globalVar; // 在函数外部可以访问

