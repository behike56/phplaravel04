<?php
/* 課題
 * strip_tags
 * array_push
 * array_merge
 * time, mktime
 * date
*/

// strip_tags 文字列からHTMLおよびタグを取り除く
$string = '<span><! -- --><p>お申し込みは<a href="">こちら</a>から</p></span>';

echo strip_tags($string, '<p><a>');
echo PHP_EOL;


//array_push 一つ以上の要素を配列の最後に追加する
$array = ["red","blue","yellow"];

array_push($array, "green","purple");

print_r($array);
echo PHP_EOL;


//array_merge ひとつまたは複数の配列をマージする
$soft = ["Google", "Apple", "Facebook", "Amazon",1 ,2];
$hard = ["Toyota", "TDK", "Toshiba", "CANON",3 ,4];

$merged = array_merge($soft, $hard);

print_r($merged);


// time  Unix タイムスタンプを返す
$next_week = time() + (6 * 24 * 60 * 60);
echo date('Y-m-d', $next_week);
echo PHP_EOL;


// mktime 現在のす 日付を Unix のタイムスタンプとして取得する
echo date("M-d-Y", mktime(0, 0, 0, 5, 31, 1983));
echo PHP_EOL;


// date ローカルの日付/時刻を書式化する
echo date('Y-m-d');
echo PHP_EOL;

?>