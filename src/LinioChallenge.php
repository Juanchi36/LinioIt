<?php

namespace Challenge;

/**
 * Class that generates the numbers, 
 * replaces them with the corresponding words and prints the result.
 *
 * @author  Juan Martín González
*/ 
class LinioChallenge
{
    private $result;

    public function __construct()
    {
        $this->result = array();
    }

    /**
     * Generate the numbers, replace the strings when appropriate 
     * and save the result in an array.
     * @return object
     */
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
    
    /**
     * Print on screen the data contained in the array.
     * @return bool
     */
    public function print()
    {
        if(isset($this->result)){
            foreach($this->result as $value){
                echo $value . "\n";
            }
        }
        return true;
    }
    
    /**
     * Getter of the result property
     * @return array
     */
    public function getResult()
    {
        return $this->result;
    }
}