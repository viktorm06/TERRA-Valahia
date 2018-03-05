<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\FilesController as File;

use App\Partner;

class PartnersController extends Controller
{
    public function create()
    {
        File::create_partner_img();
        $partner = new Partner;
        $partner->name = request('partner');
        $partner->save();
        return redirect()->back();
    }
}
