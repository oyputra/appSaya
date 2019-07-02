<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prodi;

class ProdiController extends Controller
{
    public function index()
    {
        //
        $prodis = Prodi::all();
        return view('prodi.index', compact('prodis'));
    }

    public function create()
    {
        //
        if(Gate::allows('admin')){
            return view('prodi.create');
        }else{
            return 'Akses ditolak';
        }
    }

    public function store(Request $request)
    {
        //
        $prodi = new Prodi();
        $request->validate([
            'kode' => 'required',
            'nama' => 'required'
        ]);

        $prodi->kode = $request->kode;
        $prodi->nama = $request->nama;

        $prodi->save();

        return redirect('prodi');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
        $prodi = Prodi::find($id);
        return view('prodi.edit', compact('prodi'));
    }

    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'kode' => 'required',
            'nama' => 'required'
        ]);

        $prodi = Prodi::find($id);
        $prodi->kode = $request->kode;
        $prodi->nama = $request->nama;

        $prodi->save();

        return redirect('/prodi');
    }

    public function destroy($id)
    {
        //
        $prodi = Prodi::find($id);
        $prodi->delete();

        return redirect('/prodi');
    }
}
