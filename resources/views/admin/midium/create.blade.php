@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Shows
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
      <form action="{{ route('midia.store') }}" method="post" enctype="multipart/form-data" >
          
          <div class="form-group">
              @csrf
              <label for="title">Title:</label>
              <input type="text" class="form-control" name="title"/>
          </div>
          <div class="form-group">
              <label for="description">Description:</label>
              <input type="text" class="form-control" name="description"/>
          </div>

          <div class="form-group">
              @csrf
              <label for="name">Nome:</label>
              <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-group">
              <label for="image">Imagem:</label>
              <input type="file" class="form-control" name="image"/>
          </div>

          <div class="form-group">
              <label for="visible">Visível:</label>
              <input type="checkbox" class="form-control" name="visible"/>
          </div>
          <div class="form-group">
              <label for="publish_at">Data de criação:</label>
              <input type="date" class="form-control" name="publish_at"/>
          </div>
          <button type="submit" class="btn btn-primary">Criar conteúdo Post</button>
      </form>
  </div>
</div>
@endsection