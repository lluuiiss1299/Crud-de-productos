<x-app-layout>
    
    <!--Header-->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!--Formulario-->
    <div class="flex flex-col mx-24 pb-5">
        <form action="{{  url('/productos/'.$producto->id)  }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}  

        <!--Nombre-->
        <div class="flex flex-wrap -mx-3 mb-6 px-8 pt-5">
            <div class="w-full px-3">
                <label for="nombre" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Nombre </label>
                <input type="text" name="nombre"  id="nombre" maxlength = "30" value="{{ $producto->nombre }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" autocomplete="off" disabled>
            </div>
        </div>

        <!--Descripción-->
        <div class="flex flex-wrap -mx-3 mb-6 px-8 ">
            <div class="w-full px-3">
                <label for="descripcion" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Descripcion</label>
                <input type="text" name="descripcion" id="descripcion" maxlength = "100" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" value="{{ $producto->descripcion }}" disabled>
            </div>
        </div>

        <!--Categoria-->
        <div class="flex flex-wrap -mx-3 mb-6 px-8 ">
            <div class="w-full px-3">
                <label for="categoria" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Categoría</label>
                <select name="categoria" id="categoria" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  disabled>
                    <option value="{{ $producto->categoria }}">{{ $categoria[0]->name }}</option>
                </select>
            </div>
        </div>

        <!--Sucursal-->
        <div class="flex flex-wrap -mx-3 mb-6 px-8 ">
            <div class="w-full px-3">
                <label for="sucursal" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Sucursal</label>
                <select id="sucursal" name="sucursal" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" disabled>
                        <option value="{{ $producto->sucursal }}">{{ $sucursal[0]->name }}</option>
                </select>
            </div>
        </div>

        <!--Precio-->
        <div class="flex flex-wrap -mx-3 mb-6 px-8 ">
            <div class="w-full px-3">
                <label for="precio" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Precio</label>
                <input type = "number" id="precio" name="precio" value="{{ $producto->precio }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" disabled>
            </div>
        </div>

        <!--Fecha-->
        <div class="flex flex-wrap -mx-3 mb-6 px-8 ">
            <div class="w-full px-3">
                <label for="fecha_compra" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Fecha de compra</label>
                <input type="date" name="fecha_compra" id="fecha_compra" value="{{ $producto->fecha_compra }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" disabled>
            </div>
        </div>

        <!--Estado-->
        <div class="flex flex-wrap -mx-3 mb-6 px-8 ">
            <div class="w-full px-3">
                <label for="estado" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Estado del producto</label>
                <input type="checkbox" value="{{ $producto->estado }}" name="estado" id="estado"  checked>
                <span id="estadotxt">{{ $producto->estado ? "Abierto" : "Cerrado"}}</span>
                </label>
            </div>
        </div>

        <!--Comentarios-->
        <div class="flex flex-wrap -mx-3 mb-6 px-8 ">
            <div class="w-full px-3">
                <label for="comentario" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Comentario</label>
                <textarea type="text" name="comentario" id="comentario" maxlength = "100" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required></textarea>
            </div>
        </div>

        <!--Boton-->
        <div class="flex flex-wrap -mx-3 mb-6 px-8 ">
            <div class="w-full px-3">
                <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 float-right rounded" value="Enviar">
            </div>
        </div>
        <script>
            //cambiamos el valor del checkbox por el actual
            console.log(document.getElementById("estado").value)
            const checkbox = document.getElementById('estado')
            var msg='';
            checkbox.addEventListener('change', (event) => {
            if (event.currentTarget.checked) {
                document.getElementById('estadotxt').innerHTML ='Abierto';
                document.getElementById("estado").value = 1;
            } else {
                document.getElementById('estadotxt').innerHTML ='Cerrado';
                document.getElementById("estado").value = 0;
            }
            console.log(document.getElementById("estado").value)
            })
        </script>
    </form>
</div>
@include('footer')
</x-app-layout>


