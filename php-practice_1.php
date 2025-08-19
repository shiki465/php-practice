<?php
// Q1 変数と文字列
$name = '福倉';
echo '私の名前は「' . $name . '」です。';


// Q2 四則演算
$num = 5 * 4;
echo $num;
echo $num / 2;


// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
echo "現在時刻は、" . date("Y年m月d日 H時i分s秒") . "です。";


// Q4 条件分岐-1 if文
$device = "mac"; 

if ($device == "windows") {
    echo "使用OSは、windowsです。";
} else {
    if ($device == "mac") {
        echo "使用OSは、macです。";
    } else {
        echo "どちらでもありません。";
    }
}


// Q5 条件分岐-2 三項演算子
$age = 18;
if ($age < 18) {
    echo '未成年です。';
} else {
    echo '成人です。';
}


// Q6 配列
$local = ['東京', '神奈川', '埼玉', '栃木', '千葉']; 
echo $local[3] . 'と' . $local[4] . 'は関東地方の都道府県です。';


// Q7 連想配列-1
$kantou = [
    "東京都"   => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県"   => "千葉市",
    "埼玉県"   => "さいたま市",
    "栃木県"   => "宇都宮市",
    "群馬県"   => "前橋市",
    "茨城県"   => "水戸市"
];

foreach ($kantou as $city) {
    echo $city . "<br>";
}


// Q8 連想配列-2
$kantou = [
    "東京都"   => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県"   => "千葉市",
    "埼玉県"   => "さいたま市",
    "栃木県"   => "宇都宮市",
    "群馬県"   => "前橋市",
    "茨城県"   => "水戸市"
];

foreach ($kantou as $ken => $city) {
    if ($ken === "埼玉県") {
        echo $ken . "の県庁所在地は、" . $city . "です。";
    }
}


// Q9 連想配列-3
$prefectures = [
    "東京都"   => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県"   => "千葉市",
    "埼玉県"   => "さいたま市",
    "栃木県"   => "宇都宮市",
    "群馬県"   => "前橋市",
    "茨城県"   => "水戸市",
    "愛知県"   => "名古屋市",
    "大阪府"   => "大阪市"
];

$kantou = ["東京都", "神奈川県", "千葉県", "埼玉県", "栃木県", "群馬県", "茨城県"];

foreach ($prefectures as $ken => $city) {
    if (in_array($ken, $kantou)) {
        echo $ken . "の県庁所在地は、" . $city . "です。" . "<br>";
    } else {
        echo $ken . "は関東地方ではありません。" . "<br>";
    }
}


// Q10 関数-1
function hello($name) {
    return $name . "さん、こんにちは。";
}

echo hello("金谷") . "<br>";
echo hello("安藤") . "<br>";


// Q11 関数-2
function calcTaxInPrice($price) {
    return $price * 1.1;
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

echo distinguishNum(11) . "<br>";
echo distinguishNum(24) . "<br>";


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

echo evaluateGrade("A") . "<br>";
echo evaluateGrade("E") . "<br>";

?>