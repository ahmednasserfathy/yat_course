<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class thiscontroller extends Controller
{
    //
    public function about()
    {
        $test="welcome controller";
        return view ('about',compact('test'));
    }

    public function contact()
    {
        $arr=['frist'=>'this',
            'enter'=>
            [
             'x1'=>'this is frist',
             'x2'=>'this is secand'   
             ]
        ] ;   
        return view ('contact')->with($arr);
    }
}

//crud operation = creat .c ,read.r,update.u,delet.d