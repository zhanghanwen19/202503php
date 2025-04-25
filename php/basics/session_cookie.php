<?php

require_once '../helpers.php';

// 开启会话
session_start();

setcookie('username', 'zhang', time() + 3600, '/');

varDumpWithBr($_COOKIE['username']);


// --- 存储数据 ---
// 假设用户登录成功
$_SESSION['user_id'] = 123;
$_SESSION['username'] = 'Alice';
$_SESSION['login_time'] = time();
$_SESSION['preferences'] = ['theme' => 'dark', 'lang' => 'zh'];
echo "Session 数据已设置。<br>";

// --- 读取数据 ---
if (isset($_SESSION['username'])) {
    echo "欢迎回来, " . htmlspecialchars($_SESSION['username']) . "!<br>";
} else {
    echo "用户未登录。<br>";
}

// 使用 ?? 提供默认值
$lang = $_SESSION['preferences']['lang'] ?? 'en';
echo "用户语言设置: " . htmlspecialchars($lang) . "<br>";

// --- 修改数据 ---
$_SESSION['preferences']['lang'] = 'en_US';

// --- 删除单个 session 变量 ---
unset($_SESSION['login_time']);

//session_start(); // 开启或恢复会话

//示例：设置一个用户偏好 Cookie
// 设置一个名为 "theme" 的 Cookie，值为 "dark"，有效期为 30 天
$cookie_name = "theme";
$cookie_value = "dark";
$expiry_time = time() + (86400 * 30); // 86400 秒 = 1 天

// 调用 setcookie()，在所有 HTML 输出之前
setcookie($cookie_name, $cookie_value, $expiry_time, "/", "", true, true); // 路径设为'/', 开启 secure 和 httponly

// PHP 7.3+ 的选项数组方式:
/*
setcookie($cookie_name, $cookie_value, [
'expires' => $expiry_time,
'path' => '/',
'domain' => '', // 默认当前域名
'secure' => true,
'httponly' => true,
'samesite' => 'Lax' // Lax 或 Strict 通常比 None 更安全
]);
*/
//<!DOCTYPE html>
//<html>
//<head><title>设置 Cookie</title></head>
//<body>
//<p>Cookie "theme" 已设置 (或尝试设置)。</p>
//<p>下次访问时，浏览器会自动带上这个 Cookie。</p>
//</body>
//</html>



