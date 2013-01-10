<?php

//
// ECHO BENCH
//

$str1 = str_repeat('a', 100);
$str2 = str_repeat('b', 100);
$str3 = str_repeat('c', 100);
$str4 = str_repeat('d', 1000);
$str5 = str_repeat('e', 1000);
$str6 = str_repeat('f', 1000);
$str7 = str_repeat('g', 10000);
$str8 = str_repeat('h', 10000);
$str9 = str_repeat('i', 10000);

//
// TEST 1
//

$mark = microtime(true);

for($i = 0; $i < 1000; $i++) {
	ob_start();
	for($j = 0; $j < 1000; $j++) echo $str1, $str2, $str3;
	ob_get_clean();
}

echo 'test 1: 1.000.000 x echo $str1, $str2, $str3 = ', microtime(true) - $mark, ' sec', "\n";

//
// TEST 2
//

$mark = microtime(true);

for($i = 0; $i < 1000; $i++) {
        ob_start();
        for($j = 0; $j < 1000; $j++) echo $str1 . $str2 . $str3;
        ob_get_clean();
}

echo 'test 2: 1.000.000 x echo $str1 . $str2 . $str3 = ', microtime(true) - $mark, ' sec', "\n";

//
// TEST 3
//

$mark = microtime(true);

for($i = 0; $i < 1000; $i++) {
        ob_start();
        for($j = 0; $j < 1000; $j++) echo "$str1$str2$str3";
        ob_get_clean();
}

echo 'test 3: 1.000.000 x echo "$str1$str2$str3"  = ', microtime(true) - $mark, ' sec', "\n";

//
// TEST 4
//

$mark = microtime(true);

for($i = 0; $i < 1000; $i++) {
        ob_start();
        for($j = 0; $j < 1000; $j++) echo $str1, $str2, $str3, $str4, $str5, $str6;
        ob_get_clean();
}

echo 'test 4: 1.000.000 x echo $str1, $str2, $str3, $str4, $str5, $str6 = ', microtime(true) - $mark, ' sec', "\n";

//
// TEST 5
//

$mark = microtime(true);

for($i = 0; $i < 1000; $i++) {
        ob_start();
        for($j = 0; $j < 1000; $j++) echo $str1 . $str2 . $str3 . $str4 . $str5 . $str6;
        ob_get_clean();
}

echo 'test 5: 1.000.000 x echo $str1 . $str2 . $str3 . $str4 . $str5 . $str6 = ', microtime(true) - $mark, ' sec', "\n";

//
// TEST 6
//

$mark = microtime(true);

for($i = 0; $i < 1000; $i++) {
        ob_start();
        for($j = 0; $j < 1000; $j++) echo "$str1$str2$str3$str4$str5$str6";
        ob_get_clean();
}

echo 'test 6: 1.000.000 x echo "$str1$str2$str3$str4$str5$str6"  = ', microtime(true) - $mark, ' sec', "\n";


//
// TEST 7
//

$mark = microtime(true);

for($i = 0; $i < 1000; $i++) {
        ob_start();
        for($j = 0; $j < 1000; $j++) echo $str1, $str2, $str3, $str4, $str5, $str6, $str7, $str8, $str9;
        ob_get_clean();
}

echo 'test 7: 1.000.000 x echo $str1, $str2, $str3, $str4, $str5, $str6, $str7, $str8, $str9 = ', microtime(true) - $mark, ' sec', "\n";

//
// TEST 8
//

$mark = microtime(true);

for($i = 0; $i < 1000; $i++) {
        ob_start();
        for($j = 0; $j < 1000; $j++) echo $str1 . $str2 . $str3 . $str4 . $str5 . $str6 . $str7 . $str8 . $str9;
        ob_get_clean();
}

echo 'test 8: 1.000.000 x echo $str1 . $str2 . $str3 . $str4 . $str5 . $str6 . $str7 . $str8 . $str9 = ', microtime(true) - $mark, 'sec', "\n";

//
// TEST 9
//

$mark = microtime(true);

for($i = 0; $i < 1000; $i++) {
        ob_start();
        for($j = 0; $j < 1000; $j++) echo "$str1$str2$str3$str4$str5$str6$str7$str8$str9";
        ob_get_clean();
}

echo 'test 9: 1.000.000 x echo "$str1$str2$str3$str4$str5$str6$str7$str8$str9"  = ', microtime(true) - $mark, ' sec', "\n";

