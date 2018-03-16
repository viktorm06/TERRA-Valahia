<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\FilesController as File;

use App\Partner;

class PartnersController extends Controller
{
    public function create($id = null)
    {
        if ($id == null)
            $partner = new Partner;
        else 
            $partner = Partner::find($id);
        $partner->name = request('partner');
        $partner->save();
        File::create_partner_img($partner->id);//
        return redirect()->back();
    }
    public function partner_edit($id)
    {
        $partner = Partner::find($id);
        return view('admin.edit-partner', compact('partner'));
    }
    public function partner_delete($id)
    {
        File::delete_partner_img($id);
        $partner = new Partner;
        $partner -> del($id);
        return redirect()->back();
    }
}
