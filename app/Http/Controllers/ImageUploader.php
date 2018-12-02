<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class ImageUploader extends Controller
{
    public function imageUploader($request)
    {
        
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
            return $imageUrl = 'thumbnail_images/'.$imageName;

    }

    protected function cropImageUpload($request)
        {   
            $image= $request->file('product_image');
            $imageFileType = $image->getClientOriginalExtension();
            $imageName = $request->product_name .'.' . $imageFileType;
            // $directory = 'thumbnail_images/';
            $directory = public_path('/thumbnail_images');
            $thumb_img = Image::make($image->getRealPath())->resize(200, 200);
            $imageUrl = 'thumbnail_images/' . $imageName;
            $thumb_img->save($directory.'/'.$imageName,80);
            // $directory = 'product-images/';
            // $image->move($directory, $imageName,80);
            return $imageUrl;
        }
}
