<?php
 
namespace Unesc\Http\Controllers;
use Illuminate\Http\Request;
use Unesc\Clientes;

class ClientesController extends Controller
{
    public function index() {

        $title = 'clientes';
        $clientes = Clientes::all();

        return view('clientes.index', ["title" => $title, "clientes" => $clientes]);
    }

    public function create() {

        $title = "Novo Cliente";

        return view('clientes.create', ["title" => $title]);
    }

    public function store(Request $request) {
        $formData = $request->all();

        Clientes::create($formData);

        return redirect('/clientes');
    }

    public function edit($id) {
        
        $title = "Editar Cliente";
        
        $cliente = Clientes::find($id);

        return view('clientes.edit', ["title" => $title, "cliente" => $cliente]);
    }

    public function update(Request $request, $id) {
        $formData = $request->all();

        $cliente = Clientes::find($id);
        
        $cliente->update($formData);

        return redirect('/clientes');
    }

    public function destroy($id) {
        $cliente = Clientes::find($id);
        
        $cliente->delete();

        return redirect('/clientes');
    }
}
