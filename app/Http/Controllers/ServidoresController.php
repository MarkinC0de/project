<?php

namespace App\Http\Controllers;

use App\Models\Servidores;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;

class ServidoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servidores = Servidores::latest()->paginate(8);
        return view('servidores.index',compact('servidores'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('servidores.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $request->validate([
                'nome' => 'required',
                'link_servidor' => 'required',
                //'tags' => 'required',
                'descricao' => 'required',
                'resumo_servidor' => 'required'
            ],[
                'nome.required' => 'Nome é obrigatório.',
                'link_servidor.required' => 'Link do servidor é obrigatório.',
                'descricao.required' => 'Descrição do servidor é obrigatória.',
                'resumo_servidor.required' => 'Resumo do servidor é obrigatório.'

            ]);

            Servidores::create($request->all());
            return redirect()->route('servidores.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servidores  $servidores
     * @return \Illuminate\Http\Response
     */
    public function show(Servidores $servidores)
    {
        return view('servidores.servidores',compact('servidores'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servidores  $servidores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servidores = Servidores::findOrFail($id);

        return view('servidores.edit',compact('servidores'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servidores  $servidores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $servidores = Servidores::findOrFail($id);

        $servidores->update([
            'nome' => $request->nome,
            'resumo_servidor'=> $request->resumo_servidor,
            'link_servidor'=> $request->link_servidor,
            'descricao'=> $request->descricao,
        ]);

        return redirect()->route('servidores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servidores  $servidores
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $servidores = Servidores::findOrFail($id);
        $servidores->delete();

        return redirect()->route('servidores.index');
    }
}
