<?php

namespace App\Http\Controllers;

use App\Models\adverts;
use App\Models\PostImage;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    //Add image
    public function addImage(){
        return view('add_image');
    }
    //Store image
    public function storeAdvert(Request $request){
        $data= new adverts();

        if($request->file('file')){
            $file= $request->file('image_name');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('/Images/'), $filename);
            $data['image_name'] = $filename;
            $data['CategoryID'] = 1;
            $data['Location'] = "LOKACE";
            $data['Price'] = 69;
            $data['Description'] = "POPIS";

        }
        $data->save();
        return redirect()->route('images.view');

    }

    //View post
    public function viewImage(){
        $imageData= PostImage::all();
        return view('item', compact('imageData'));
    }
}
