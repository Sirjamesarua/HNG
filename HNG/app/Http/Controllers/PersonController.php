<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $persons = Person::get();
    
        return response()->json($persons, 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);
    
        $person = Person::create($data);
    
        return response()->json($person, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $person = Person::find($id);
    
        if (!$person) {
            return response()->json(['message' => 'Person not found'], 404);
        }
    
        return response()->json($person);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);
    
        $person = Person::find($id);
    
        if (!$person) {
            return response()->json(['message' => 'Person not found'], 404);
        }
    
        $person->update($data);
    
        return response()->json($person);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $person = Person::find($id);
    
        if (!$person) {
            return response()->json(['message' => 'Person not found'], 404);
        }
    
        $person->delete();
    
        return response()->json(['message' => 'Person deleted']);
    }
}
