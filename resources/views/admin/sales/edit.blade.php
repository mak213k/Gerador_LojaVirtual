
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
      
      <form method="post" action="{{ route('sales.update', $sales) }}">
       

            <div class="form-group">
            @csrf
            @method('PATCH')
            <label for="client">Cliente:</label>
            <div class="form-control" >
                <input type="radio" name="client" value="João" {{ $sales->sales == 'João' ? 'checked' : '' }}>João</option>
                <input type="radio" name="client" value="Maria" {{ $sales->sales == 'Maria' ? 'checked' : '' }}>Maria</option>
                <input type="radio" name="client" value="José" {{ $sales->sales == 'José' ? 'checked' : '' }}>José</option>
                <input type="radio" name="client" value="Eder" {{ $sales->sales == 'Eder' ? 'checked' : '' }}>Eder</option>
            </div>


            <div class="form-group">
            <label for="payment">Forma de Pagamento:</label>
            <div class="form-control" >
                <input type="radio" name="payment" value="Cartão Débito" {{ $sales->provider == 'Petz' ? 'checked' : '' }}>Cartão Débito</option>
                <input type="radio" name="payment" value="Cartão Crédito" {{ $sales->provider == 'Petz' ? 'checked' : '' }}>Cartão Crédito</option>
                <input type="radio" name="payment" value="Pix" {{ $sales->provider == 'Petz' ? 'checked' : '' }}>Pix</option>
                <input type="radio" name="payment" value="Dinheiro" {{ $sales->provider == 'Petz' ? 'checked' : '' }}>Dinheiro</option>
            </div>


          <div class="form-group">
              <label for="cost_price_total">Custo:</label>
              <input type="text" class="form-control" name="cost_price_total" value="{{ $sales->cost_price_total }}"/>
          </div>
          
          <button type="submit" class="btn btn-primary">Atualizar Produto</button>
      </form>
  </div>
</div>
@endsection