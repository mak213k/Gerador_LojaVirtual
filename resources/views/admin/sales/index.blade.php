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
          <td>Client</td>
          <td>Meios de Pagamentos</td>
          <td>Valor Total</td>
          <td colspan="2">Ação</td>
        </tr>
    </thead>
    <tbody>
        @foreach($sales as $value)  
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->Client}}</td>
            <td>{{$value->payment}}</td>
            <td>{{$value->total_value}}</td>
            <td><a href="{{route('sales.edit', $value)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('sales.destroy', $value)}}" method="post">
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