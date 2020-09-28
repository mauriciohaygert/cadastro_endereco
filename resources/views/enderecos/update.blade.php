@extends('layout')

@section('cabecalho')
    Endereço
@endsection

@section('conteudo')
<form method="post">
    @csrf
    @method('patch')
   <div class="form-row">
    <div class="col-md-3 mb-3">
        <label for="cep" class="">CEP</label>
        <input type="text" class="form-control" name="cep" id="cep" placeholder="CEP" maxlength="9" onblur="pesquisa_cep(this.value);" required value="{{ $endereco->cep }}">
    </div>
    </div>
   <div class="form-row">
    <div class="col-md-7 mb-3">
        <label for="endereco" class="">Endereço</label>
        <input type="text" class="form-control" name="endereco" id="endereco" maxlength="45" placeholder="Endereço" required value="{{ $endereco->endereco }}">
    </div>
    <div class="col-md-2 mb-3">
        <label for="numero" class="">Número</label>
        <input type="text" class="form-control" name="numero" id="numero" maxlength="40" maxlength="15" placeholder="Número" required value="{{ $endereco->numero }}">
    </div>
    <div class="col-md-3 mb-3">
        <label for="complemento" class="">Complemento</label>
        <input type="text" class="form-control" name="complemento" id="complemento" maxlength="20" placeholder="Complemento" value="{{ $endereco->complemento }}">
    </div>
  </div>

  <div class="form-row">
   <div class="col-md-5 mb-3">
        <label for="bairro" class="">Bairro</label>
        <input type="text" class="form-control" name="bairro" id="bairro" maxlength="40" value="{{ $endereco->bairro }}">
    </div>
    <div class="col-md-5 mb-3">
        <label for="cidade" class="">Cidade</label>
        <input type="text" class="form-control" name="cidade" id="cidade" maxlength="40" value="{{ $endereco->cidade }}">
    </div>
    <div class="col-md-2 mb-3">
        <label for="uf" class="">UF</label>
        <input type="text" class="form-control" name="uf" id="uf" maxlength="2" value="{{ $endereco->uf }}">
    </div>
  </div>
    	<button class="btn btn-primary">Atualizar</button>
</form>
@endsection
