<?php

class Sort{

    public function __construct()
    {
    }

    public function sort2(string $test){
        $len = str_split($test);

        sort($len);
        $temp = 1;
        $tempIndex=[];
        foreach ($len as $key => $value) {
            if($tempIndex){
                if(in_array($value, $tempIndex)){
                    $temp++;
                }
            }

        }
        
        return $len;
    }

    public function sort(array $test)
    {

        sort($test);
        $temp = 1;
        $tempIndex=[];
        foreach ($test as $key => $value) {
            if($tempIndex){
                if(in_array($value, $tempIndex)){
                    $temp++;
                }
            }

        }
        
        return $test;
    }
}

$class = new Sort();

$hasil = $class->sort2("ahalo");

print_r($hasil);
