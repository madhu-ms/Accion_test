<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReverseStringController extends Controller
{
    

    public function reverseString(Request $request){

       if($request['name']!=''){
        $str = $request['name'];
        for($i=strlen($str)-1, $j=0; $j<$i; $i--, $j++)  
        { 
            $temp = $str[$i]; 
            $str[$i] = $str[$j]; 
            $str[$j] = $temp; 
        } 
        
        echo $str; 
        }else{
           echo 0; 
        }

      
        return view('reverse');
    }

}
