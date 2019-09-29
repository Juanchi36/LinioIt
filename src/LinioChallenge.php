<?php

namespace Challenge;

class LinioChallenge
{
    private $result;

    public function __construct()
    {
        $this->result = array();
    }
    public function play()
    {
        for ( $i = 1; $i <= 100; ++$i ){
            
            if (!($i % 15 ) )
            $this->result[] = 'Linianos';
 
            elseif (!($i % 3 ) )
            $this->result[] = 'Linio';
  
            elseif (!($i % 5 ) )
            $this->result[] = 'IT';
            
            else
            $this->result[] = $i;
 
        }
        return $this;
    }
    
    public function print()
    {
        if(isset($this->result)){
            foreach($this->result as $value){
                echo $value . "\n";
            }
        }
    } 
}