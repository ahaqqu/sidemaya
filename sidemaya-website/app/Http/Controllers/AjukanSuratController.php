<?php
namespace App\Http\Controllers;

use App\Models\Document;
//use App\Models\DokumenWarga;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class AjukanSuratController extends Controller
{
    public function ajukansurat()
    {
        return view('ajukansurat');
    }


    public function surat(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf|max:10240',
            'category' => 'required',
        ]);

        $document = new Document();
        $document->category=$request->category;
        $file=$request->file('file');

        $document->save();

            $uuid = $document->id;
            $filename= $uuid.'.'.$file->getClientOriginalExtension();

            Storage::disk('storage')->putFileAs('dokumenwarga', $file, $filename);

            //$document->storeAs('dokumenwarga',$filename);
            $document->file = $filename;
            $document->status = "Proses";
            $document->updated_at = Carbon::now()->format('Y-m-d H:i:s');
            $document->updated_by = Auth::user()->id;
            $document->save();

        return redirect()->back()->with('success', "Dokumen sukses diunggah.");
    }
    }

       //$request->file->move('asset',$filename);

       //$data->file=$filename;

       //$data->file=$request->file;
       //$data->category=$request->category;

       //$data->save();



    //} else {
      //  return redirect()->back()->with('error', 'Dokumen gagal diunggah. Sistem hanya mendukung tipe dokumen: doc, docx, dan pdf');
