<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;
use PDF;

class TravelController extends Controller
{
  public function index()
  {
    $travel = Travel::all();
    return view('travel/travel_home', ['travel' => $travel]);
  }
  public function tambah()
    {
    	return view('travel/tambah_travel');
    }

    public function store(Request $request)
   {
     $this->validate($request,[
       'nama' => 'required',
       'alamat' => 'required',
       'email' => 'required|email',
       'nomorhp' => 'required|numeric',
       'tanggal' => 'required',
       'gunung' => 'required'
     ]);

       Travel::create([
       'nama' => $request->nama,
       'alamat' => $request->alamat,
       'email' => $request->email,
       'nomorhp' => $request->nomorhp,
       'tanggal' => $request->tanggal,
       'gunung' => $request->gunung,
     ]);

     return redirect('/selesaidaftar');
   }

       public function edit($id){
         $travel = Travel::find($id);
         return view('travel/travel_edit', ['travel' => $travel]);
      }

      public function update($id, Request $request)
      {
    $this->validate($request,[
      'nama' => 'required',
      'alamat' => 'required',
      'email' => 'required|email',
      'nomorhp' => 'required|numeric',
      'tanggal' => 'required',
      'gunung' => 'required'
    ]);

    $travel = Travel::find($id);
    $travel->nama = $request->nama;
    $travel->alamat = $request->alamat;
    $travel->email = $request->email;
    $travel->nomorhp = $request->nomorhp;
    $travel->tanggal = $request->tanggal;
    $travel->gunung = $request->gunung;
    $travel->save();
    return redirect('/travel/travel_home');
}

public function delete($id)
{
    $travel = Travel::find($id);
    $travel->delete();
    return redirect('/travel/travel_home');
}

public function cetak_pdf()
    {
    	$travel = Travel::all();

    	$pdf = PDF::loadview('/travel/travel_pdf',['travel'=>$travel]);
    	return $pdf->download('laporan-customer-pdf');
    }
}
