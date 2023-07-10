<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gudang;
class GudangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Gudang::all();
        return view('gudang.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gudang.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'gudang_kode' => 'bail|required|unique:db_gudang',
            'gudang_barang' => 'required'
         ],
         [
             'gudang_kode.required' => 'Nwajib diisi',
             'gudang_kode.unique' => 'kode Tahun sudah ada',
             'gudang_barang.required' => 'kode wajib diisi'
         ]);
    
         Gudang::create([
             'gudang_kode' => $request->gudang_kode,
             'gudang_barang' => $request->gudang_barang,
             'gudang_jns' => $request->gudang_jns,
             'gudang_jml' => $request->gudang_jml
         ]);
    
        return redirect('gudang');
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
        $row = Gudang::findOrFail($id);
        return view('gudang.edit', compact('row'));
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
        $request->validate([
            'gudang_kode' => 'bail|required|unique:db_gudang',
            'gudang_barang' => 'required'
         ],
         [
             'gudang_kode.required' => 'Nwajib diisi',
             'gudang_kode.unique' => 'kode Tahun sudah ada',
             'gudang_barang.required' => 'kode wajib diisi'
         ]);
    
         $row = Gudang::findOrFail($id);
         $row->update([
             'gudang_kode' => $request->gudang_kode,
             'gudang_barang' => $request->gudang_barang,
             'gudang_jns' => $request->gudang_jns,
             'gudang_jml' => $request->gudang_jml
         ]);
    
        return redirect('gudang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Gudang::findOrFail($id);
        $row->delete();

        return redirect('gudang');
    }
    public function search(Request $request)
    {
        $keyword = $request->search;
        
        $rows = Gudang::where(
           
            'gudang_barang','like',"%".$keyword."%" 
            
            
        )->paginate(5);
        return view('gudang.index', compact('rows'))->with('i',(request()->input('page',1)-1)*5);
    }
}
