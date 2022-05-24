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
      <form method="contact" action="{{ route('contact.store') }}">
          
          <div class="form-group">
              @csrf
              <label for="title">Title:</label>
              <input type="text" class="form-control" name="title"/>
          </div>
         
          <div class="form-group">
              <label for="description">Description:</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          <div class="form-group">
              <label for="label_name">Nome do label do nome:</label>
              <input type="text" class="form-control" name="label_name"/>
          </div>
          <div class="form-group">
              <label for="label_email">Nome do label do email:</label>
              <input type="text" class="form-control" name="label_email"/>
          </div>
          <div class="form-group">
              <label for="label_text">Nome do label do texto:</label>
              <input type="text" class="form-control" name="label_text"/>
          </div>
          <div class="form-group">
              <label for="label_btn_send">Nome do label do botão de enviar:</label>
              <input type="text" class="form-control" name="label_btn_send"/>
          </div>
          <div class="form-group">
              <label for="name_corp">Nome da Empresa:</label>
              <input type="text" class="form-control" name="name_corp"/>
          </div>
          <div class="form-group">
              <label for="address_corp">Endereço da empresa:</label>
              <input type="text" class="form-control" name="address_corp"/>
          </div>
          <div class="form-group">
              <label for="city_country_corp">Nome da cidade e do país da empresa:</label>
              <input type="text" class="form-control" name="city_country_corp"/>
          </div>
          <div class="form-group">
              <label for="phone_corp">Telefone da empresa:</label>
              <input type="text" class="form-control" name="phone_corp"/>
          </div>
          <div class="form-group">
              <label for="publish_at">Data de criação:</label>
              <input type="text" class="form-control" name="publish_at"/>
          </div>
          <button type="submit" class="btn btn-primary">Criar formulário de contato</button>
      </form>
  </div>
</div>
@endsection