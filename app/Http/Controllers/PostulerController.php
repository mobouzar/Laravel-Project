<?php

namespace App\Http\Controllers;

use App\Models\Employes;
use App\Models\offre_Emplois;
use App\Models\Postuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostulerController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $postuler = Postuler::with('Employes', 'offre_Emplois')->paginate(100);
        $postuler = DB::table('postulers as p')
            ->join('employes as e','p.employe_id' , '=','e.id')
            ->join('offre__emplois as o', 'o.id', '=', 'p.offre__emplois_id')
            ->select('p.id as id_postuler','p.employe_id as employe_id','p.offre__emplois_id as offre__emplois_id','p.date as date','e.*','o.*')->get();
            // dd($postuler);

        return view('postuler.index_postuler' , ['postuler' => $postuler]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employe = Employes::all();
        $offre = offre_Emplois::all();
        return view('postuler.create_postuler' , ['employer' => $employe , 'offre_emplois' => $offre]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Postuler::create($request->all());
            return redirect()->route('postuler.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Postuler  $postuler
     * @return \Illuminate\Http\Response
     */
    public function show(Postuler $postuler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Postuler  $postuler
     * @return \Illuminate\Http\Response
     */
    public function edit(Postuler $postuler)
    {
        // dd( $postuler);
        $employe = Employes::all();
        $offre = offre_Emplois::all();
        
        return view('postuler.update_postuler',  [
            'postuler' => $postuler,'employer' => $employe , 'offre_emplois' => $offre
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Postuler  $postuler
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postuler $postuler)
    {
        $postuler->update([
            'offre__emplois_id' => $request->offre__emplois_id,
            'employe_id' => $request->employe_id,
            'date' => $request->date
        ]);

        return redirect()->route('postuler.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Postuler  $postuler
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postuler $postuler)
    {
        Postuler::destroy($postuler->id);
        return redirect()->route('postuler.index');
    }
}
