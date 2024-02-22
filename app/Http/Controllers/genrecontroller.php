<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class genrecontroller extends Controller
{
    public function create()
    {
        return view('genre.tambah');
    }
    public function store(Request $request)
    {
        $request->validate([
            'genre' => 'required',
            'tgl' => 'required'
        ]);

        DB::table('genre')->insert([
            'genre' => $request['genre'],
            'tgl' => $request['tgl']
        ]);

        return redirect('/genre');
    }
    public function index()
    {
        $genre = DB::table('genre')->get();
        // dd($genre);
        return view('genre.tampil', ['genre' => $genre]);
    }
    public function show($id)
    {
        $genre = DB::table('genre')->where('id', $id)->first();
        return view('genre.detail', ['genre' => $genre]);
    }
    public function edit($id)
    {
        $genre = DB::table('genre')->where('id', $id)->first();
        return view('genre.edit', ['genre' => $genre]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'genre' => 'required',
            'tgl' => 'required'
        ]);
        DB::table('genre')
            ->where('id', $id)
            ->update(
                [
                    'genre' => $request->genre,
                    'tgl' => $request->tgl
                ],
            );
        return redirect('/genre');
    }
    public function destroy($id)
    {
        DB::table('genre')->where('id', $id)->delete();

        return redirect('/genre');
    }
}
