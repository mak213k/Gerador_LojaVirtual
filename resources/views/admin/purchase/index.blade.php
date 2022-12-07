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
          <td>Fornecedor</td>
          <td>Preço</td>
          <td>Data de compra</td>
          <td colspan="2">Ação</td>
        </tr>
    </thead>
    <tbody>
        @foreach($purchase as $value)  
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->provider}}</td>
            <td>{{$value->cost_price_total}}</td>
            <td>{{$value->date_purchase}}</td>
            <td><a href="{{route('purchase.edit', $value)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('purchase.destroy', $value)}}" method="post">
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