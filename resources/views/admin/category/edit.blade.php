
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
    <form method="post" action="{{ route('category.update', $category) }}">
          
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="description">Descrição :</label>
              <textarea class="form-control" name="description">{{ $category->description }}</textarea>
          </div>
          <div class="form-group">
              <label for="publish_at">Data de Publicação:</label>
              <input type="datetime-local" class="form-control" name="publish_at" value="{!! date('Y-m-d\TH:i:s', strtotime($category->publish_at)) !!}"/>
          </div>
          
          <button type="submit" class="btn btn-primary">Atualizar Tipo</button>
      </form>
  </div>
</div>
@endsection