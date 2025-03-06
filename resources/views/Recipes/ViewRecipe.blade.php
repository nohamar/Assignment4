
@extends('layouts/app')

@section('title', 'View Recipe')

@section('content')
<form action="">
    <h2>Enter recipe to view details:</h2>
    <input type="text" placeholder="Name...">
    </form>
    
    <h2>Details of the choosen recipe: </h2>
    <ul class="list-group">
        <li class="list-group-item">Name: {{$recipe.name}}</li>
        <li class="list-group-item"> Description: {{$recipe.description}}</li>
        <li class="list-group-item">Ingredients: {{$recipe.ingredient}}</li>
        <li class="list-group-item">Instructions: {{$recipe.instruction}}</li>
    </ul>
    
@endsection