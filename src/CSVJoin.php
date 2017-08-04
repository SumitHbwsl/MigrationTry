<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Migration;
use League\Csv\Reader;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


/**
 * Description of CSVJoin
 *
 * @author hbwsl
 */
class CSVJoin extends Command {
    //put your code here    
    protected function configure() {
        $this->setName('app:JoinCSV')
                // the short description shown while running "php bin/console list"
                ->setDescription('This will join Two CSV.')

                // the full command description shown when running the command with
                // the "--help" option
                ->setHelp('This command allows you to join CSVS...')
        ;
    }
    protected function execute(InputInterface $input, OutputInterface $output) {
        $arr1= $this->readFirstCSV();
        $arr2= $this->readSecondCSV();
        $col1="sku";
        $col2="Product_sku";
        $a= $this->join($arr1, $arr2, $col1, $col2);
    }
    public function readFirstCSV()
    {
        if (file_exists('/home/hbwsl/MigrationTry/1.csv')) {
            $csv = Reader::createFromPath('/home/hbwsl/MigrationTry/1.csv');
            $results = $csv->fetchAssoc();
            return $results;
        }
    }
    public function readSecondCSV()
    {
        if (file_exists('/home/hbwsl/MigrationTry/1.csv')) {
            $csv = Reader::createFromPath('/home/hbwsl/MigrationTry/1.csv');
            $results = $csv->fetchAssoc();
            return $results;
        }
    }


    public function join($arr1,$arr2,$col1,$col2){
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
        return $myarray;
        
    }
    
}
