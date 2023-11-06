<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function showlowesttohighestprice()
    {
        //Show category ordered by obat sum price ascending
        //SELECT k.*, SUM(o.harga) as total_price FROM kategoriobat160419077 k INNER JOIN obat160419077 o on k.id = o.kategori_obat group by k.id order by total_price ASC
        // $listdata = DB::select(DB::raw('SELECT k.*, SUM(o.harga) as total_price FROM kategoriobat160419077 k INNER JOIN obat160419077 o on k.id = o.kategori_obat group by k.id order by total_price ASC'));
        $listdata = DB::table('kategoriobat160419077')
            ->join('obat160419077', 'kategoriobat160419077.id', '=', 'obat160419077.kategori_obat')
            ->select('kategoriobat160419077.*', DB::raw('SUM(obat160419077.harga) AS total_price'))
            ->groupBy('kategoriobat160419077.id', 'kategoriobat160419077.nama')
            ->orderBy('total_price', 'asc')
            ->get();
        // dd($listdata);
        return view('report.category_ordered_by_price', compact('listdata'));
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
