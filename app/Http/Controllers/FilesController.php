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
               
            foreach (request()->file('galery') as $image){
                //creating db record
                $file_record = new Gallery;
                $file_record->post_id = $current_post_id;
                $file_record->save();
                //creating images
                $file = Image::make($image);
                $file->save(public_path('img/gallery/big/' . $file_record->id . '.png'));
                $file->resize(120, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $file->save(public_path('img/gallery/small/' . $file_record->id . '.png'));
            }
        }
    } 
    static function delete_post_photos($id)
    {
        FilesController::delete_main_photo($id);
        FilesController::delete_gallery($id);
    }
    static function delete_main_photo($id)
    {
        // Storage::disk('public')->delete([
        //     'img/post_main_small/'. $id . '.png',
        //     'img/post_main_big/'. $id . '.png'
        // ]);
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
    static function create_partner_img($id)
    {
        if (request()->hasFile('logo')) {
            $file = Image::make(request()->file('logo'));
            if ($file->width() > 130){
                $file->resize(130, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }
            $file->save(public_path('img/parteneri/' . $id . '.png'));
        } 
    }
    static function delete_partner_img($id)
    {
        Storage::disk('public')->delete([
            'img/parteneri/'. $id . '.png',
            'img/parteneri/'. $id . '.png'
        ]);
    }
    static function create_member_img($id)
    {
        if (request()->hasFile('member_photo')) {
            $file = Image::make(request()->file('member_photo'));
            if ($file->width() > 150){
                $file->resize(150, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }
            $file->save(public_path('img/members/' . $id . '.png'));
        } 
    }
}