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
      <form method="post" action="{{ route('category.store') }}">
        
          <div class="form-group">
              @csrf
              <label for="description">Description:</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          
          <div class="form-group">
              <label for="publish_at">Data de criação:</label>
              <input type="date" class="form-control" name="publish_at"/>
          </div>
          <button type="submit" class="btn btn-primary">Criar Categoria</button>
      </form>
  </div>
</div>
@endsection