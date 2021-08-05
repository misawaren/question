<?php
/**
 * 2 から 100 の素数の合計を出力するプログラム
 */

//関数　　素数かどうか（整数型の変数　変数）trueもしくはfalseの値を取る変数のデータ型の一種
function isPrimeNum(int $num): bool
{
    //繰り返し
    for ($i = 2; $i < $num; $i++) {
        //もし〇〇ならば（割り算　比較を意味する演算子
        if ($num % $i == 0) {
            //falseを返す（いいえ）
            return false;
        }
    }
    //trueを返す（はい）
    return true;
}

//2で始まる（$startに2を代入）
$start = 50;

//100で終わる($endに100を代入)
$end = 90;

//　　　範囲の整数を有する配列を作成
$nums = range($start, $end);

//0を$sumに代入　
$sum = 0;

//配列を反復処理する
foreach ($nums as $num) {

    //もし（素数かどうか
    if (isPrimeNum($num)) {

        //足し算の答え（和）　
        $sum += $num;
    }
}

//書式　　　
$format = '%s から %s の素数の合計は %s';

//文字列の出力
printf($format, $start, $end, $sum);