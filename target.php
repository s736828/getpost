<h3>目標頁面</h3>
<?php
// null(無效的)
//empty判斷一個變數是否為空
//isset判斷是否存在, 判斷變數是否已宣告，且不同於 NULL
$a=0;
// $a=['null'];
// $a=[];
// $a=null;
// $a=1;

// if(isset($a)){
//     echo "真";
// }else{
//     echo "假";
// }

if(empty($a)){
    echo "真";
}else{
    echo "假";
}

// if(isset($_GET)){
//     echo "真";
// }else{
//     echo "假";
// }

// if(empty($_GET)){
//     echo "真";
// }else{
//     echo "假";
// }
echo "<hr>";

if (!empty($_GET)) {
    echo "以下資料為get表單的資料<br>";
    $age=$_GET['age'];
    echo "您的年紀為".$age."<br>";
    if($age>=45){
        echo "屬於中高齡";
    }else if($age>=35){
        echo "屬於中年人";
    }else if($age>=25){
        echo "屬於青年";
    }else{
        echo "屬於少年";
    }
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
}

if (!empty($_POST)) {
    echo "以下資料為post表單的資料<br>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}

// echo $_GET['addr'];
// echo $_POST['name'];
// echo $_POST['type'];
// echo $_POST['img'];

?>