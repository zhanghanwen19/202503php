<?php

// 数组运算符
$arr1 = ['a' => 1, 'b' => 2];
$arr2 = ['b' => 3, 'c' => 4];
$union = $arr1 + $arr2; // 数组合并
var_dump($union); // 输出: array(3) { ["a"]=> int(1) ["b"]=> int(2) ["c"]=> int(4) }

$arr3 = ['a' => 1, 'b' => '2']; // 注意 '2' 是字符串
$arr4 = ['b' => 2, 'a' => 1]; // 顺序不同，'b' 的值是整数
var_dump($arr1 == $arr3); // 输出: bool(true), == 的时候值的类型无关, 只判断值本身, PHP 会自动转换类型在比较的时候
var_dump($arr1 === $arr3); // 输出: bool(false), 顺序相同, 值的类型不同
var_dump($arr1 == $arr4); // 输出: bool(true), == 的时候顺序无关
var_dump($arr1 === $arr4); // 输出: bool(false), 顺序不同

echo "<br>";
var_dump(array_merge($arr1, $arr2)); // 输出: array(3) { ["a"]=> int(1) ["b"]=> int(3) ["c"]=> int(4) }, array_merge() 会覆盖相同的键

// 条件赋值运算符
$age = 20;
$status = ($age >= 18) ? '成年' : '未成年'; // 三元运算符
echo "<br>";
echo $status; // 输出: 成年

$username = $_GET['user'] ?: 'guest'; // 如果 $_GET['user'] 不存在会产生一个 Warning
echo "<br>";
echo $username; // 如果 $_GET['user'] 存在且不为空，则输出 $_GET['user'] 的值，否则输出 'guest'
$name = $_GET['username'] ?? '默认用户'; // null 合并运算符
echo "<br>";
echo $name; // 如果 $_GET['username'] 存在且不为 null，则输出 $_GET['username'] 的值，否则输出 '默认用户'

$nickname = $userNickname ?? $userPhone ?? $userEmail ?? '匿名用户'; // 如果 $userNickname, $userPhone, $userEmail 都不存在，则输出 '匿名用户'
echo "<br>";
echo $nickname;

$userAvatar ??= 'default.png'; // 如果 $userAvatar 不存在 || 为 null，则赋值为 'default.png'
echo "<br>";
echo $userAvatar;

$config['timeout'] = null;

$config['timeout'] ??= 30; // 因为 $config['timeout'] 是 null，所以赋值为 30
var_dump($config['timeout']); // 输出: int(30)
echo "<br>";

$config['retry'] = 5;
$config['retry'] ??= 3;   // 因为 $config['retry'] 不是 null，所以不赋值
var_dump($config['retry']); // 输出: int(5)
echo "<br>";

//优先级
$result = 2 + 3 * 4; // 14 (乘法优先)
$result_grouped = (2 + 3) * 4; // 20 (括号优先)

$a = 5;
$b = 10;
$c = 15;
// $check = $a < $b && $b < $c; // true (逻辑运算符优先级低于比较运算符)
$check = ($a < $b) && ($b < $c); // 加括号更清晰
echo $check;
$x = $y = $z = 10; // 赋值运算符是右结合，等同于 $x = ($y = ($z = 10));

// 条件语句
$userAge = 20;
echo "<br>";
if ($userAge >= 18) {
    echo "成年";
}
echo "<br>";
// if ($userAge >= 18) echo "成年"; // 单行 if 语句, 不推荐不要这么写

$score = 55;
if ($score >= 60) {
    echo "成绩及格！";
} else {
    echo "成绩不及格。";
}
echo "<br>";

$score = 85;
if ($score >= 90) {
    echo "优秀 (A)";
} elseif ($score >= 80) { // 到这里时，$score >= 90 肯定是 false 了
    echo "良好 (B)"; // 因为 85 >= 80，执行这句，然后跳出整个结构
} elseif ($score >= 70) {
    echo "中等 (C)";
} elseif ($score >= 60) {
    echo "及格 (D)";
} else {
    echo "不及格 (F)";
}
echo "<br>";

$is_logged_in = true;
if ($is_logged_in) { // 直接判断布尔变量
    echo "用户已登录。\n";
}
echo "<br>";
$username = "Alice";
if ($username) { // 非空字符串被认为是 true
    echo "用户名存在。\n";
}
echo "<br>";
$count = 0;
if ($count) { // 整数 0 被认为是 false，所以这块代码不会执行
    echo "计数大于零。\n";
}
echo "<br>";

$a = 10;
$b = '10';
if ($a === $b) { // 这里是比较值
    echo "相等"; // 这里是比较类型
}
echo "<br>";

// switch 语句
$role = 'editor'; // 假设用户角色是编辑

switch ($role) {
    case 'admin':
        echo "显示：用户管理、文章管理、系统设置\n";
        break; // 执行完 admin 的就跳出

    case 'editor':
        echo "显示：文章管理\n";
    // 注意这里故意没有 break! 会继续执行下面的 case

    case 'author':
        echo "显示：写新文章\n";
        break; // 执行完 author 的就跳出 (editor 角色也会执行到这里)

    case 'subscriber':
        echo "显示：查看文章\n";
        break;

    default:
        echo "无效的角色或未登录用户。\n";
}

// for 循环
for ($i = 0; $i < 5; $i++) {
    echo "第 $i 次循环\n";
}
echo "<br>";

// while 循环
$i = 0; // 初始化在循环外
while ($i < 5) { // 条件判断在循环开始前
    echo "当前数字是: " . $i . "\n";
    echo "<br>";
    $i++; // 更新计数器在循环体内
}

$attempts = 0;
$success = false;
echo "<br>";

do {
    $attempts++;
    echo "尝试第 " . $attempts . " 次连接...\n";
    // 假设 connection_attempt() 返回 true 或 false
    // $success = connection_attempt();
    if ($attempts >= 3) { // 模拟连接成功或达到最大次数
        if(rand(0,1)){ // 模拟随机成功
            $success = true;
            echo "连接成功！\n";
        } else if ($attempts >= 3) {
            echo "尝试次数过多，放弃。\n";
            break; // 可以用 break 提前跳出循环
        }
    }
    // if (!$success) sleep(1); // 如果失败，可以等待一下再试

} while (!$success); // 只要 $success 是 false 就继续循环
echo "总共尝试了 " . $attempts . " 次。\n";
echo "<br>";

// foreach 循环
$fruits = ['apple', 'banana', 'orange'];
foreach ($fruits as $fruit) {
    echo "水果: " . $fruit . "\n";
    echo "<br>";
}

foreach ($fruits as $index => $fruit) {
    echo "索引: " . $index . ", 水果: " . $fruit . "\n";
    echo "<br>";
}
$colors = ['red', 'green', 'blue'];

echo "颜色列表 (只有值):\n";
foreach ($colors as $color) {
    echo "- " . $color . "\n";
}

echo "\n颜色列表 (包含索引):\n";
foreach ($colors as $index => $color) {
    echo "索引 " . $index . " 是颜色 " . $color . "\n";
    echo "<br>";
}

// foreach 循环遍历关联数组
$person = [
    "name" => "小明",
    "age" => 18,
    "city" => "东京"
];
foreach ($person as $key => $value) {
    echo "键: " . $key . ", 值: " . $value . "\n";
    echo "<br>";
}

// 通过引用修改数组元素
$fruits = ['apple' => 100, 'banana' => 80, 'orange' => 60];
foreach ($fruits as $key => &$price) { // 注意这里的 & 符号
    if ($key === 'apple') {
        $price *= 0.9; // 打九折
    }
}
unset($price); // 解除引用，防止后续代码影响
var_dump($fruits);
echo "<br>";

$orders = [
    ['productName' => 'apple', 'price' => 20, 'userId' => 1],
    ['productName' => 'banana', 'price' => 30, 'userId' => 10],
    ['productName' => 'orange', 'price' => 18, 'userId' => 13]
];
foreach ($orders as $order) {
    echo "商品名称: " . $order['productName'] . "\n";
    echo "<br>";
    echo "价格: " . $order['price'] . "\n";
    echo "<br>";
    echo "用户ID: " . $order['userId'] . "\n";
    echo "<br>";
}

$users = [
    ['name' => '小明', 'age' => 18, 'isAdmin' => 0],
    ['name' => '小红', 'age' => 20, 'isAdmin' => 0],
    ['name' => '小刚', 'age' => 22, 'isAdmin' => 1]
];
foreach ($users as $user) {
    if (!$user['isAdmin']) {
        continue; // 跳过非管理员用户
    }
    echo "这里执行的是显示进入管理后台的链接\n";
}

for ($i = 0; $i < 5; $i++) {
    if ($i == 2) {
        echo "(跳过数字 2)\n";
        continue; // 当 $i=2 时，跳过下面的 echo，直接进行 $i++ 并开始下一次迭代
    }
    echo "处理数字: " . $i . "\n";
}
// 输出会是 0, 1, "(跳过数字 2)", 3, 4
