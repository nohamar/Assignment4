@extends('layouts.app')

@section('title', 'Edit Recipe')

@section('content')
<h2>Edit Recipe</h2>

<form method="POST" action="{{ route('recipes.update', $recipe->id) }}">
    @csrf
    @method('PUT')

    <label>Name:</label>
    <input type="text" name="name" value="{{ $recipe->name }}" required>

    <label>Description:</label>
    <input type="text" name="description" value="{{ $recipe->description }}" required>

    <label>Ingredients:</label>
    <input type="text" name="ingredients" value="{{ $recipe->ingredients }}" required>

    <label>Instructions:</label>
    <input type="text" name="instructions" value="{{ $recipe->instructions }}" required>

    <button type="submit">Update</button>
</form>
@endsection
