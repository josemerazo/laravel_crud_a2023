@extends('template')
@section('content')
    <div class="container">
        <a class="btn btn-success" href="">Agregar</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>

                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($personas as $persona)
                    <tr>
                        <td>{{ $persona->nombre }}</td>
                        <td>{{ $persona->edad }}</td>
                        <td>{{ $persona->apellido }}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('personas.edit', [$persona]) }}">
                                <i class="fa fa-edit"></i>Editar
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('personas.destroy', [$persona]) }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
