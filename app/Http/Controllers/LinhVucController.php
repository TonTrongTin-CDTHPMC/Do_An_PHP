<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\LinhVuc;
use App\Http\Request\LinhVucRequest;

class LinhVucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $linhvuc=DB::table('linh_vuc')->get();
        return view('ds_linhvuc',compact('linhvuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

        return view('them-moi-linh-vuc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ten_linh_vuc=="")
        {
            return redirect('ds_linhvuc/them-moi-linh-vuc')->with('error','Vui lòng không để trống');
        }
        else
        {
         $linhvuc=new LinhVuc;
        $linhvuc->ten_linh_vuc=$request->ten_linh_vuc;
        $linhvuc->save();
        return redirect('ds_linhvuc/them-moi-linh-vuc')->with('success','Đăng kí thàng công');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $linhvuc=LinhVuc::findOrFail($id);
        $pageName='linhvuc-update';
        return view('chinhsua-linhvuc',compact('linhvuc','pageName'));
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
        $linhvuc=LinhVuc::find($id);
        $linhvuc->ten_linh_vuc=$request->ten_linh_vuc;
        $linhvuc->save();
        return redirect('ds_linhvuc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $linhvuc=LinhVuc::find($id);
        $linhvuc->delete();
        return redirect('ds_linhvuc');
    }
    
}
