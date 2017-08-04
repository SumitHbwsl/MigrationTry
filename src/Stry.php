<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Stry
 *
 * @author Sumit Shitole <sumit.shitole@hbwsl.com>
 */
class Stry {
    //put your code here
    
    public function CsvJoin(){
        $arr1=[
            ['sku'=>'test1','qty'=>1,'name'=>'test'],
            ['sku'=>'test2','qty'=>1,'name'=>'test'],
            ['sku'=>'test3','qty'=>4,'name'=>'test']
        ];
        $arr2=[
            ['Product_sku'=>'test1','id'=>1],
            ['Product_sku'=>'test2','id'=>2],
            ['Product_sku'=>'test3','id'=>3]
        ];
        $col1='sku';
        $col2='Product_sku';
        $myarray=array();
        foreach ($arr1 as $a)
        {
            foreach($arr2 as $b)
            {
                if($a[$col1]===$b[$col2])
                {
                    //unset($b[$col2]);
                    array_push($myarray,array_merge($a, $b)); 
                    
                }

            }
            
        }
        print_r($myarray);
        
    }
}
$s=new Stry();
$s->CsvJoin();