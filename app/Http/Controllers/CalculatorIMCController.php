<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Result;
use App\Models\Category;

class CalculatorIMCController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $results = Result::all();
        //return $results;
        return view('imc.index', compact('results'));
    }

    public function find($id)
    {
        $data = Result::find($id);
        if($data)
        {
            return $data;
        }
        else
        {
            return "not found";
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('imc.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request;
        $imc = round($request-> weight / ($request->height * $request->height));

        if($imc < 19){
            $condicion ="delgadez";
        }else if($imc >= 20 && $imc <= 25){
            $condicion="peso normal";
        }else if($imc >= 26 && $imc <= 30){
            $condicion="sobrepeso";
        }else if($imc > 30 ){
            $condicion="Obesidad";
        }

        
       // $query = DB::insert('insert into results( imc, current_condition ) values(?,?)',[$imc, 
        //$condicion]);
/*
        if($query){
            return 'IMC registered';
        }else{
            return 'IMC not registered';
        }
*/
        Result::create([            
                        'imc' => $imc,
                        'current_condition' => $condicion,
                        'categories_id' => $request->categories_id,
                        'weight' => $request->weight,
                        'height' => $request->height
                    ]);

        //return view('imc', ['imc' => $imc, 'condition' => $condicion]);
        return redirect()->route('imc.index')->with('success', 'IMC registered successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $result = Result::find($id);
        $category = Category::find($result->categories_id);
        return view('imc.show', compact('result', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $result = Result::find($id);
        $categories = Category::all();
        return view('imc.edit', compact('result', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $imc = round ($request->weight / ($request->height * $request->height));

        if($imc < 19){
            $condicion ="delgadez";
        }else if($imc >= 20 && $imc <= 25){
            $condicion="peso normal";
        }else if($imc >= 26 && $imc <= 30){
            $condicion="sobrepeso";
        }else if($imc > 30 ){
            $condicion="Obesidad";
        }

        $query = Result::find($id);
        if($query)
        {
            $query-> update([
                'imc' => $imc,
                'current_condition' => $condicion,
                'categories_id' => $request->categories_id,
                'weight' => $request->weight,
                'height' => $request->height
            ]);
            //return "IMC updated succesfully";
            return redirect()->route('imc.index')->with('success', 'IMC updated successfully');

        }else{
            return "IMC not found";
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $query = Result::find($id);
        if($query)
        {
            $query -> delete();
           // return "IMC delate sucessfully";
           return redirect()->route('imc.index')->with('success', 'IMC deleted successfully');
        }else
        {
            return "IMC no found";
        }
    }
}
