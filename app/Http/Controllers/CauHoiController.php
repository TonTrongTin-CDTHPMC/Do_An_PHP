<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CauHoi;

class CauHoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cauhoi=DB::table('cau_hoi')->get();
        return view('ds_cauhoi',compact('cauhoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('them-moi-cau-hoi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cauhoi=new CauHoi;
        $cauhoi->noi_dung=$request->noi_dung;
        $cauhoi->linh_vuc_id=$request->linh_vuc_id;
        $cauhoi->phuong_an_a=$request->phuong_an_a;
        $cauhoi->phuong_an_b=$request->phuong_an_b;
        $cauhoi->phuong_an_c=$request->phuong_an_c;
        $cauhoi->phuong_an_d=$request->phuong_an_d;
        $cauhoi->dap_an=$request->dap_an;
        $cauhoi->save();
        return redirect('ds_cauhoi/them-moi-cau-hoi')->with('success','Đăng kí thàng công');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
