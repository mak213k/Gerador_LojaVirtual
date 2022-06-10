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
          <td>Imagem</td>
          <td>Título</td>
          <td>Descrição</td>
          <td>Habilitada</td>
          <td>Data de publicação</td>
          <td colspan="2">Ação</td>
        </tr>
    </thead>
    <tbody>
        @foreach($midium as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td><img src="image/{{ $value->image }}" width="100px"></td>
            <td>{{$value->title}}</td>
            <td>{{$value->description}}</td>
            <td>{{$value->enable}}</td>
            <td>{{$value->publish_at}}</td>
           
            <td><a href="{{route('midium.edit', $value)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('midium.destroy', $value)}}" method="post">
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