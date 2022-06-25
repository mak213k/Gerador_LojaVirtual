
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
    
    <form method="post" action="{{ route('footer.update', $footer ) }}"  enctype="multipart/form-data">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="brand">Marca:</label>
              <input type="text" class="form-control" name="brand" value="{{ $footer->brand }}"/>
          </div>
          <div class="form-group">
              <label for="description">Descrição :</label>
              <textarea class="form-control" name="description">{{ $footer->description }}</textarea>
          </div>

          <div class="form-group">
              <label for="author">Autor:</label>
              <input type="text" class="form-control" name="author" value="{{ $footer->author }}" />
          </div>

          <div class="form-group">
              <label for="div_image">Logo:</label>
              <input type="file" class="form-control" name="logo">
              <img src="/image/{{ $footer->logo }}" width="300px">
          </div>

          <div class="form-group">
              <label for="active">Ativo:</label>
              <input type="checkbox" class="form-control" name="active" <?php echo  ($footer->active == 1) ? 'checked="1"' : 'checked="0"' ?> />
          </div>

          <div class="form-group">
              <label for="publish_at">Data de Publicação:</label>
              <input type="datetime-local" class="form-control" name="publish_at" value="{!! date('Y-m-d\TH:i:s', strtotime($footer->publish_at)) !!}"/>
          </div>
         
          <button type="submit" class="btn btn-primary">Atualizar Midia</button>
      </form>
  </div>
</div>
@endsection