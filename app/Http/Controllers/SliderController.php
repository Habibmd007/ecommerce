<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Carbon\Carbon;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('ecom2.admin.slider.slider-manage', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ecom2.admin.slider.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'     => 'required',
            'sub_title' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,svg,bmp,ico|max:1024',
        ]);
        
        $image = $request->file('image');
        $slug = str_slug($request->title);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'-'.'.'.$image->getClientOriginalExtension();
            if (!file_exists('thumbnail_images/')) {
                mkdir('thumbnail_images/', 0777, true);
            }
            $image->move('thumbnail_images/', $imageName);
        }else {
            $imageName = 'default.png';
        }
        
        $slider= new Slider();
        $slider->title      = $request->title;
        $slider->title_span = $request->title_span;
        $slider->sub_title  = $request->sub_title;
        $slider->sub_title_span   = $request->sub_title_span;
        
        $imageUrl = 'thumbnail_images/'.$imageName;
        $slider->image = $imageUrl;
        $slider->save();
        return redirect('slider')->with('msg', 'image saved succsessfully'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('ecom2.admin.slider.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('ecom2.admin.slider.edit',compact('slider') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request;
        $this->validate($request,[
            'title'     => 'required',
            'sub_title' => 'required',
            'image' => 'mimes:png,jpg,jpeg,svg,bmp,ico|max:1024',
        ]);
        
        $image = $request->file('image');
        $slug = str_slug($request->title);
        $slider = Slider::find($id);

        if (isset($image)) {
            unlink($slider->image);
            $slider->delete();
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'-'.'.'.$image->getClientOriginalExtension();
            if (!file_exists('thumbnail_images/')) {
                mkdir('thumbnail_images/', 0777, true);
            }
            $image->move('thumbnail_images/', $imageName);
            $imageUrl = 'thumbnail_images/'.$imageName;
            $slider->title = $request->title;
            $slider->title_span = $request->title_span;
            $slider->sub_title = $request->sub_title;
            $slider->sub_title_span = $request->sub_title_span;
            
            $slider->image = $imageUrl;
            $slider->save();
        }else {
            $imageName = $slider->image;
            $slider->title = $request->title;
            $slider->title_span = $request->title_span;
            $slider->sub_title = $request->sub_title;
            $slider->sub_title_span = $request->sub_title_span;
            
            // $imageUrl = 'thumbnail_images/'.$imageName;
            $slider->image = $imageName;
            $slider->save();
        }
        return redirect('slider')->with('msg', 'slider updated succsessfully');
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        unlink($slider->image);
        $slider->delete();
        return redirect('slider')->with('msg', 'slider Deletd succsessfully');
    }
}
