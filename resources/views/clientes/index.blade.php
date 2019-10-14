@extends('layouts.app')


@section('content') 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
               
                <div class="card-header">Clientes</div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>Endereço</th>
                                <th>E-mail</th>
                                <th>Opçoes</th>
                            </tr>
                        </thead>
                        <tbody>
                    
                            @foreach($clientes as $cl)
                            <tr>
                                <td>{{ $cl->id }}</td>    
                                <td>{{ $cl->nome }}</td>    
                                <td>{{ $cl->telefone }}</td>
                                <td>{{ $cl->endereco }}</td>
                                <td>{{ $cl->email }}</td>
                                
                                <td>
                                    <a href="{{ route('clientes.edit', $cl->id) }}" class="btn btn-sm btn-info"><i class="material-icons">edit</i>Editar</a>
                                    
                                    <form method="POST" action="{{ route('clientes.destroy', $cl->id) }}"><br>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="material-icons">delete</i>Apagar</button>
                                    </form>
                                </td>
                            </tr>    
                            @endforeach
                        </tbody>
                        
                    </table>
                    <div class="form-group row mb-2 mt-2 ml-2" style="text-align: right;">
                <div class="col-md-6">
                        <a href="{{ route('clientes.create') }}" class=" btn btn-primary"  style="text-align:center;  background-color:green">
                        <i class="material-icons" style="">person_add</i>   Novo Cliente
                        </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    
@endsection