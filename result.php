<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ナベアツゲーム</title>
    <!-- faviconの設定-->
    <link rel="icon" href="/Nabeatsu_App/favicon.ico" />
</head>
<body>
    <?php
        echo"1つ目の数字：";
        echo($_POST["first_num"]);
        echo"<br>";
        
        echo"2つ目の数字：" ;
        echo($_POST["second_num"]);
        echo"<br>";

        echo"結果";
        $res = $_POST["first_num"] * $_POST["second_num"];
        echo($res);
        echo"<br>";

        $str_res_all = str_split((string)$res);

        $isExistThree = false;
        foreach($str_res_all as $str){
            if($str == "3"){
                $isExistThree = true;
            }
        }

        if($res%3 == 0 || $isExistThree){
            echo"あなたはアホです。";
            echo"<img src='アホ.jpg'>";
        } else {
            echo"あなたは優秀です。";
            echo"<img src='優秀.jpg'>";
        }  
    ?>
<form action="index.html" method="GET">
    <input type="submit" value="再チャレンジ">
</form>
</body>
</html>