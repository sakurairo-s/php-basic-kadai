<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP課題016</title>
</head>

<body>
  <p>
    <?php
    //クラスを定義する
    class Food {
      //プロパティを定義する
      private $name;
      private $price;

      //メソッドを定義する
      public function show_price() {
        return $this->price;
        }

      //コンストラクタを定義する
      public function __construct(string $name, int $price) {
      $this->name = $name;
      $this->price = $price;
      }

      
     }

      //インスタンス化する
      $food = new Food('ハンバーガー', 300);
        

    //クラスを定義する
    class Animal {
      //プロパティを定義する
      private $name;
      private $height;

      
      //メソッドを定義する
      public function show_height() {
        return $this->height;
        }

      //コンストラクタを定義する
      public function __construct(string $name, int $height) {
      $this->name = $name;
      $this->height = $height;
      }   

      }
      //インスタンス化する
      $animal = new Animal('猫', 50);


 //メソッドにアクセスして実行する
 print_r($food);
 echo '<br>';
 print_r($animal);
 echo '<br>';

 echo $food->show_price() .'<br>';
 echo $animal->show_height();


       
    ?>
</body>

</html>
