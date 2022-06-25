
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
    @method('PATCH')
    
    <form method="post" action="{{ route('section.update', $section ) }}"  enctype="multipart/form-data">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="title">Título:</label>
              <input type="text" class="form-control" name="title" value="{{ $section->title }}"/>
          </div>
          <div class="form-group">
              <label for="description">Descrição :</label>
              <textarea class="form-control" name="description">{{ $section->description }}</textarea>
          </div>
          
          <div class="form-group">
              <label for="div_image">Imagem:</label>
              <input type="file" class="form-control" name="image">
              <img src="/image/{{ $section->image }}" width="300px">
          </div>

          <div class="form-group">
              @csrf
              <label for="image_position_left">A esquerda da tela?:</label>
              <input type="checkbox" class="form-control" name="image_position_left" <?php echo ($section->image_position_left == 1) ? 'checked="1"' : 'checked="0"' ?> />
          </div>

          <div class="form-group">
              <label for="display">Visível:</label>
              <input type="checkbox" class="form-control" name="display" <?php echo ($section->display == 1) ? 'checked="1"' : 'checked="0"' ?> />
          </div>

          <div class="form-group">
              <label for="publish_at">Data de Publicação:</label>
              <input type="datetime-local" class="form-control" name="publish_at" value="{!! date('Y-m-d\TH:i:s', strtotime($section->publish_at)) !!}"/>
          </div>
         
          <button type="submit" class="btn btn-primary">Atualizar Midia</button>
      </form>
  </div>
</div>
@endsection