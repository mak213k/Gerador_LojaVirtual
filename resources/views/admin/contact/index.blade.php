@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
  td {
    word-break: break-word;
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
          <td>Título</td>
          <td>Descrição</td>
          <td>Label do nome</td>
          <td>Label do email</td>
          <td>Label do texto</td>
          <td>Label do botão enviar</td>
          <td>Label do botão limpar</td>
          <td>Nome da empresa</td>
          <td>Endereço da empresa</td>
          <td>Nome da cidade e país da empresa</td>
          <td>Telefone da empresa</td>
          <td>Data de publicação</td>
          <td colspan="2">Ação</td>
        </tr>
    </thead>
    <tbody>
        @foreach($contact as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->title}}</td>
            <td>{{$value->label_name}}</td>
            <td>{{$value->label_email}}</td>
            <td>{{$value->label_text}}</td>
            <td>{{$value->label_btn_send}}</td>
            <td>{{$value->label_btn_clean}}</td>
            <td>{{$value->name_corp}}</td>
            <td>{{$value->address_corp}}</td>
            <td>{{$value->city_country_corp}}</td>
            <td>{{$value->phone_corp}}</td>
            <td>{{$value->publish_at}}</td>
            <td><a href="{{route('contact.edit', $value)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('contact.destroy', $value)}}" method="post">
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