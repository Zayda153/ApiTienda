<?php

namespace App\Http\Controllers;

use App\Models\Salida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class SalidaController
 * @package App\Http\Controllers
 */
class SalidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salidas = Salida::paginate();

        return view('salida.index', compact('salidas'))
            ->with('i', (request()->input('page', 1) - 1) * $salidas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user= Auth::user();
        if(!$user->can('salidas.create')){
            abort(403,'Sin acceso a esta sección');
        }
        $salida = new Salida();
        return view('salida.create', compact('salida'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $salida = Salida::create($request->all());

        return redirect()->route('salidas.index')
            ->with('success', 'Salida created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salida = Salida::find($id);

        return view('salida.show', compact('salida'));
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
        if(!$user->can('salidas.create')){
            abort(403,'Sin acceso a esta sección');
        }
        $salida = Salida::find($id);

        return view('salida.edit', compact('salida'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Salida $salida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salida $salida)
    {
        $user= Auth::user();
        if(!$user->can('salidas.create')){
            abort(403,'Sin acceso a esta sección');
        }
        $salida->update($request->all());

        return redirect()->route('salidas.index')
            ->with('success', 'Salida updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $user= Auth::user();
        if(!$user->can('salidas.create')){
            abort(403,'Sin acceso a esta sección');
        }
        $salida = Salida::find($id)->delete();

        return redirect()->route('salidas.index')
            ->with('success', 'Salida deleted successfully');
    }
}
