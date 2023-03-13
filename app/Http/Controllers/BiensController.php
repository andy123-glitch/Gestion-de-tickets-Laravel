<?php

namespace App\Http\Controllers;

use App\Http\Requests\BiensRequest;
use App\Models\Biens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class BiensController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->is('admin/*'))return view('biens.index')->with('lignes',Biens::all()->sortByDesc('created_at'))->with('role','admin');
        return view('biens.index')->with('lignes',Biens::all()->sortByDesc('created_at'))->with('role','user');

    }

    public function show(Request $request,$id)
    {
        if ($request->is('admin/*'))return view('biens.index')->with('lignes',Biens::where("id",$id)->get())->with('role','admin');
        return view('biens.index')->with('lignes',Biens::where("id",$id)->get())->with('role','user');

    }
  
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('biens.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BiensRequest $BiensRequest)
    {
        $bien=new Biens();
        $bien->nom=$BiensRequest->nom;
        $bien->save();
        return redirect()->route('biens.indexAdmin');
    }

    public function updateView($id)
    {
        return view('biens.update')->with('ligne',DB::table('biens')->find($id));
    }

    public function updateData(BiensRequest $BiensRequest)
    {
        $biens=Biens::find($BiensRequest->id);
        $biens->nom=$BiensRequest->nom;
        $biens->save();
        return redirect()->route('biens.indexAdmin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Biens $biens,$id)
    {
        $biens::where('id', $id)->delete();
        return redirect()->route('biens.indexAdmin');
    }
}
