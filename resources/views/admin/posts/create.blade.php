@extends('layouts.app')

@section('content')

  <div class="container">
    <h1>Aggiungi un nuovo post</h1>
    <form action="{{route('admin.posts.store')}}" method="POST">
      @csrf
      @method('Post')

      <div class="form-group">
        <label for="title">Titolo</label>
        <input class="form-control" type="text" id="title" name="title" placeholder="Titolo" value="{{old('title')}}">
      </div>

      <div class="form-group">
        <label for="body">Testo</label>
        <textarea class="form-control" type="text" id="body" name="body" placeholder="Testo" row="10">{{old('body')}}</textarea>
      </div>

      <input class="btn btn-primary" type="submit" value="Salva">
      
    </form>
  </div>
@endsection