<?php

namespace App\Http\Controllers;

use App\Medicine;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listdata = DB::table('obat160419077')
            ->join('kategoriobat160419077', 'obat160419077.kategori_obat', '=', 'kategoriobat160419077.id')
            ->select('obat160419077.*', 'kategoriobat160419077.nama as nama', 'obat160419077.id as idobat')
            ->get();

        return view('medicine.index', compact('listdata'));
    }
    public function showobatbatuk()
    {
        $listdata = DB::table('obat160419077')
            ->join('kategoriobat160419077', 'obat160419077.kategori_obat', '=', 'kategoriobat160419077.id')
            ->select('obat160419077.*', 'obat160419077.id as idobat')
            ->where('kategoriobat160419077.nama', '=', 'Batuk')
            ->get();

        return view('medicine.batuk', compact('listdata'));
    }
    public function showhigheststock()
    {
        $listdata = DB::table('obat160419077')
            ->select('obat160419077.*')
            ->orderBy('obat160419077.stok', 'desc')
            ->first();

        return view('report.highest_stock_medicine', compact('listdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
