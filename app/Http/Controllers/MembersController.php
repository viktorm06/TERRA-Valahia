<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\FilesController as File;

use App\Member;

class MembersController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('members', compact('members'));
    }
    public function create($id = null)
    {
        if ($id == null)
            $member = new Member;
        else 
            $member = Member::find($id);
        $member->name = request('member');
        $member->save();
        File::create_member_img($member->id);//
        return redirect()->back();
    }
    public function members_panel()
    {
        $members = Member::latest()->get();
        return view('admin.members-panel', compact('members'));
    }
    public function member_edit($id)
    {
        $member = Member::find($id);
        return view('admin.edit-member', compact('member'));
    }
    public function member_delete($id)
    {
        $member = new Member;
        $member -> del($id);
        return redirect()->back();
    }
}
