<?php

namespace App\Http\Controllers;

use App\Http\Requests\StateRequest;
use App\Http\Requests\TicketsRequest;
use App\Models\Biens;
use App\Models\Tickets;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->is('admin/*'))return view('tickets.index')->with('lignes',Tickets::all()->sortByDesc('date_statut'))->with('role','admin');
        return view('tickets.index')->with('lignes',Tickets::all()->sortByDesc('date_statut'))->with('role','users');
    }

    public function close($idTicket)
    {   
        $ticket=Tickets::find($idTicket);
        $ticket->statut="Clos";
        $ticket->save();
        return redirect()->route('commentaires.create',['idTicket'=>$idTicket]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tickets.ajouter')->with('biens',Biens::select('id','nom')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TicketsRequest $request)
    {
        var_dump($request->idBiens);
        Tickets::insert(['id_biens' => $request->idBiens, 
        'titre' => $request->titre,
        'description' => $request->description,
        'nom_usager' => $request->nom,
        'date_saisie'=>now(),
        'statut' => 'Nouveau',
        'nom_statut' => $request->nom,
        'date_statut'=>now(),
        'commentaire_statut'=>''
    ]);
    if ($request->is('admin/*'))return redirect()->route('tickets.indexAdmin');
    return redirect()->route('tickets.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateStateView($idTicket)
    {
        return view('tickets.update')->with('idTicket',$idTicket);
    }

    public function updateStateStore(StateRequest $request)
    {
        $ticket=Tickets::find($request->idTicket);
        $ticket->statut=$request->statut;
        $ticket->save();
        if($request->statut == "Rejeté")return redirect()->route('commentaires.create',['idTicket'=>$request->idTicket]);
        return redirect()->route('tickets.indexAdmin');
    }

}
