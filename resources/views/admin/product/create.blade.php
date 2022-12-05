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
      <form method="post" action="{{ route('product.store') }}">
       
          <div class="form-group">
              @csrf
              <label for="title">Título:</label>
              <input type="text" class="form-control" name="title"/>
          </div>
          <div class="form-group">
            <label for="category">Tipo:</label>
            <select class="form-control m-bot15" name="id_category" id="id_category">
                <option value="0">Selecione</option>
              @foreach( $category as $ctg )
                @if ( $ctg['id'] == $product->id_category )
                  <option value="{{ $ctg['id'] }}" selected>{{ $ctg['description'] }}</option>
                @else
                  <option value="{{ $ctg['id'] }}">{{ $ctg['description'] }}</option>
                @endIf
              @endforeach
            </select>
          </div>
          <div class="form-group">
              <label for="description">Descrição:</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          <div class="form-group">
              <label for="image">Imagem:</label>
              <input type="file" class="form-control" name="image">
              <img src="" width="300px">
          </div>
          <div class="form-group">
              <label for="cost_price">Custo:</label>
              <input type="text" class="form-control" name="cost_price"/>
          </div>
          <div class="form-group">
              <label for="seller_price">Preço:</label>
              <input type="text" class="form-control" name="seller_price"/>
          </div>
          <div class="form-group">
              <label for="measure">Medida de venda:</label>
              <input type="text" class="form-control" name="measure"/>
          </div>
          <div class="form-group">
              <label for="publish_at">Data de Publicação:</label>
              <input type="date" class="form-control" name="publish_at"/>
          </div>
          <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
      </form>
  </div>
</div>
@endsection