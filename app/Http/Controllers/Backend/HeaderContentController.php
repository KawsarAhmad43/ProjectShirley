<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HeaderContent;
use Illuminate\Http\Request;

class HeaderContentController extends Controller
{


    public function index(){
        return view('admin.headercontent.index');
    }
    public function createcontent(){
        return view('admin.headercontent.create');
    }

    


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100|min:3',
            'designation' => 'max:1000|min:6',
            'image' => 'required | image|mimes:jpeg,jpg,png,gif,svg|max:2048',

        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'images/HeaderImages';
            $HeaderImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $HeaderImage);
            $input['image'] = "$HeaderImage";
        }
        HeaderContent::create($input);
        return redirect()->route('headercontent.index')->with('success', 'Content Created Successfully');
    }
}
