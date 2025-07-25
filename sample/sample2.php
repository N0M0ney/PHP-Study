<?php

// これはコメントアウトです
// コメントアウトはプログラムとして認識されず自由に書くことができます。

// for (初期化式; 条件式; 反復式(変化式))
echo "forループ\n";
for ($i = 0; $i < 10; $i++) {
    // echo "i: $i\n";
}

// 2重ループ
echo "forループ(二重)\n";
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        echo "i: $i\n";
        echo "j: $j\n";
    }
}

// 配列
$array = array('Sun', 'Mon', 'Tue');
echo $array[0];    // Sun が出力される
echo $array[1];    // Mon が出力される
echo $array[2];    // Tue が出力される

// 名前(キー)付き配列
$array['Sun'] = 'Sunday';
$array['Mon'] = 'Monday';
$array['Tue'] = 'Tuesday';
echo $array['Sun'];   // Sunday が出力される
echo $array['Mon'];   // Monday が出力される
echo $array['Tue'];   // Tuesday が出力される


// 名前(キー)付き配列省略形
$array = array(
    'Sun' => 'Sunday',
    'Mon' => 'Monday',
    'Tue' => 'Tuesday',   // ここのカンマ(,)は省略してもよい
);
echo $array['Sun'];   // Sunday が出力される
echo $array['Mon'];   // Monday が出力される
echo $array['Tue'];   // Tuesday が出力される


// 配列を使ったループ
$color_list = array("Red", "Green", "Blue");

// for

echo "\n配列を使ったforループ\n";
for ($i = 0; $i < count($color_list); $i++) {
    echo "$color_list[$i]\n"; // Red, Green, Blue が表示される
}

// foreach
echo "配列を使ったforeachループ\n";
foreach ($color_list as $color) {
    echo "$color\n"; // Red, Green, Blue が表示される                       
}
