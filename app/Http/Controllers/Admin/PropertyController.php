<?php

namespace App\Http\Controllers\Admin;

use App\Models\Property;
use App\Models\PropertyImage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;

class PropertyController extends Controller
{
    public function index()
    {
        // $softcode= Softcode::all('name');
        $properties = Property::all();
        return view('admin.property.index',compact('properties'));
    }

    public function store(Request $request)
    {
            try{
                $data = new Property();
                $data->title= $request->title;
                $data->category= $request->category;
                $data->description= $request->description;
                $data->location= $request->location;
                if ($request->image) {
                    $request->validate([
                        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    ]);
                    $rand = mt_rand(100000, 999999);
                    $imageName = time(). $rand .'.'.$request->image->extension();
                    $request->image->move(public_path('images/property'), $imageName);
                    $data->image= $imageName;
                }
                
                $data->created_by= Auth::user()->id;
                $data->save();

                $message ="<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Data Created Successfully.</b></div>";
                return response()->json(['status'=> 300,'message'=>$message]);

            }catch (\Exception $e){
                return response()->json(['status'=> 303,'message'=>'Server Error!!']);

            }

    }

    public function edit($id)
    {
        $where = [
            'id'=>$id
        ];
        $info = Property::where($where)->get()->first();
        return response()->json($info);
    }

    public function update(Request $request, $id)
    {
        $data = Property::find($id);
        $data->title= $request->title;
        $data->category= $request->category;
        $data->description= $request->description;
        $data->location= $request->location;
        if ($request->image != 'null') {
            $image_path = public_path('images/property').'/'.$data->image;
            // unlink($image_path);
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $rand = mt_rand(100000, 999999);
            $imageName = time(). $rand .'.'.$request->image->extension();
            $request->image->move(public_path('images/property'), $imageName);
            $data->image= $imageName;
        }
        
        

        if ($data->save()) {
            $message ="<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Data Updated Successfully.</b></div>";
            return response()->json(['status'=> 300,'message'=>$message]);
        }else{
            return response()->json(['status'=> 303,'message'=>'Server Error!!']);
        }
    }

    public function delete($id)
    {
        if(Property::destroy($id)){
            return response()->json(['success'=>true,'message'=>'Listing Deleted']);
        }
        else{
            return response()->json(['success'=>false,'message'=>'Update Failed']);
        }
    }

    public function image()
    {
        $image = PropertyImage::all();
        return view('admin.property.image',compact('image'));
    }

    public function imageStore(Request $request)
    {
            try{
                $data = new PropertyImage();
                $data->property_id= $request->property_id;
                if ($request->image) {
                    $request->validate([
                        'image' => 'required|image|mimes:jpeg,png,mp4,jpg,gif,svg|max:204800',
                    ]);
                    $rand = mt_rand(100000, 999999);
                    $imageName = time(). $rand .'.'.$request->image->extension();
                    $request->image->move(public_path('images/property'), $imageName);
                    $data->image= $imageName;
                }
                $data->created_by= Auth::user()->id;
                $data->save();

                $message ="<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Data Created Successfully.</b></div>";
                return response()->json(['status'=> 300,'message'=>$message]);

            }catch (\Exception $e){
                return response()->json(['status'=> 303,'message'=>$request->property]);

            }

    }

    public function imageDelete($id)
    {
        if(PropertyImage::destroy($id)){
            return response()->json(['success'=>true,'message'=>'Listing Deleted']);
        }
        else{
            return response()->json(['success'=>false,'message'=>'Update Failed']);
        }
    }


}
