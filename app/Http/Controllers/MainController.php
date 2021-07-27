<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noah;
use App\Models\HotlistSbu;
use App\Models\HotlistDepot;
use App\Models\HotlistItem;
use DB;
class MainController extends Controller
{
    protected $SBU,$Item,$Depot;
    public function __construct(){
        $this->SBU = new HotlistSbu();
        $this->Item = new HotlistItem();
        $this->Depot = new HotlistDepot();

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$datas = Noah::all();
        //return view('viewing',compact('datas'));
        $datas = HotlistDepot::join('hotlist_sbus', 'hotlist_sbus.id', '=', 'hotlist_depots.id')
        ->join('hotlist_items', 'hotlist_items.id','=','hotlist_sbus.id')
        ->get(['hotlist_depots.depot','hotlist_sbus.sbu','hotlist_items.item','hotlist_depots.id']);
            return view('viewing',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('noah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //Noah::create($request->all());
        DB::beginTransaction();
        $SBU = $this->SBU->create([
            'SBU'=>$request->SBU
        ]);
        $Item = $this->Item->create([
            'Item'=>$request->Item
        ]);
        $Depot = $this->Depot->create([
            'Depot'=>$request->Depot
        ]);
        if($SBU && $Item && $Depot){
            DB::commit();
        }
        else{
            DB::rollback();
        }
        return redirect('/sample');
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
        $datas = HotlistDepot::join('hotlist_sbus', 'hotlist_sbus.id', '=', 'hotlist_depots.id')
        ->join('hotlist_items', 'hotlist_items.id','=','hotlist_sbus.id')->findOrFail($id);
        return view('noahedit',compact('datas'));
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
        $datas = HotlistDepot::join('hotlist_sbus', 'hotlist_sbus.id', '=', 'hotlist_depots.id')
        ->join('hotlist_items', 'hotlist_items.id','=','hotlist_sbus.id')->findorFail($id);
        $datas=$request->all();
        HotlistDepot::where('id',$id)->update(['Depot'=>$datas['Depot']]);
        HotlistItem::where('id',$id)->update(['Item'=>$datas['Item']]);
        HotlistSbu::where('id',$id)->update(['SBU'=>$datas['SBU']]);
        return redirect('/sample');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        DB::table("hotlist_depots")->where("id",$id)->delete();
        DB::table("hotlist_items")->where("id",$id)->delete();
        DB::table("hotlist_sbus")->where("id",$id)->delete();
        DB::commit();
        return redirect()('/sample');
    }
}
