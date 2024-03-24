<!DOCKTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>クラスを2つ作って各ヶのインスタンスを出力</title>
        </head>

        <body>
            <p>
                <?php
                // クラス名「Food」を定義する
                class Food {
                    // プロパティを定義する
                    public $name;
                    public $price;
                    
                    // コンストラクタを定義する
                    public function __construct(string $name, int $price) {
                        $this->name = $name;
                        $this->price = $price;
                    }
                }
                // インスタンス化する
                $food = new Food('Potate', 250);

                // インスタンス$userの$priceの値を出力する
                echo print_r($food) . '<br>';

                ?>

                <?php
                // クラス名「Animal」を定義する
                class Animal {
                    
                    // プロパティを定義する
                    public $name;
                    public $height;
                    public $weight;

                    // コンストラクタを定義する
                    public function __construct(string $name, int $height, int $weight) {
                        $this->name = $name;
                        $this->height = $height;
                        $this->weight = $weight;
                    }
                }
                // インスタンス化する
                $Animal = new Animal('dog', 60, 5000);

                // インスタンス$userの$priceの値を出力する
                print_r($Animal);
                ?>
                </p>

                <?php
                // クラス名:priceを定義する
                class price {
                    
                    // プロパティを定義する
                    public $price;
                    
                    // メソッドを定義する
                    public function set_price(int $price) {
                        $this->Food = $price;
                    }
                    public function show_price() {
                        echo $this->Food . '<br>';
                    }
                }
                
                // インスタンス化する
                $Food = new price();
                
                // メソッドにアクセスして実行する
                $Food->set_price('250');
                $Food->show_price();
                ?>
                
                <?php
                // クラス名:heightを定義する
                class height {
                    
                    // プロパティを定義する
                    public $height;
                    
                    // メソッドを定義する
                    public function set_height(int $height) {
                        $this->Animal = $height;
                    }
                    public function show_height() {
                        echo $this->Animal;
                    }
                }
                
                // インスタンス化する
                $Animal = new height();
                
                // メソッドにアクセスして実行する
                $Animal->set_height('60');
                $Animal->show_height();
                ?>
            </body>