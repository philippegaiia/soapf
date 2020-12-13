<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SupplierController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $suppliers = Supplier::orderByDesc('active')->get();

       return view('suppliers.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supplier = new Supplier();

        return view('suppliers.create', compact('supplier'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Supplier::create($this->validateRequest());

        return redirect('suppliers')->with('message' , 'Un nouveau fournisseur a été créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        return view('suppliers.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('suppliers.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Supplier $supplier)
    {
        $supplier->update($this->validateRequest());

        return redirect('suppliers/' .  $supplier->id)->with('message' , 'Le fournisseur a été mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();

        return redirect('suppliers')->with('message' , 'Le fournisseur a été supprimé avec succès');
    }

    public function validateRequest()
    {
        return request()->validate([
            'code' => 'required|size:3',
            'name' => 'required|max:40',
            'active' => 'required',
            'contact' => 'required|max:40',
            'email' => 'required|max:40',
            'tel' => 'required|max:14',
            'address1' =>'nullable|max:30',
            'address2' =>'nullable|max:30',
            'zip' =>'nullable|max:6',
            'city' => 'nullable|max:30',
            'country' => 'nullable|max:30',
            'infos' => 'nullable|max:1000'
        ]);
    }
}
