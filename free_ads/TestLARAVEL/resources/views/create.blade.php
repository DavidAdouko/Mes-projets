@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Déposer une annonce</h1>

    <hr>
    <form method="POST" action="{{ route('store') }}">
@csrf
        <div class="form-group">
            <label for="title">Titre de l'annonce</label>
            <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}}" id="title" aria-describedby="title" name="title">
            @if($errors->has('title'))
                <span class="invalid-feedback">{{ $errors->first('title') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="description">Description de l'annonce</label>
            <textarea name="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : ''}}" id="description" cols="30" rows="10"></textarea>
            @if($errors->has('description'))
                <span class="invalid-feedback">{{ $errors->first('description')}}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="localisation">Localisation</label>
            <input type="text" class="form-control {{ $errors->has('localisation') ? 'is-invalid' : ''}}" id="localistion" name="localisation">
            @if($errors->has('localisation'))
            <span class="invalid-feedback">{{ $errors->first('localisation')}}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="price">Prix</label>
            <input type="text" class="form-control is-invalid {{ $errors->has('price') ? 'is-invalid' : ''}}" id="price" name="price">
            @if($errors->has('price'))
                <span class="invalid-feedback">{{ $errors->first('price')}}</span>
            @endif
        </div>
        
        <br>
        <button type="submit" class="btn btn-primary">Soumettre notre annonce</button>
    </form>
</div>
@endsection