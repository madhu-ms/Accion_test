<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PalindromeController extends Controller
{
   
    public function checkPalindrome(Request $request){

       if($request['name']!=''){
            $str = $request['name'];
            $response =  $this->validatePalindrome($str);
            echo $response;
        }else{
            echo 0;
        }
        return view('palindrome');
    }

    public function validatePalindrome($str){

        $strLen = strlen($str)-1;
        $revStr = '';
        for($i=$strLen; $i>=0; $i--){
            $revStr.=$str[$i];
        }
        if($revStr == $str)
            return 1;
        else
            return 0;
    }

}
