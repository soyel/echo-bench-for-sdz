<?php

//
// ECHO BENCH
//

$str1 = str_repeat('a', 1000);
$str2 = str_repeat('b', 1000);
$str3 = str_repeat('c', 1000);
$str4 = str_repeat('d', 1000);
$str5 = str_repeat('e', 1000);
$str6 = str_repeat('f', 1000);

//
// TEST 1
//

$mark = microtime(true);

for($i = 0; $i < 1000; $i++) {
	ob_start();
	for($j = 0; $j < 1000; $j++) echo $str1, $str2, $str3;
	ob_get_clean();
}

echo 'test 1: echo $str1, $str2, $str3 = ', microtime(true) - $mark, ' sec', "\n";

//
// TEST 2
//

$mark = microtime(true);

for($i = 0; $i < 1000; $i++) {
        ob_start();
        for($j = 0; $j < 1000; $j++) echo $str1 . $str2 . $str3;
        ob_get_clean();
}

echo 'test 2: echo $str1 . $str2 . $str3 = ', microtime(true) - $mark, ' sec', "\n";

//
// TEST 3
//

$mark = microtime(true);

for($i = 0; $i < 1000; $i++) {
        ob_start();
        for($j = 0; $j < 1000; $j++) echo "$str1$str2$str3";
        ob_get_clean();
}

echo 'test 3: echo "$str1$str2$str3"  = ', microtime(true) - $mark, ' sec', "\n";

//
// TEST 4
//

$mark = microtime(true);

for($i = 0; $i < 1000; $i++) {
        ob_start();
        for($j = 0; $j < 1000; $j++) echo $str1, $str2, $str3, $str4, $str5, $str6;
        ob_get_clean();
}

echo 'test 4: echo $str1, $str2, $str3, $str4, $str5, $str6 = ', microtime(true) - $mark, ' sec', "\n";

//
// TEST 5
//

$mark = microtime(true);

for($i = 0; $i < 1000; $i++) {
        ob_start();
        for($j = 0; $j < 1000; $j++) echo $str1 . $str2 . $str3 . $str4 . $str5 . $str6;
        ob_get_clean();
}

echo 'test 5: echo $str1 . $str2 . $str3 . $str4 . $str5 . $str6 = ', microtime(true) - $mark, ' sec', "\n";

//
// TEST 6
//

$mark = microtime(true);

for($i = 0; $i < 1000; $i++) {
        ob_start();
        for($j = 0; $j < 1000; $j++) echo "$str1$str2$str3$str4$str5$str6";
        ob_get_clean();
}

echo 'test 6: echo "$str1$str2$str3$str4$str5$str6"  = ', microtime(true) - $mark, ' sec', "\n";

