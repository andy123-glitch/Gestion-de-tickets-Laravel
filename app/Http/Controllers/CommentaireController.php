<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentairesRequest;
use App\Models\Commentaires;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('commentaires.index')->with('lignes',Commentaires::all()->sortByDesc('created_at'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($idTicket)
    {
        return view('commentaires.ajouter')->with('ticket_id', $idTicket);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentairesRequest $CommentairesRequest)
    {
        $commentaires=new Commentaires();
        $commentaires->nom=$CommentairesRequest->nom;
        $commentaires->commentaire=$CommentairesRequest->commentaire;
        $commentaires->date_commentaire=now();
        $commentaires->ticket_id=$CommentairesRequest->ticket_id;
        $commentaires->save();
        DB::table('tickets')
            ->where('id', $CommentairesRequest->ticket_id)
            ->update(['nom_statut' => $CommentairesRequest->nom,
                    'commentaire_statut' => $CommentairesRequest->commentaire,
                     'date_statut'=>now()]);
        return redirect()->route('tickets.indexAdmin');

    }

    /**
     * Display the specified resource.
     */
    public function show(Commentaires $commentaire,$idTicket)
    {
        return view('commentaires.index')->with('lignes',$commentaire::where('ticket_id',$idTicket)->get()->sortByDesc('created_at'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commentaires $commentaire)
    {
        //
    }
}
