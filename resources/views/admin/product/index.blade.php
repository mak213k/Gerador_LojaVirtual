@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Categoria</td>
          <td>Título</td>
          <td>Descrição</td>
          <td>Preço</td>
          <td>Medida de venda</td>
          <td>Imagem</td>
          <td>Data de publicação</td>
          <td colspan="2">Ação</td>
        </tr>
    </thead>
    <tbody>
        
        @foreach($product as $value)
        <tr>
            <td>{{$value->id}}</td>
            
            @php
              $category_field = 'Não selecionado';
            @endphp
                
            @foreach( $category as $cat )

              @if ( $value['id_category'] == $cat['id'] )

                @php
                $category_field = $cat['description'];
                @endphp
              
              @endif
              
        @endforeach

            
            <td>{{$category_field}}</td>
            <td>{{$value->title}}</td>
            <td>{{$value->description}}</td>
            <td>{{$value->price}}</td>
            <td>{{$value->measure}}</td>
            <td><img src="productImage/{{ $value->image }}" width="100px"></td>
            <td>{{$value->publish_at}}</td>
            <td><a href="{{route('product.edit', $value)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('product.destroy', $value)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Apagar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection