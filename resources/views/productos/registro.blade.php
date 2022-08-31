<x-app-layout>
    
    <!--Header-->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!--Formulario-->
    <div class="flex flex-col mx-24 pb-5">
    <form action="{{  url('/productos')  }}" class="flex flex-col space-y-8" method="POST">
      {{ csrf_field() }}
    
    <!--Nombre-->
    <div class="flex flex-wrap -mx-3 mb-6 px-8 pt-5">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"  for="nombre">Nombre </label>
        <input type="text" name="nombre" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nombre"  maxlength = "30">
      </div>
    </div>

    <!--Descripcion-->
    <div class="flex flex-wrap -mx-3 mb-6 px-8 ">
      <div class="w-full px-3">
        <label for="descripcion" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Descripción</label>
        <textarea type="text" name="descripcion" id="descripcion" maxlength = "100" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"></textarea>
        </div>
    </div>

    <!--Categorias-->
    <div class="flex flex-wrap -mx-3 mb-6 px-8 ">
      <div class="w-full px-3">    
        <label for="categoria" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Categoría</label>
        <select name="categoria" id="categoria" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->catId }}">{{ $categoria->name }}</option>
            @endforeach
        </select>
      </div>
    </div>

    <!--Sucursales-->
    <div class="flex flex-wrap -mx-3 mb-6 px-8">
      <div class="w-full px-3">
        <label for="sucursal" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Sucursal</label>
        <select id="sucursal" name="sucursal" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            @foreach($sucursales as $sucursal)
                <option value="{{ $sucursal->sucId }}">{{ $sucursal->name }}</option>
            @endforeach
        </select>
      </div>
    </div>

    <!--Precio-->
    <div class="flex flex-wrap -mx-3 mb-6 px-8">
      <div class="w-full px-3">
        <label for="precio" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Precio</label>
        <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                type = "number"
                maxlength = "5" 
                id="precio" 
                name="precio">
            </div>
    </div>

    <!--Fecha de compra-->
    <div class="flex flex-wrap -mx-3 mb-6 px-8">
      <div class="w-full px-3">
        <label for="fecha_compra" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Fecha de compra</label>
        <input type="date" name="fecha_compra" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="fecha_compra">
        </div>
    </div>

    <!--Boton de enviar-->
    <div class="flex flex-wrap -mx-3 mb-6 px-8">
      <div class="w-full px-3">
        <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 float-right rounded" value="Enviar">
        </div>
    </div>
</form>
</div>
@include('footer')
</x-app-layout>