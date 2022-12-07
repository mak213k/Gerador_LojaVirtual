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
      <form method="post" action="{{ route('sales.store') }}">
       
          <div class="form-group">
          @csrf
            <label for="client">Cliente:</label>
            <div class="form-control" >
                <input type="radio" name="client" value="João">João</option>
                <input type="radio" name="client" value="Maria">Maria</option>
                <input type="radio" name="client" value="José">José</option>
                <input type="radio" name="client" value="Eder">Eder</option>
            </div>

            <div class="form-group">
            <label for="payment">Forma de Pagamento:</label>
            <div class="form-control" >
                <input type="radio" name="payment" value="Cartão Débito">Cartão Débito</option>
                <input type="radio" name="payment" value="Cartão Crédito">Cartão Crédito</option>
                <input type="radio" name="payment" value="Pix">Pix</option>
                <input type="radio" name="payment" value="Dinheiro">Dinheiro</option>
            </div>

          <div class="form-group">
              <label for="total_value">Custo:</label>
              <input type="text" class="form-control" name="total_value"/>
          </div>
          <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
      </form>
  </div>
</div>
@endsection