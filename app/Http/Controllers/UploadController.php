<?php

namespace App\Http\Controllers;

use App\Mountain;
use Illuminate\Http\Request;
use File;

class UploadController extends Controller
  {
    public function index()
    {
      $mountains = Mountain::all();
      return view('classes', ['mountains' => $mountains]);
    }

  public function upload(){
  $mountains = Mountain::get();
  return view('/upload',['mountains' => $mountains]);
  }

  public function proses_upload(Request $request){
      $this->validate($request, [
      'nama_gunung' => 'required',
      'file' => 'required|file|image|mimes:jpeg,png,jpg',
      'overview' => 'required',
      'price' => 'required'
    ]);

  // menyimpan data file yang diupload ke variabel $file
    $file = $request->file('file');

    $nama_file = time()."_".$file->getClientOriginalName();

    // isi dengan nama folder tempat kemana file diupload
    $tujuan_upload = 'imagee';
    $file->move($tujuan_upload,$nama_file);

    Mountain::create([
      'nama_gunung' => $request->nama_gunung,
      'file' => $nama_file,
      'overview' => $request->overview,
      'price' => $request->price,
    ]);

    return redirect()->back();
  }

  public function hapus($id){
	// hapus file
	$mountains = Mountain::where('id',$id)->first();
	File::delete('imagee/'.$mountains->file);
	// hapus data
	Mountain::where('id',$id)->delete();
	return redirect()->back();
}




  }
