<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\logs;
use Barryvdh\DomPDF\Facade\Pdf;

class logsController extends Controller
{
    

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $listaLogs = logs::all();

        return view('entradas.listarLogs', compact('listaLogs'));
        // view('listarLogs', compact('listaLogs'));

    }
    public function destroyLogs($id)
    {
        $listaLogs = logs::findorFail($id);
        $listaLogs->delete();

        return redirect()->route('entradas.listarLogs'); 
    }
    public function logsPDF(){

        $listaLogs = logs::all();
       
        $pdf = Pdf::loadView('entradas.logsPDF', compact('listaLogs'));
        return $pdf->stream();
    }
}
