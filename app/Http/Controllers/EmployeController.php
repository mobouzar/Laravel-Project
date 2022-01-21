<?php

namespace App\Http\Controllers;

use App\Models\Employes;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employe = Employes::latest()->paginate(200);
        return view('employes.index',['employes'=>$employe]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employes.create');
    }

    public function store(Request $request)
    {
        
        $request ->validate([
            'nom'=> 'required',
            'tel'=> 'required',
            'mail'=> 'required'
        ]);
        
        Employes::create($request->all());
        return redirect()->route('employes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // executer la requetes sql : select * from products where id=$id
       $employe = Employes::findOrFail($id);
        return view('show', ['employe' => $employe]);
      // return view('show' , compact('product'))
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employe=Employes::find($id);
        return view('employes.update',compact('employe','id'));
    }


    public function update(Request $request, $id)
    {
        $employe = Employes::find($id);
        $employe -> nom = request('nom');
        $employe -> tel = request('tel');
        $employe -> mail = request('mail');
        $employe->save();
       return redirect()->route('employes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employes $employe)
    {
        $employe ->delete();
        return redirect()->route('employes.index');
    }
}
