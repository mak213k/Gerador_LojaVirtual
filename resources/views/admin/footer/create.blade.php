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
      <form action="{{ route('footer.store') }}" method="post" enctype="multipart/form-data" >
          
          <div class="form-group">
              @csrf
              <label for="brand">Marca:</label>
              <input type="text" class="form-control" name="brand"/>
          </div>
          <div class="form-group">
              <label for="description">Description:</label>
              <input type="text" class="form-control" name="description"/>
          </div>

          <div class="form-group">
              <label for="author">Autor:</label>
              <input type="text" class="form-control" name="author"/>
          </div>

          <div class="form-group">
              <label for="div_image">Logo:</label>
              <input type="file" class="form-control" name="logo"/>
          </div>

          <div class="form-group">
              <label for="active">Ativo:</label>
              <input type="checkbox" class="form-control" name="active"/>
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