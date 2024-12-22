
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <?php
    // code và cách hiển thị
    // vì đọc bằng html nên br là xuôgns hàng
    echo "Hello Word! <br>";
    $ho = "Lê";
    $ten = "Kiên";
    $tuoi = 18;
    echo"Họ: $ho<br>"."Tên: $ten<br>"."Tuổi: $tuoi";
    echo "<br>";
    // toán tử số học
    echo "<br>Toán tử số học<br>";
    $a = 10;
    $b = 20;
    echo " a+b = ", $a + $b;
    echo "<br>";
    $a = 10;
    $b = 20;
    echo " a-b = ", $a - $b;
    echo "<br>";
    $a = 10;
    $b = 20;
    echo " a*b = ", $a * $b;
    echo "<br>";
    $a = 10;
    $b = 20;
    echo " a/b = ", $a / $b;
    echo "<br>";
    $a = 10;
    $b = 20;
    echo " a%b = ", $a % $b;
    echo "<br>";
    $a = 10;
    $b = 20;
    $a++;
    echo " a++ = ", $a;
    echo "<br>";
    $a = 10;
    $b = 20;
    $a--;
    echo " a-- = ", $a;
    echo "<br>";

    // toán tử so sánh   
    echo $a=10, $b=20;
    echo "<br>Toán tử so sánh<br>";
    if($a==$b){
        echo "a is equal to b<br>";
    }
    if($a!=$b){ 
        echo "a is not equal to b<br>";
    }
    if($a>$b){
        echo "a is bigger than b<br>";
    }
    if($a<$b){  
        echo "a is smaller than b<br>";
    }

    // toán tử gán
    echo "<br>Toán tử gán<br>";
    $a=10;
    $b= 20;
    echo "a = b =", $a = $b;
    echo "<br>";
    $a=10;
    $b= 20;
    echo "a+=b = ", $a+=$b;
    echo "<br>";
    $a=10;
    $b= 20;
    echo "a-=b = ", $a-=$b;
    echo "<br>";
    $a=10;
    $b= 20;
    echo "a/=b = ", $a/=$b;
    echo "<br>";
    $a=10;
    $b= 20;
    echo "a%=b = ", $a%=$b;
    echo "<br>";

 // if
    echo "Cấu trúc điều kiện<br>";
    echo "<br>IF<br>";
    $a = 1;
    $b = 2;
    if($a>$b){
        echo "a is bigger than b<br>";
    }
    else if($a==$b){ 
        echo "a is equal to b<br>";
    }
    else{
        echo "a is smaller than b<br>";
    }
    // cách khác
    echo ($a > $b) ? "a is bigger than b" : (($a == $b) ? "a is equal to b" : "a is smaller than b");
    
    // swich case 
    echo "<br><br>Switch...case<br>";
    $j =2;

    switch ($j) {
    case 2:
    
    echo "Monday"; break;
    
    case 3:
    
    echo "Tuesday"; break;
    
    case 4:
    
    echo "Wednsday"; break;
    
    case 5:
    
    echo "Thursday"; break;
    
    case 6:
    
    echo "Friday"; break;
    
    case 7:
    
    echo "Saturday"; break;
    
    case 8:
    
    echo "Sunday"; break;
    
    default:
    
    echo "Is not weekday";
    }
    echo "<br><br>while";
    $i = 1;
    while ($i<=3){
        $i++;
    };
    echo "<br>value of variable ". $i."\n";
    echo "<br><br>do...while<br>";
    $y = 1;
    do{
        $y++;
    }while( $y <= 3);
    echo "value of variable ".$y."\n";
    // for
    echo "<br>";
    echo "<br>For<br>";
    for ($x = 0; $x<=5; $x++){
        echo "the num: $x <br>";
    }

    // mảng
    echo "<br>Mảng<br>";

    // 1 index
    $cars = array("BMW", "Toyota","Xanh SM");
    echo $cars[1];
    echo "<br>";
    // 2 Associative array thay index bằng tên hoặc ký tự
    $age = array("Quang"=>35, "Dat"=>3, "Vinh"=>10);
    echo $age["Dat"];
    echo "<br>";
    //3 mảng đa chiều
    $diem = array("Quang"=>array("Ly"=>5, "Hoa"=>7, "Sinh"=>9),
                "Dat"=>array("Ly"=>5, "Hoa"=>7, "Sinh"=>0));
    echo $diem["Quang"]["Ly"];

    echo "<br>";
    // duyệt mảng
    $cars = array("BMW", "Toyota","Xanh SM");
    $count = count($cars);
    for($x=0;$x<=$count; $x++){
        echo $cars[$x]."\n";
    }
    echo "<br>";
    foreach ($age as $te=>$tu){
        echo "Ten: $te - Tuổi: $tu <br>";
    }

    echo "<br>";    
    foreach ($diem as $ten=>$mon){
        echo "Ten: $ten:<br>";
        foreach ($mon as $m1=> $m2){
            echo "$m1:$m2<br>";
        }
            echo "<br>";
    }

    // sx mảng
    echo "Sắp xếp mảng ";
    // tăng dần
    echo"<br>Tăng dần<br>";
    $so = array (5,8,11,2,1,6,9);
    sort($so);
    foreach($so as $num){
        echo $num." ";
    };
    echo"<br>Giảm dần<br>";
    $so = array (5,8,11,2,1,6,9);
    rsort($so);
    foreach($so as $num){
        echo $num." ";
    };
    //Sắp xếp mảng tăng dần theo value sử dụng hàm asort ()
    echo "<br>Sắp xếp mảng tăng dần theo value sử dụng hàm asort ()<br>";
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    asort ($age);
    foreach ($age as $num) {
        echo $num . " ";
    }
    echo "<br>Sắp xếp mảng tăng dần theo value sử dụng hàm arsort ()<br>";
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    arsort ($age);
    foreach ($age as $num) {
        echo $num . " ";
    }
    echo "<br>Sắp xếp mảng tăng dần theo key sử dụng hàm ksort()<br>";
    //Sắp xếp mảng tăng dần theo key sử dụng hàm ksort()
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    ksort ($age);
    foreach ($age as $num1) {
        echo $num1 . " ";
}
    echo "<br>Sắp xếp mảng tăng dần theo key sử dụng hàm krsort()<br>";
    //Sắp xếp mảng tăng dần theo key sử dụng hàm ksort()
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    krsort ($age);
    foreach ($age as $num1) {
        echo $num1 . " ";
}
    // Chuỗi
    //cú pháp chuổi 
    //Các hàm cơ bản trong xử lý chuỗi 
    echo "<br>";
    echo substr("Hello world", 10)."<br>";

    echo substr("Hello world",3,5)."<br>";

    echo substr("Hello world",1)."<br>";

    echo substr("Hello world",5,-3)."<br>";

    echo substr("Hello world",-10)."<br>";

    echo substr("Hello world",-8,4)."<br>";

    echo substr("Hello world",-4,-2)."<br>";

    // strstr
    $web = 'huuquang.com';
    $domain = strstr($web,'.');
    echo $domain.'<br>';

    // strpos: tim vij tri
    $mystring = 'huuquang.com';
    $findme = 'a';
    $pos = strpos($mystring, $findme);
    echo $pos;

    // 
    // dùng \ trước ký tự đặc biệt hoặc '' để hiển thị phía trong hoặc ngược lại " '' ", ' "" '

    // hàm chuỗi
    // subtr cắt chuỗi

    // code lại toàn bộ
    
?>
</body>
</html>