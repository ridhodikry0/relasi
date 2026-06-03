<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masyarakat;

class MasyarakatController extends Controller
{
    public function index(){

        $masyarakat = Masyarakat::all();
        return view('masyarakat.index', compact('masyarakat'));
        }

    public function create()
    {
        return view('masyarakat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_kk' => 'required',
            'nomor_ktp' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            ]);
            
            Masyarakat::create($request->all());
            
            return redirect('/masyarakat')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $masyarakat = Masyarakat::findOrFail($id);
        return view('masyarakat.edit', compact('masyarakat'));
        }
        
        public function update(Request $request, $id)
    {
        $request->validate([
            'nomor_kk' => 'required',
            'nomor_ktp' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        $masyarakat = Masyarakat::findOrFail($id);
        $masyarakat->update($request->all());

        return redirect('/masyarakat')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $masyarakat = Masyarakat::findOrFail($id);
        $masyarakat->delete();

        return redirect('/masyarakat')->with('success', 'Data berhasil dihapus');
    }
}