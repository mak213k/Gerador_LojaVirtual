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
      <form method="post" action="{{ route('post.store') }}">
          <div class="form-group">
              <label for="author">Autor:</label>
              <input type="text" class="form-control" name="author"/>
          </div>
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
              <label for="visible">Visível:</label>
              <input type="checkbox" class="form-control" name="visible"/>
          </div>
          <div class="form-group">
              <label for="data_publish">Data de criação:</label>
              <input type="date" class="form-control" name="data_publish"/>
          </div>
          <button type="submit" class="btn btn-primary">Criar conteúdo Post</button>
      </form>
  </div>
</div>
@endsection