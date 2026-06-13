<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HewanController extends Controller
{
    public function index()
    {
        $hewan = DB::table('hewan')->get();

        return view('hewan', ['hewan' => $hewan]);
    }
    public function tambah()
{
    return view('hewantambah');
}

public function store(Request $request)
{
    DB::table('hewan')->insert([
        'namahewan' => $request->namahewan,
        'jumlahhewan' => $request->jumlahhewan,
        'tersedia' => $request->tersedia
    ]);

    return redirect('/hewan');
}
public function edit($id)
{
    $hewan = DB::table('hewan')->where('kodehewan', $id)->first();

    return view('hewanedit', ['hewan' => $hewan]);
}

public function update(Request $request)
{
    DB::table('hewan')->where('kodehewan', $request->kodehewan)->update([
        'namahewan' => $request->namahewan,
        'jumlahhewan' => $request->jumlahhewan,
        'tersedia' => $request->tersedia
    ]);

    return redirect('/hewan');
}
public function hapus($id)
{
    DB::table('hewan')->where('kodehewan', $id)->delete();

    return redirect('/hewan');
}
public function cari(Request $request)
{
    $cari = $request->cari;

    $hewan = DB::table('hewan')
        ->where('namahewan', 'like', "%" . $cari . "%")
        ->get();

    return view('hewan', ['hewan' => $hewan]);
}
}