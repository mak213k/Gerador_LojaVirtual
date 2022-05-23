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
    <form method="post" action="{{ route('post.update', $post) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="title">Título:</label>
              <input type="text" class="form-control" name="title" value="{{ $post->title }}"/>
          </div>
          <div class="form-group">
              <label for="description">Descrição :</label>
              <textarea class="form-control" name="description">{{ $post->description }}</textarea>
          </div>
          <div class="form-group">
              <label for="author">Autor:</label>
              <input type="text" class="form-control" name="author" value="{{ $post->author }}"/>
          </div>
          <div class="form-group">
              <label for="publish_at">Data de Publicação:</label>
              <input type="datetime-local" class="form-control" name="publish_at" value="{!! date('Y-m-d\TH:i:s', strtotime($post->publish_at)) !!}"/>
          </div>
          <div class="form-group">
              <label for="version">Versão do post:</label>
              <input type="number" class="form-control" name="version" value="{{ $post->version }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Atualizar Post</button>
      </form>
  </div>
</div>
@endsection