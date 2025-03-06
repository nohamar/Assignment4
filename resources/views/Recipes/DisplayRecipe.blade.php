@extends('layouts.app')

@section('title', 'Display Recipes')

@section('content')
<h1>List of All Recipes</h1>
<ul class="list-group">
    @foreach($recipes as $recipe)
        <li class="list-group-item">
            Name: {{ $recipe->name }} <br>
            Description: {{ $recipe->description }} <br>
            Ingredients: {{ $recipe->ingredients }} <br> 
            Instructions: {{ $recipe->instructions }} 
        </li>
    @endforeach        
</ul>

<h2>Delete a recipe:</h2>
<form method="POST" action="{{ route('recipes.destroy', ['name' => $recipe->name]) }}">
    @csrf
    @method('DELETE')
    <input type="text" name="name" placeholder="Enter name" class="form-control">
    <button type="submit" class="btn btn-primary" >Delete</button>
</form>
@endsection


