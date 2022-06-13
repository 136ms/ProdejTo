<?php

namespace App\Http\Controllers;

use App\Models\adverts;
use App\Models\Categories;
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


        $advertData['itemName'] = $request->input('itemName');
        $advertData['location'] = $request->input('location');
        $advertData['categoryID'] = $request->input('category');
        $advertData['price'] = $request->input('price');
        $advertData['description'] = $request->input('description');
        $advertData['userID'] = $user = auth()->user()->id;

        $advertData->save();
        $imageData = new PostImage();


        if($request->hasfile('images'))
        {
            foreach($request->file('images') as $key => $file)
            {
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('/Images/'), $filename);
                $imageData['image'] = $filename;
                $imageData['advertID']  = $advertData->id;
            }
            $imageData->save();
        }

        $added = true;
        $advertsData = adverts::all()->where('userID', auth()->user()->id)->toArray();
        return view('show-advert', compact('advertsData','added'));

    }
    public function addAdvert(){
        $categories = Categories::all();
        return view('add-advert', compact('categories'));
    }

    //View post
    public function viewImage(){
        $imageData= PostImage::all();
        return view('item', compact('imageData'));
    }

    public function showUserAdverts(){
        $advertsData = adverts::all()->where('userID', auth()->user()->id)->toArray();
        return view('show-advert', compact('advertsData'));
    }
    public function viewIndex(){

        $advertsData = adverts::query()->limit(15)->get();
        $id = 1;
        return view('index', compact('advertsData','id'));
    }
    public function viewIndexPage($pos){
        $advertsData = adverts::query()->where('id', '>=', (int)$pos*20)->limit(20)->get();
        $id = (int)$pos + 1;
        return view('index', compact('advertsData','id'));
    }

    public function viewIndexSearch(Request $request){
        $advertsData = adverts::query()->where('itemName','LIKE','%'.$request->input('search').'%')->orWhere('description','LIKE','%'.$request->input('search').'%')->where('id', '>=', (int)$request->input('id')*20)->limit(20)->get();
        $id = 1;
        return view('index', compact('advertsData','id'));
    }



}
