<?php

// 随机生成几个汉字
$zh = '';
for ($i = 0; $i < 100; $i++) {
	$zh .= '&#' . rand(19968, 40908) . ';';
}
echo mb_convert_encoding($zh, 'UTF-8', 'HTML-ENTITIES') . "\n";

// 十进制to十六进制
echo dechex(19968) . "\r";
echo dechex(40908) . "\r";

// 两种方式查看“博”字的utf-8的编码 
// e58d9a
$string = "博";
for ($i = 0; $i < strlen($string); $i++) {
	echo dechex(ord($string[$i])) . "\r";
}
var_dump(unpack("H6", "博"));

// 再看看“博”字的unicode code point
// 11100101 10001101 10011010
echo base_convert("e58d9a", 16, 2) . "\r";

// 通常汉字用UTF8表示时是三个字节，格式为「1110XXXX10XXXXXX10XXXXXX」，
// 除掉标志位，把剩余对应位置上的数据抽取出来连接在一起，就得到了 Unicode code point，也就是「0101 001101 011010」
// 111001011000110110011010
// 1110XXXX10XXXXXX10XXXXXX
// 535a(博字的utf16编码)
echo base_convert("0101001101011010",2,16);