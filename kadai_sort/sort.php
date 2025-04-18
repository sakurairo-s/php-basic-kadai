<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        //ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];


        echo '昇順でソートします。<br>';
        sort($nums);
        foreach ($nums as $key){
          echo "$key<br>"; 
        }

        echo '降順でソートします。<br>';
        rsort($nums);
        foreach ($nums as $key){
          echo "$key<br>"; 
        }
        

        ?>
    </p>
</body>

</html>