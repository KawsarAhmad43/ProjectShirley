<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AboutContent;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    
    public function index(){
        return view('admin.about.index');
    }
    public function createcontent(){
        return view('admin.about.create');
    }

    


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100|min:3',
            'description' => 'max:1000|min:6',
            'image' => 'required | image|mimes:jpeg,jpg,png,gif,svg|max:2048',

        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'images/AboutImages';
            $AboutImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $AboutImage);
            $input['image'] = "$AboutImage";
        }
        AboutContent::create($input);
        return redirect()->route('headercontent.index')->with('success', 'Content Created Successfully');
    }
}
