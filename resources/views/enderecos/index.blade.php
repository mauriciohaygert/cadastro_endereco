@extends('layout')

@section('cabecalho')
Endereços
@endsection

@section('conteudo')

@if(!empty($mensagem))
<div class="alert alert-success">
    {{ $mensagem }}
</div>
@endif

<a href="{{ route('form_criar_endereco') }}" class="btn btn-dark mb-2">Adicionar</a>

<ul class="list-group">
    @foreach($enderecos as $endereco)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        {{ $endereco->cep }}
        <form method="post" action="/enderecos/{{ $endereco->id }}"
              onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($endereco->cep) }}?')">
            @csrf
            @method('DELETE')       
            <button class="btn btn-danger btn-sm">
                <i class="far fa-trash-alt"></i>
            </button>
        </form>
    </li>
    @endforeach
</ul>
@endsection