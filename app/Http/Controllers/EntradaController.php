<?php

namespace App\Http\Controllers;

use App\Models\Entrada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class EntradaController
 * @package App\Http\Controllers
 */
class EntradaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entradas = Entrada::paginate();

        return view('entrada.index', compact('entradas'))
            ->with('i', (request()->input('page', 1) - 1) * $entradas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user= Auth::user();
        if(!$user->can('entradas.create')){
            abort(403,'Sin acceso a esta sección');
        }

        $entrada = new Entrada();
        return view('entrada.create', compact('entrada'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $entrada = Entrada::create($request->all());

        return redirect()->route('entradas.index')
            ->with('success', 'Entrada created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entrada = Entrada::find($id);

        return view('entrada.show', compact('entrada'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $user= Auth::user();
        if(!$user->can('entradas.create')){
            abort(403,'Sin acceso a esta sección');
        }

        $entrada = Entrada::find($id);

        return view('entrada.edit', compact('entrada'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Entrada $entrada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entrada $entrada)
    {
        $user= Auth::user();
        if(!$user->can('entradas.create')){
            abort(403,'Sin acceso a esta sección');
        }

        $entrada->update($request->all());

        return redirect()->route('entradas.index')
            ->with('success', 'Entrada updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {

        $user= Auth::user();
        if(!$user->can('entradas.create')){
            abort(403,'Sin acceso a esta sección');
        }

        $entrada = Entrada::find($id)->delete();

        return redirect()->route('entradas.index')
            ->with('success', 'Entrada deleted successfully');
    }
}
