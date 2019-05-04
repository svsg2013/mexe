<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\System;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class SystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getData= DB::table('systems')
            ->first();
        return view('admin.system.list')->with(['dataSystem'=>$getData]);
    }

    public function edit($id)
    {
        $getData= System::find($id);
        return view('admin.system.list')->with(['dataSystem'=>$getData]);
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
        $system= System::find($id);
        $system->address= $request->txtAddress;
        $system->phone= $request->txtPhone;
        $system->info= $request->txtFooter;
        $system->email= $request->txtEmail;
        $system->analytic= $request->txtAna;
        $system->facebook= $request->txtFacebook;
        $system->youtube= $request->txtYoutube;
        $system->danhmuc1= $request->txtDM1;
        $system->danhmuc2= $request->txtDM2;
        $system->danhmuc3= $request->txtDM3;
        $system->danhmuc4= $request->txtDM4;
        $system->danhmuc5= $request->txtDM5;
        $system->danhmuc6= $request->txtDM6;
        $system->danhmuc7= $request->txtDM7;
        $system->danhmuc8= $request->txtDM8;
        $system->danhmuc9= $request->txtDM9;
        if (Input::hasFile('fileImg')) {
            $file = Input::file('fileImg');
            $name = $file->getClientOriginalName();
            $file->move('upload/thumbnail/', $name);
            $system->logo = $name;
        }
        //TODO banner left
        if (Input::hasFile('fileBannerLeft')) {
            $file = Input::file('fileBannerLeft');
            $name = $file->getClientOriginalName();
            $file->move('upload/thumbnail/', $name);
            $system->banner = $name;
        }
        //TODO background contact
        if (Input::hasFile('fileBgContact')) {
            $file = Input::file('fileBgContact');
            $name = $file->getClientOriginalName();
            $file->move('upload/thumbnail/', $name);
            $system->bgContact = $name;
        }
        //TODO banner product
        if (Input::hasFile('fileBanner')) {
            $file = Input::file('fileBanner');
            $name = $file->getClientOriginalName();
            $file->move('upload/thumbnail/', $name);
            $system->metaName = $name;
        }
        if (Input::hasFile('fileBannerContact')) {
            $file = Input::file('fileBannerContact');
            $name = $file->getClientOriginalName();
            $file->move('upload/thumbnail/', $name);
            $system->bannerContact = $name;
        }
        if (Input::hasFile('fileBannerTuyenDung')) {
            $file = Input::file('fileBannerTuyenDung');
            $name = $file->getClientOriginalName();
            $file->move('upload/thumbnail/', $name);
            $system->bannerTuyenDung = $name;
        }
        $system->save();
        return redirect()->route('system.index')->with('thongbao','Cập nhật thành công');
    }
}
