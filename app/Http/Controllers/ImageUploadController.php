<?php

  
namespace App\Http\Controllers;

  

use Illuminate\Http\Request;

  

class ImageUploadController extends Controller

{

    public function imageUpload()

    {

        return view('imageUpload');

    }

    public function imageDeletePost()
    {
        return view('deleteone');
    }

    public function imageUploadPost()

    {

        request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',

        ]);


$t=date("Y-m-d");

        $imageName = \Auth::user()->name.'-'.$t.time().'-'.'.'.request()->image->getClientOriginalExtension();

$file = 'images/'.\Auth::user()->name;

  if (!$file) {
    mkdir('images/'.\Auth::user()->name, 0777, true);
}

        request()->image->move(public_path($file), $imageName);

  

        return back()
 

            ->with('success','You have successfully uploaded your image.')

            ->with('image',$imageName);

    }

    public function imageDeletePostReal()
    {
        $file = 'images/'.\Auth::user()->name;

$files = glob($file . '/imagename');
 foreach($files as $file){
    if(is_file($file)){
        unlink($file);
    }
    }
}

    

}
