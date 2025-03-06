@extends('layouts.app')

@section('title', 'Create Recipe')

@section('content')
<h2>Add New Recipe</h2>
<form method="POST" action="{{ route('recipes.store') }}">
    @csrf
    <label>Name:</label>
    <input type="text" name="name" required>

    <label>Description:</label>
    <input type="text" name="description" required>

    <label>Ingredients:</label>
    <input type="text" name="ingredients" required>

    <label>Instructions:</label>
    <input type="text" name="instructions" required>

    <button type="submit">Save</button>
</form>
@endsection

