<?php 
namespace A1;
function test(){
     echo "a1 function";
}
class Animal{};

const TBL_name = "user";


namespace A2;

function test(){
    echo "a2 function";
}
class Animal{};

const TBL_name = "product";

namespace A3;
use A1\Animal;
use A2\Animal as Animal2;
// cách 1
$x = new Animal;
$x = new Animal2;

var_dump($x,$y);
