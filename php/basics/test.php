<?php
// 示例：设置一个用户偏好 Cookie
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
?>
<!DOCTYPE html>
<html>
<head>
  <title>设置 Cookie</title>
 <meta charset="UTF-8">
</head>
<body>
<p>Cookie "theme" 已设置 (或尝试设置)。</p>
<p>下次访问时，浏览器会自动带上这个 Cookie。</p>
</body>
</html>