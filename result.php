<?php
$height = $_GET['height']; //身高
$weight = $_GET['weight']; //體重

echo "您輸入的身高為:" . $height . "公分<br>";
echo "您輸入的體重為:" . $weight . "公斤<br>";
// 世界衛生組織建議以身體質量指數 (Body Mass Index, BMI) 來衡量肥胖程度，
// 其計算公式是以體重 (公斤) 除以身高 (公尺) 的平方。
$bmi = round($weight / (($height / 100) * ($height / 100)), 2);
$level = '';
if ($bmi >= 27) {
    $level = "肥胖";
} else if ($bmi >= 24) {
    $level = "體重過重";
} else if ($bmi >= 18.5) {
    $level = "健康體重";
} else {
    $level = "體重過輕";
}

echo "你的BMI為:" . $bmi;
echo "<br>";
echo "您的體位判定為: $level";
echo "<br>";
echo "<a href='bmi_form.php'>回BMI頁</a>";
