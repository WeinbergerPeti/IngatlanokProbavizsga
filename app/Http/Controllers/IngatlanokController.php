<?php

namespace App\Http\Controllers;

use App\Models\Ingatlanok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IngatlanokController extends Controller
{
    public function index()
    {
        $ingatlanok=DB::table("ingatlanok as i")
        ->select("*")
        ->join("kategoriak as k", "i.kategoria", "=", "k.id")
        ->get();
        return $ingatlanok;
    }

    public function show($id)
    {
        $ingatlan = Ingatlanok::find($id);
        return $ingatlan;
    }

    public function store(Request $request)
    {
        $ingatlan= new Ingatlanok();
        $ingatlan->kategoria = $request->kategoria;
        $ingatlan->leiras = $request->leiras;
        $ingatlan->hirdetesDatuma = $request->hirdetesDatuma;
        $ingatlan->tehermentes = $request->tehermentes;
        $ingatlan->ar = $request->ar;
        $ingatlan->kepUrl = $request->kepUrl;
        $ingatlan->save();
    }

    public function update(Request $request)
    {
        $ingatlan= new Ingatlanok();
        $ingatlan->kategoria = $request->kategoria;
        $ingatlan->leiras = $request->leiras;
        $ingatlan->hirdetesDatuma = $request->hirdetesDatuma;
        $ingatlan->tehermentes = $request->tehermentes;
        $ingatlan->ar = $request->ar;
        $ingatlan->kepUrl = $request->kepUrl;
        $ingatlan->save();
    }

    public function destroy($id)
    {
        Ingatlanok::find($id)->delete();
    }
}
