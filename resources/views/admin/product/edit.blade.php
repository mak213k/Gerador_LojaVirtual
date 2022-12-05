
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
    <form method="post" action="{{ route('product.update', $product) }}" enctype="multipart/form-data">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="title">Título:</label>
              <input type="text" class="form-control" name="title" value="{{ $product->title }}"/>
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
              <label for="description">Descrição :</label>
              <textarea class="form-control" name="description">{{ $product->description }}</textarea>
          </div>
          <div class="form-group">
              <label for="image">Imagem:</label>
              <input type="file" class="form-control" name="image">
              <img src="/productImage/{{ $product->image }}" width="300px">
          </div>
          <div class="form-group">
              <label for="cost_price">Custo:</label>
              <input type="text" class="form-control" name="cost_price"/>
          </div>
          <div class="form-group">
              <label for="price">Preço:</label>
              <input type="text" class="form-control" name="price" value="{{ $product->price }}"/>
          </div>
          <div class="form-group">
              <label for="measure">Medida de venda:</label>
              <input type="text" class="form-control" name="measure" value="{{ $product->measure }}"/>
          </div>
          <!--
          <div class="form-group">
              <label for="publish_at">Data de Publicação:</label>
              <input type="datetime-local" class="form-control" name="publish_at" value="{!! date('Y-m-d\TH:i:s', strtotime($product->publish_at)) !!}"/>
          </div>
-->
          <button type="submit" class="btn btn-primary">Atualizar Produtos</button>
      </form>
  </div>
</div>
@endsection