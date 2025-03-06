

@extends('layouts/app')

@section('title', 'Edit Recipe')

@section('content')
<h2>Edit recipe</h2>
       
    <form method="post" action="PUT/PATCH /recipes/{oldname, newname,desc, ingredients, instructions } ->update">
        @csrf
        <label for="" class="form-label">Enter original name:</label>
        <input type="text" placeholder="name" name="oldname" class="form-check-input">

        <label for="" class="form-label">Enter new name:</label>
        <input type="text" placeholder="newname" name="newname" class="form-check-input">

        <label for="" class="form-label">Enter Description:</label>
        <input type="text" placeholder="Description" name="desc" class="form-check-input">

        <label for="" class="form-label">Enter Ingredients:</label>
        <input type="text" placeholder="Ingredients" name="ingredients" class="form-check-input">

        <label for="" class="form-label">Enter Instructions:</label>
        <input type="text" placeholder="Instructions" name="instructions" class="form-check-input">

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
    
@endsection