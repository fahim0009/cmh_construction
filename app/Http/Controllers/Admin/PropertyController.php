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
                $property = new Property();
                $property->title= $request->title;
                $property->category= $request->category;
                $property->description= $request->description;
                $property->location= $request->location;
                if ($request->fimage) {
                    $request->validate([
                        'fimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    ]);
                    $rand = mt_rand(100000, 999999);
                    $imageName = time(). $rand .'.'.$request->fimage->extension();
                    $request->fimage->move(public_path('images/property'), $imageName);
                    $property->image= $imageName;
                }
                
                $property->created_by= Auth::user()->id;
                $property->save();
    
            if ($property->id) {

                if ($request->fimage) {
                    $fpic = new PropertyImage();

                    $request->validate([
                        'fimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:204800',
                    ]);
                    $rand = mt_rand(100000, 999999);
                    $imageName = time(). $rand .'.'.$request->fimage->extension();
                    $request->fimage->move(public_path('images/property'), $imageName);

                    $fpic->image= $imageName;
                    $fpic->property_id = $property->id;
                    $fpic->created_by= Auth::user()->id;
                    $fpic->save();
                }

                 //image upload start
                 if ($request->hasfile('media')) {
                    // $media= [];
                    foreach ($request->file('media') as $image) {
                        $rand = mt_rand(100000, 999999);
                        $name = time() . "_" . Auth::id() . "_" . $rand . "." . $image->getClientOriginalExtension();
                        //move image to postimages folder
                        $image->move(public_path() . '/images/property/', $name);
                        $data[] = $name;
                        //insert into picture table

                        $pic = new PropertyImage();
                        $pic->image = $name;
                        $pic->property_id = $property->id;
                        $pic->created_by= Auth::user()->id;
                       $pic->save();
                    }
                }



                $message ="<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Data Created Successfully.</b></div>";
                return response()->json(['status'=> 300,'message'=>$message]);
            }

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
        $property = Property::find($id);
        $property->title= $request->title;
        $property->category= $request->category;
        $property->description= $request->description;
        $property->location= $request->location;
        if ($request->fimage != 'null') {
            $image_path = public_path('images/property').'/'.$property->fimage;
            // unlink($image_path);
            $request->validate([
                'fimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $rand = mt_rand(100000, 999999);
            $imageName = time(). $rand .'.'.$request->fimage->extension();
            $request->fimage->move(public_path('images/property'), $imageName);
            $property->image= $imageName;
        }
        $property->save();
    
        if ($property->id) {

                //image upload start
                if ($request->hasfile('media')) {
                    // $media= [];
                    foreach ($request->file('media') as $image) {
                        $rand = mt_rand(100000, 999999);
                        $name = time() . "_" . Auth::id() . "_" . $rand . "." . $image->getClientOriginalExtension();
                        //move image to postimages folder
                        $image->move(public_path() . '/images/property/', $name);
                        $data[] = $name;
                        //insert into picture table

                        $pic = new PropertyImage();
                        $pic->image = $name;
                        $pic->property_id = $property->id;
                       $pic->save();
                    }
                }

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

    public function image($id)
    {
        $property_id = $id;
        $image = PropertyImage::where('property_id','=', $id)->get();
        return view('admin.property.image',compact('image','property_id'));
    }

    public function imageStore(Request $request)
    {
            try{
                //image upload start
                if ($request->hasfile('media')) {
                    // $media= [];
                    foreach ($request->file('media') as $image) {
                        $rand = mt_rand(100000, 999999);
                        $name = time() . "_" . Auth::id() . "_" . $rand . "." . $image->getClientOriginalExtension();
                        //move image to postimages folder
                        $image->move(public_path() . '/images/property/', $name);
                        $data[] = $name;
                        //insert into picture table

                        $pic = new PropertyImage();
                        $pic->image = $name;
                        $pic->property_id = $request->property_id;
                        $pic->created_by= Auth::user()->id;
                       $pic->save();
                    }
                }

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
