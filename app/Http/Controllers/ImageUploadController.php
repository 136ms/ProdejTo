<?php

namespace App\Http\Controllers;

use App\Models\adverts;
use App\Models\PostImage;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\String_;

class ImageUploadController extends Controller
{
    //Add image
    public function addImage(){
        return view('add_image');
    }
    //Store image
    public function storeAdvert(Request $request){
        $advertData= new adverts();

        if(!$request->hasFile('image')) {
            return response()->json(['upload_file_not_found'], 400);
        }
        $file = $request->file('image');
        if(!$file->isValid()) {
            return response()->json(['invalid_file_upload'], 400);
        }


       // $advertData['ItemName'] = $request->input('ItemName');
        $advertData['location'] = $request->input('location');
        $advertData['categoryID'] = $request->input('category');
        $advertData['price'] = $request->input('price');
        $advertData['description'] = $request->input('description');
        $advertData['userID'] = $user = auth()->user()->id;

        $advertData->save();
        $imageData = new PostImage();

        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('/Images/'), $filename);
        $imageData['image'] = $filename;
        $imageData['advertID']  = $advertData->id;


        return redirect()->route('userShowItems');

    }

    //View post
    public function viewImage(){
        $imageData= PostImage::all();
        return view('item', compact('imageData'));
    }

    public function showUserAdverts(){
        $advertsData = adverts::all()->where('userID', auth()->user()->id)->toArray();
        //echo $advertsData;
        return view('show-advert', compact('advertsData'));
        //dd(compact('advertsData'));
    }
}
