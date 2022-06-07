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

        if($request->file('file')){
            $file= $request->file('image_name');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('/Images/'), $filename);
            $data['image']= $filename;
            $data['UserID']= 1;
            $data['CategoryID']= 1;
            $data['Location']= "LOKACE";
            $data['Price']= 69;
            $data['Description']= "POPIS";

        }
        $data->save();
        return redirect()->route('images.view');

    }
}
