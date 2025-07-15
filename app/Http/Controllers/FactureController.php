<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use Illuminate\Http\Request;
use App\Http\Requests\FactureRequest;

class FactureController extends Controller
{
    public function index()
    {
        $factures = Facture::orderBy('id', 'desc')->get();
        return view('facture.factures', compact('factures'));
    }

    public function create()
    {
        return view('facture.createFacture');
    }

    public function store(FactureRequest $request)
    {
        $n_facture = $request->input('n_facture');

        // Vérifier si le numéro de facture existe déjà
        if (Facture::where('n_facture', $n_facture)->exists()) {
            return back()->withErrors(['n_facture' => 'Ce numéro de facture existe déjà.'])->withInput();
        }
        $formField = $request->validated();
        Facture::create($formField);
        return redirect()->route('factures.index')->with('success', 'La facture a été ajouter avec succès');
    }

    public function show(Facture $facture)
    {
        //
    }

    public function edit(Facture $facture)
    {
        return view('facture.updateFacture', compact('facture'));
    }

    public function update(FactureRequest $request, Facture $facture)
    {
        $formField = $request->validated();
        $facture->fill($formField)->save();
        return to_route('factures.index', $facture->id)->with('success', 'La facture a été modifie avec succès');
    }

    public function destroy(Facture $facture)
    {
        $facture->delete();
        return to_route('factures.index')->with('success', 'La facture a etes bien supprimer');
    }

    public function search(Request $request)
    {
        $query = $request->input('search');

        $results = Facture::query();

        if ($query) {
            $results = $results->where('nom_complet', 'LIKE', "%$query%")
                            ->orWhere('date', 'LIKE', "%$query%");
        }

        $results = $results->get();

        return view('facture.factures', compact('results'));
    }
}