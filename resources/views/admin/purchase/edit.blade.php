
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
      
      <form method="post" action="{{ route('purchase.update', $purchase) }}">
       
          <div class="form-group">
          @csrf
          @method('PATCH')
            <label for="provider">Fornecedor:</label>
            <div class="form-control" >
                <input type="radio" name="provider" value="Petz" {{ $purchase->provider == 'Petz' ? 'checked' : '' }}>Petz</option>
                <input type="radio" name="provider" value="PetLove" {{ $purchase->provider == 'PetLove' ? 'checked' : '' }}>PetLove</option>
                <input type="radio" name="provider" value="PetshopOnline" {{ $purchase->provider == 'PetshopOnline' ? 'checked' : '' }}>PetshopOnline</option>
                <input type="radio" name="provider" value="Amazon" {{ $purchase->provider == 'Amazon' ? 'checked' : '' }}>Amazon</option>
            </div>

          <div class="form-group">
              <label for="cost_price_total">Custo:</label>
              <input type="text" class="form-control" name="cost_price_total" value="{{ $purchase->cost_price_total }}"/>
          </div>
          <div class="form-group">
              <label for="date_purchase">Data de Publicação:</label>
              <input type="datetime-local" class="form-control" name="date_purchase" value="{!! date('Y-m-d\TH:i:s', strtotime($purchase->date_purchase)) !!}" />
          </div>
          <button type="submit" class="btn btn-primary">Atualizar Produto</button>
      </form>
  </div>
</div>
@endsection