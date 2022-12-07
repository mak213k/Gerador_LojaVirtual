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
      <form method="post" action="{{ route('purchase.store') }}">
       
          <div class="form-group">
          @csrf
            <label for="provider">Fornecedor:</label>
            <div class="form-control" >
                <input type="radio" name="provider" value="Petz">Petz</option>
                <input type="radio" name="provider" value="PetLove">PetLove</option>
                <input type="radio" name="provider" value="PetshopOnline">PetshopOnline</option>
                <input type="radio" name="provider" value="Amazon">Amazon</option>
            </div>

          <div class="form-group">
              <label for="cost_price_total">Custo:</label>
              <input type="text" class="form-control" name="cost_price_total"/>
          </div>
          <div class="form-group">
              <label for="date_purchase">Data de Publicação:</label>
              <input type="date" class="form-control" name="date_purchase"/>
          </div>
          <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
      </form>
  </div>
</div>
@endsection