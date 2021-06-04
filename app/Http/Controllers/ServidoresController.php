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
        return view('servidores.index',compact('servidores')); // ENVIA A VARIAVEL SERVIDORES PARA A VIEW


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
                'link-servidor' => 'required',
                'tags' => 'required',
                'descricao' => 'required',
                'resumo_servidor' => 'required'
            ]);

            Servidores::create($request->all());

            return redirect()->route('servidores.index')
                            ->with('success','Servidor registrado com sucesso.');
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
            'link-servidor'=> $request->link-servidor,
            'descricao'=> $request->descricao,
            'tags'=> $request->tags,
        ]);

        return redirect()->route('servidores.index')
            ->with('Servidor atualizado com sucesso.');
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

        return redirect()->route('servidores.index')
                        ->with('success','Servidor deletado  com sucesso');
    }
}
