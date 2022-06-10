<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class adverts extends Model
{
    use HasFactory;

    public function storeAdvert(Request $request){
        $data= new adverts();

        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('/Images/'), $filename);
        $data['itemName'] = $request->input('itemName');
        $data['location'] = $request->input('location');
        $data['categoryID'] = $request->input('category');
        $data['price'] = $request->input('price');
        $data['description'] = $request->input('description');

        $data->save();
        return redirect()->route('images.view');

    }
}
