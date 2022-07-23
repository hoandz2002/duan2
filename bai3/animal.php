<?php 
class animal{
public $name,$age,$price;
function my(){
    return "xin chào tôi tên là : ".$this -> name . "năm nay tôi" . $this -> age. "tuổi";
}
function getprice(){
    if($this->age>1 && $this->age <=5 ){
        return $this->age *1.5;
        
    }
    else if($this->age <= 10 ){
        return $this->age *2.3;
       
    }
    if($this->age>10 ){
        return $this->age *3.1;
       
    }
}
function __construct($inpname,$inpage)
{
    $this->name=$inpname;
    $this->age=$inpage;
}
};
$tic = new animal("đào cử hoàn",3);

$toc = new animal("hoan dep zai nhat the gioi",23);

// var_dump($tic,$toc);
?>
<h2>Họ và tên: <?= $tic-> name?></h2>
<p>Tuổi: <?= $tic->age ?></p>
<p><?= $tic->my() ?></p>
<p><?= $tic->getprice() ?></p>

