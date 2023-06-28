<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Amenity;

class AdminAmenityController extends Controller
{
    public function index()
    {
        $amenities = Amenity::get();
        return view('admin.amenity_view', compact('amenities'));
    }

    public function add()
    {
        return view('admin.amenity_add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $obj = new Amenity();
        $obj->name = $request->name;
        $obj->save();

        return redirect()->back()->with('success', 'Amenity is added successfully.');

    }


    public function edit($id)
    {
        $amenity_data = Amenity::where('id',$id)->first();
        return view('admin.amenity_edit', compact('amenity_data'));
    }

    public function update(Request $request,$id) 
    {        
        $obj = Amenity::where('id',$id)->first();
        $obj->name = $request->name;
        $obj->update();

        return redirect()->back()->with('success', 'Amenity is updated successfully.');
    }

    public function delete($id)
    {
        $single_data = Amenity::where('id',$id)->first();
        $single_data->delete();

        return redirect()->back()->with('success', 'Amenity is deleted successfully.');
    }
}
