@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }

</style>
<div class="card uper">
  <div class="card-header">
    Update Shows
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    
    <form method="post" action="{{ route('about.update', $about) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="title">Título:</label>
              <input type="text" class="form-control" name="title" value="{{ $about->title }}"/>
          </div>
          <div class="form-group">
              <label for="description">Descrição :</label>
              <textarea class="form-control" name="description">{{ $about->description }}</textarea>
          </div>
          <div class="form-group">
              <label for="address">Endereço:</label>
              <input type="text" class="form-control" name="address" value="{{ $about->address }}"/>
          </div>
          <div class="form-group">
              <label for="phone">Telefone:</label>
              <input type="text" class="form-control" name="phone" value="{{ $about->phone }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Atualizar página Sobre</button>
      </form>
  </div>
</div>
@endsection