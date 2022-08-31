<x-app-layout>
    
    <!--Header-->
    <x-slot name="header">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!--Tabla de contenido-->
    <div class="flex flex-col mx-24 p-8 flex-shrink-1">
        <table class="table-auto">
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>categoria</th>
                <th>sucursal</th>
                <th>eliminar</th>
                <th>editar</th>
            </tr>
            <tbody>
                @foreach($productos as $producto)
                <tr>
                    <td>{{  $producto->id  }}</td>
                    <td>{{  $producto->nombre  }}</td>
                    <td>{{  $producto->categoria  }}</td>
                    <td>{{  $producto->sucursal  }}</td>
                    <td>
                        <form action="{{ url('/productos/'.$producto->id) }}" method="POST">
                            {{ csrf_field() }}  
                            {{ method_field('DELETE') }}  
                            <input type="submit" value="Eliminar">
                        </form>
                    </td>
                    <td><a href="{{ url('/productos/'.$producto->id.'/edit') }}" >Editar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>

        <!--Paginación-->
        <div class="d-flex justify-content-end">
                {!! $productos->links() !!}
        </div>
        </div>
    </div>
@include('footer')
</x-app-layout>
