
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
    <form method="post" action="{{ route('products.update', $products) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="title">Título:</label>
              <input type="text" class="form-control" name="title" value="{{ $products->title }}"/>
          </div>
          <div class="form-group">
              <label for="description">Descrição :</label>
              <textarea class="form-control" name="description">{{ $products->description }}</textarea>
          </div>
          <div class="form-group">
              <label for="price">Preço:</label>
              <input type="text" class="form-control" name="price" value="{{ $products->price }}"/>
          </div>
          <div class="form-group">
              <label for="measure">Medida de venda:</label>
              <input type="text" class="form-control" name="measure" value="{{ $products->measure }}"/>
          </div>
          <div class="form-group">
              <label for="publish_at">Data de Publicação:</label>
              <input type="datetime-local" class="form-control" name="publish_at" value="{!! date('Y-m-d\TH:i:s', strtotime($products->publish_at)) !!}"/>
          </div>
          
          <button type="submit" class="btn btn-primary">Atualizar Produtos</button>
      </form>
  </div>
</div>
@endsection