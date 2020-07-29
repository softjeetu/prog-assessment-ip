<?php
namespace Cstring;

class Cstring{

    /**
     * Receives a string and convert alternate character to upper case it.
     *
     * @param string $string
     * @return string $nstring
     */
    public static function alternate_upper_lower_case($string=null){
        # if not string
        if ($string == null) return false;
                
        # new string
        $nstring = '';
        
        # iterations
        for($i = 0; $i < strlen($string); $i++){            
            if ($i % 2 == 0) {
                $nstring .= strtolower($string[$i]);
            } else {
                $nstring .= strtoupper($string[$i]);
            }
        }
        
        return $nstring;
    }

    /**
     * Receives a string and create a csv file
     *
     * @param string $string     
     * @return string message
     */
    public static function generate_csv($string){
        # if not string
        if ($string == null) return false;
        
        # file to write
        $file = fopen("string.csv","w");           
        
        # new string
        $nstring = [];
        
        # iterations
        for($i = 0; $i < strlen($string); $i++){            
            $nstring[] = $string[$i];
        }
        
        fwrite($file, implode(',',$nstring));
        
        return "CSV created!";    

        fclose($file); 
    }
    
    /**
     * Receives a string and convert it to upper case
     *
     * @param string $string     
     * @return string $string
     */
    public static function toUpperCase($string){
        # if not string
        if ($string == null) return false;
        
        return strtoupper($string);
    }

}