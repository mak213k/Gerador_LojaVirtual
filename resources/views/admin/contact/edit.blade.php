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
    <form method="post" action="{{ route('contact.update', $contact) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="title">Título:</label>
              <input type="text" class="form-control" name="title" value="{{ $contact->title }}"/>
          </div>
          <div class="form-group">
              <label for="description">Description:</label>
              <input type="text" class="form-control" name="description" value="{{ $contact->description }}"/>
          </div>
          <div class="form-group">
              <label for="label_name">Nome do label do nome:</label>
              <input type="text" class="form-control" name="label_name" value="{{ $contact->label_name }}" />
          </div>
          <div class="form-group">
              <label for="label_email">Nome do label do email:</label>
              <input type="text" class="form-control" name="label_email" value="{{ $contact->label_email }}" />
          </div>
          <div class="form-group">
              <label for="label_text">Nome do label do texto:</label>
              <input type="text" class="form-control" name="label_text" value="{{ $contact->label_text }}" />
          </div>
          <div class="form-group">
              <label for="label_btn_send">Nome do label do botão de enviar:</label>
              <input type="text" class="form-control" name="label_btn_send" value="{{ $contact->label_btn_send }}" />
          </div>
          <div class="form-group">
              <label for="label_btn_send">Nome do label do botão de limpar:</label>
              <input type="text" class="form-control" name="label_btn_clean" value="{{ $contact->label_btn_clean }}" />
          </div>
          <div class="form-group">
              <label for="name_corp">Nome da Empresa:</label>
              <input type="text" class="form-control" name="name_corp" value="{{ $contact->name_corp }}" />
          </div>
          <div class="form-group">
              <label for="address_corp">Endereço da empresa:</label>
              <input type="text" class="form-control" name="address_corp" value="{{ $contact->address_corp }}" />
          </div>
          <div class="form-group">
              <label for="city_country_corp">Nome da cidade e do país da empresa:</label>
              <input type="text" class="form-control" name="city_country_corp" value="{{ $contact->city_country_corp }}" />
          </div>
          <div class="form-group">
              <label for="phone_corp">Telefone da empresa:</label>
              <input type="text" class="form-control" name="phone_corp" value="{{ $contact->phone_corp }}" />
          </div>
          <div class="form-group">
              <label for="publish_at">Data de criação:</label>
              <input type="text" class="form-control" name="publish_at" value="{{ $contact->publish_at }}" />
          </div>
          <button type="submit" class="btn btn-primary">Atualizar Contato</button>
          <br>
          <br>
          <br>
      </form>
  </div>
</div>
@endsection