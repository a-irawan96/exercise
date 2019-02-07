<style>
.red{ color:red; }
.green{ color:green; }
</style>

<?php

$_a=3;
$_b=5;

for ($i=1; $i <= 100; $i++) { 
    # code...
    $a = $i/$_a; $b = $i/$_b;
    
    if(is_int($a)==true and is_float($b)==true){
        $_return = '<span class="red">apa</span>, ';
    }elseif(is_int($b)==true and is_float($a)==true){
        $_return = 'Bole, ';    
    }elseif(is_int($a)==true and is_int($b)==true ){
        $_return ='<span class="green"> ApaBole</span>, ';
    }elseif(is_float($a)==true or is_float($b)==true ){
        $_return = $i.', ';
    }

    echo $_return ;
}
