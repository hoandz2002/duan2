<?php 
class lopcha {
    public $name;

    function sukien(){
        return "xin chao tao tên là: " . $this->name;
    }
}

class lopcon extends lopcha{};
$x = new lopcon();
$x ->name = "Đào Cử Hoàn";
echo  $x -> sukien();
?>