
@extends('layouts.default')

@section('content')
    <h2>Ajouter des images pour {{ $car->brand }} {{ $car->model }}</h2>

    <form action="{{ '/cars-images/'. $car->id}}" method="post" enctype="multipart/form-data">
        @csrf

        <input type="file" name="images[]" multiple accept="image/*" required>

        <button type="submit">Télécharger</button>
    </form>
@endsection
