<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Intervention\Image\ImageManagerStatic as Image;

use App\Gallery;

use App\Post;

use App\Partner;

use Storage;

class FilesController extends Controller
{
    static function create_photo_for_post($current_post_id = null)
    {
        if (request()->hasFile('main-photo')) {
            if ($current_post_id == null){
                $current_post_id = Post::max('id');
            }
            
            $file = Image::make(request()->file('main-photo'));
            if ($file->width() > 815){
                $file->resize(815, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }
            $file->save(public_path('img/post_main/big/' . $current_post_id . '.png'));
            $file->fit(200, null, function ($constraint) {
                $constraint->upsize();
            });
            $file->save(public_path('img/post_main/small/' . $current_post_id . '.png'));
        }
    }
    static function create_gallery_for_post($current_post_id = null)
    {
        if (request()->hasFile('galery')) { 

            if ($current_post_id == null)
                $current_post_id = Post::max('id');
            else
                FilesController::delete_gallery($current_post_id);
               
            $current_photo_id = Gallery::max('id') + 1;
            foreach (request()->file('galery') as $image){
                //creating db record
                $file = new Gallery;
                $file->post_id = $current_post_id;
                $file->save();
                // dd($current_photo_id);
                //creating images
                $file = Image::make($image);
                $file->save(public_path('img/gallery/big/' . $current_photo_id . '.png'));
                $file->resize(120, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $file->save(public_path('img/gallery/small/' . $current_photo_id . '.png'));
                $current_photo_id++;
            }
        }
    } 
    static function create_partner_img()
    {
        if (request()->hasFile('logo')) {
            $current_img = Partner::orderBy('id', 'desc')->first();
            if ($current_img != null){
                $current_img_id = $current_img->id;
                $current_img_id++;
            }
            else
                $current_img_id = 1;

            $file = Image::make(request()->file('logo'));
            if ($file->width() > 130){
                $file->resize(130, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }
            $file->save(public_path('img/parteneri/' . $current_img_id . '.png'));
        } 
    }
    static function delete_post_photos($id)
    {
        FilesController::delete_main_photo($id);
        FilesController::delete_gallery($id);
    }
    static function delete_main_photo($id)
    {
        Storage::disk('public')->delete([
            'img/post_main_small/'. $id . '.png',
            'img/post_main_big/'. $id . '.png'
        ]);
        Storage::disk('public')->delete([
            'img/post_main/small/'. $id . '.png',
            'img/post_main/big/'. $id . '.png'
        ]);
    }
    static function delete_gallery($id)
    {
        $gallery = Post::find($id)->images;
        
        foreach ($gallery as $image){
            Storage::disk('public')->delete([
                'img/gallery/small/'. $image->id . '.png',
                'img/gallery/big/'. $image->id . '.png'
            ]);
            $image->delete();
        }
    }
}