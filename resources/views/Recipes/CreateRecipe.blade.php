@extends('layouts.app')

@section('title', 'Create Recipe')

@section('content')
<h2>Add New Recipe</h2>
<form method="POST" action="{{ route('recipes.store') }}">
    @csrf
    <label class="form-label">Name:</label>
    <input type="text" name="name" class="form-control" required>

    <label class="form-label">Description:</label>
    <input type="text" name="desc" class="form-control" required>

    <label class="form-label">Ingredients:</label>
    <input type="text" name="ingredients" class="form-control" required>

    <label class="form-label">Instructions:</label>
    <input type="text" name="instructions" class="form-control" required>

    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
