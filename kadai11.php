<?php
class Pet {
 protected $name;

 public function __construct($name) {
     $this->name = $name;
 }
 public function petName(){
     echo "この子の名前は、$this->name です。aaa";
 }
}

class Dogaction extends Pet {
    public function petName(){
        echo "$this->name はワンと鳴いた";
    }
}
class Cataction extends Pet {
    public function petName(){
        echo "$this->name はニャーと鳴いた";
    }
}



$pochi = new Dogaction("ポチ");
$tama = new Cataction("タマ");
echo $pochi->petName();
echo $tama->petName();
echo $pochi->name;
?>