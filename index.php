<?php

class Zulu
{

    private $highest = 0;
    
    public function  per($n, $steps=0)
    { 
        $n = (string) $n;
        
        if (strlen($n) == 1) {
           // echo 'steps ' . $steps . "\n";
            if ($steps > $this->highest) {
                $this->highest = $steps;
                echo 'highest ' . $this->highest . "<Br>";
            }
            return;
        }
        
        $result = 1;
        
        $steps += 1;
        //var_dump('step ' . $steps);
        for($i = 0; $i < strlen($n); $i++) {
           // echo $i . '<br>' . $n[$i] . '<br>';
            //var_dump('digit ' . $n[$i]);
            $result *= (int)$n[$i];
            //var_dump('current result ' . $result);
        }
       // var_dump('result ' . $result);
    
        $this->per($result, $steps);
    }
}

$per = new Zulu();

for($x = 77; $x<7999; $x++) {
    //var_dump('testing ' . $x);
    if(preg_match('~[05]~', $x)){
        continue;
    } 
    $per->per($x);
}
//per(147568993345677543);
//per(2777778888899);

