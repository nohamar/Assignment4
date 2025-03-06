<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use Illuminate\Support\Facades\Session;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recipes = Recipe::all();
        return view('recipes.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('CreateRecipe');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'desc' => 'required|string',
            'ingredients' => 'required|string',
            'instructions' => 'required|string'
        ]);

        $recipe = new Recipe;
        $recipe->name = $request->name;
        $recipe->description = $request->desc;
        $recipe->ingredients = $request->ingredients;
        $recipe->instructions = $request->instructions;
        $recipe->save();

        Session::flash('message', 'Successfully created recipe!');
        return redirect()->route('recipes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $name)
    {
        $recipe = Recipe::where('name', $name)->firstOrFail();
        return view('ViewRecipe', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $name)
    {
        $recipe = Recipe::where('name', $name)->firstOrFail();
        return view('EditRecipe', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $oldname)
    {
        $recipe = Recipe::where('name', $oldname)->firstOrFail();

        $request->validate([
            'newname' => 'required|string|max:255',
            'desc' => 'required|string',
            'ingredients' => 'required|string',
            'instructions' => 'required|string'
        ]);

        $recipe->name = $request->newname;
        $recipe->description = $request->desc;
        $recipe->ingredients = $request->ingredients;
        $recipe->instructions = $request->instructions;
        $recipe->save();

        return redirect()->route('recipes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $name)
    {
        $recipe = Recipe::where('name', $name)->firstOrFail();
        $recipe->delete();

        return redirect()->route('recipes.index');
    }
}
