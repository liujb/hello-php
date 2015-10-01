<?php

// printf（功能很强大）
// %d,b,c,f,o,s,x,X
printf("Hi,I'm %d years older.", 24);

// ①填充输出
printf("<br/>%04d", 24); //0024
printf("<br/>%'a4d", 24); //aa24

// ②指定字段宽度
echo "<br/>";
echo "<pre>";
printf("%20s\n", 'ALLEN');
printf("%20s\n", 'IVERSION');
echo "</pre>";

// ③指定精度
printf("<br/>%.2f", 3.33333);

// 存储一个格式化字符串
$cash = sprintf("%.3f", 3.4553);
echo "<br/>You have \$$cash to spend.";