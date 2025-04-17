<?php

// String Functions in PHP
// strlen() - 获取字符串长度
echo strlen("Hello World!"); // 输出: 12
// $返回值 = 函数名();
// echo $返回值; // 输出: 12
echo "<br>";

echo "「你好」所占的字节数是: " . strlen("你好"); // 输出: 6
echo "<br>";

// mb_strlen() - 获取多字节字符串的长度
echo mb_strlen("你好"); // 输出: 2
echo "<br>";
echo mb_strlen("こんにちは朝日"); // 输出: 7
echo "<br>";

$string = "Hello world, hello PHP!";
$find = "hello";

$pos1 = strpos($string, $find); // 从头开始找，区分大小写，找不到 "hello"
if ($pos1 === false) {
    echo "'$find' not found (case-sensitive).\n";
} else {
    echo "'$find' found at index: $pos1\n";
}
echo "<br>";

$findUpper = "Hello";
$pos2 = strpos($string, $findUpper); // 找到了 "Hello"
if ($pos2 !== false) {
    echo "'$findUpper' found at index: $pos2\n"; // 输出: 'Hello' found at index: 0
}
echo "<br>";

// 错误用法示例
if (strpos($string, $findUpper) == false) { // 错误！当 $pos2 为 0 时， 0 == false 为 true！
    echo "错误判断：'$findUpper' not found.\n"; // 这句会意外执行
}
echo "<br>";

// 从第 7 个字符开始搜索 "hello"
$pos3 = strpos($string, $find, 7);
if ($pos3 !== false) {
    echo "从索引 7 开始，'$find' found at index: $pos3\n"; // 输出: 从索引 7 开始，'hello' found at index: 13
}
echo "<br>";

$lastPos = strripos($string, $find); // 找最后一个 "hello" (不区分大小写)
if ($lastPos !== false) {
    echo "Last '$find' found at index (case-insensitive): $lastPos\n"; // 输出: Last 'hello' found at index (case-insensitive): 13
}
echo "<br>";

$email = "user@example.com";
$domain = strstr($email, '@');
echo $domain . "<br>"; // 输出: @example.com

$user = strstr($email, '@', true); // 第三个参数为 true
echo $user . "<br>";   // 输出: user

$url = "https://example.com";
if (str_contains($url, "example")) {
    echo "URL contains 'example'.<br>"; // 输出: URL contains 'example'.
}

if (str_starts_with($url, "https://")) {
    echo "URL uses HTTPS.<br>";
}

$filename = "document.pdf";
if (str_ends_with($filename, ".pdf")) {
    echo "File is a PDF.<br>";
}

function getTreeDepth($node) {
    // 结束条件, 如果节点没有子节点, 则返回 1
    if (!isset($node['children']) || count($node['children']) === 0) {
        return 1;
    }
    $maxChildDepth = 0; // 子节点的最大深度
    // 遍历子节点
    foreach ($node['children'] as $child) {
        // 递归调用 getTreeDepth 函数, 获取子节点的深度
        $childDepth = getTreeDepth($child);

        // 如果子节点的深度大于 maxChildDepth, 则更新 maxChildDepth
        if ($childDepth > $maxChildDepth) {
            $maxChildDepth = $childDepth;
        }
    }
    // 如果节点有子节点, 则返回子节点的最大深度 + 1
    return $maxChildDepth + 1;
}

// 示例用法
$tree = [
    'value' => 'A',
    'children' => [
        [
            'value' => 'B',
            'children' => [
                [
                    'value' => 'D',
                    'children' => []
                ]
            ]
        ],
        [
            'value' => 'C',
            'children' => []
        ]
    ]
];

echo getTreeDepth($tree); // 输出 3
