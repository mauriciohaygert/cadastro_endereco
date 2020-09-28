<?php

namespace App\Http\Controllers;

use App\Endereco;
use Illuminate\Http\Request;

class EnderecosController extends Controller
{
    public function index(Request $request)
    {
        $enderecos = Endereco::query()
            ->orderBy('endereco')
            ->get();
        $mensagem = $request->session()->get('mensagem');

        return view('enderecos.index', compact('enderecos', 'mensagem'));
    }

    public function create()
    {
        return view('enderecos.create');
    }

    public function store(Request $request)
    {
        $endereco = Endereco::create($request->all());
        $request->session()
            ->flash(
                'mensagem',
                "O endereço '{$endereco->endereco}, {$endereco->numero}' foi criado com sucesso."
            );

        return redirect()->route('listar_enderecos');
    }

    public function show(Request $request)
    {
        $endereco = Endereco::find($request->id);
        if ($endereco) {
            return view('enderecos.update', compact('endereco'));
        } else {
            $request->session()
                ->flash(
                    'mensagem',
                    "Endereço inexistente"
                );
            return redirect()->route('listar_enderecos');
        }
    }

    public function update(Request $request)
    {
        $endereco = Endereco::find($request->id)
            ->update($request->all());
        $request->session()
            ->flash(
                'mensagem',
                "O endereço '{$request->endereco}, {$request->numero}' foi alterado com sucesso."
            );

        return redirect()->route('listar_enderecos');
    }

    public function destroy(Request $request)
    {
        Endereco::destroy($request->id);
        $request->session()
            ->flash(
                'mensagem',
                "Endereço removido com sucesso"
            );
        return redirect()->route('listar_enderecos');
    }
}
