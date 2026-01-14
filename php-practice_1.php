<?php
// Q1 変数と文字列
$first = "私の名前は「"; //
$name = "樋坂";
$last = "」です。";
echo $first . $name . $last;

// Q2 四則演算
$num = 5 * 4;
echo $num . "\n";
echo $num / 2; 

// Q3 日付操作
$now = date("Y年m月d日 H時i分s秒");
echo "現在時刻は、" . $now . "です。";

// Q4 条件分岐-1 if文
$device = "mac"; 
if ($device === "windows" || $device === "mac") {
    echo "使用OSは、{$device}です。";
} else {
    echo "どちらでもありません。";
}

// Q5 条件分岐-2 三項演算子
$age = 20;
$message = $age < 18 ? "未成年です。" : "成人です。";
echo $message;

// Q6 配列
$kanto = ["東京都", "神奈川県", "栃木県", "千葉県", "埼玉県", "茨城県", "群馬県"];

echo $kanto[2] . "と" . $kanto[3] . "は関東地方の都道府県です。";

// Q7 連想配列-1
$kantou = [
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県" => "千葉市",
    "埼玉県" => "さいたま市",
    "栃木県" => "宇都宮市",
    "群馬県" => "前橋市",
    "茨城県" => "水戸市",
    // 関東以外を追加
    "愛知県"   => "名古屋市",
    "大阪府"   => "大阪市"
];

foreach ($kantou as $capital) {
    echo $capital . "\n";
}

// Q8 連想配列-2
$pref = "埼玉県"; 

if (isset($kantou[$pref])) {
    echo $pref . "の県庁所在地は、" . $kantou[$pref] . "です。";
}

// Q9 連想配列-3
$kantou_list = ["東京都", "神奈川県", "千葉県", "埼玉県", "栃木県", "群馬県", "茨城県"];

foreach ($kantou as $pref => $capital) {
    if (in_array($pref, $kantou_list)) {
        echo $pref . "の県庁所在地は、" . $capital . "です。<br>";
    }
    else {
        echo $pref . "は関東地方ではありません。<br>";
    }
}

// Q10 関数-1
function hello($name) {
    return $name . "さん、こんにちは。";
}

echo hello("金谷") . "\n";
echo hello("安藤");

// Q11 関数-2
function calcTaxInPrice($price) {
    return $price * 1.10;
}

$price = 1000;

$taxInPrice = calcTaxInPrice($price);

echo $price . "円の商品の税込価格は" . $taxInPrice . "円です。";

// Q12 関数とif文
function distinguishNum($num) {
    if ($num % 2 === 0) {
        return $num . "は偶数です。";
    } else {
        return $num . "は奇数です。";
    }
}

echo distinguishNum(11) . "\n";
echo distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($grade) {
    switch ($grade) {
        case "A":
        case "B":
            return "合格です。";

        case "C":
            return "合格ですが追加課題があります。";

        case "D":
            return "不合格です。";

        default:
            return "判定不明です。講師に問い合わせてください。";
    }
}

echo evaluateGrade("A");
echo "\n";
echo evaluateGrade("Z"); 

?>