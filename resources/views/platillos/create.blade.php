<a href="{{ route('platillos.index') }}">Volver a la Lista</a>
<h1>Registrar Paciente</h1>

<form action="{{ route('platillos.store') }}" method="POST">
    @csrf <div>
        <label>Nombre del Platillo:</label><br>
        <input type="text" name="nombre" value="{{ old('nombre') }}"> 
        @error('nombre') <small style="color:red">{{ $message }}</small> @enderror
    </div>

    <br>

    <div>
        <label>Calorias:</label><br>
        <input type="text" name="calorias" value="{{ old('calorias') }}">
        @error('calorias') <small style="color:red">{{ $message }}</small> @enderror
    </div>

    <div>
        <label>Disponibilidad:</label><br>
        <select name="disponible">
            <option value="1" {{ old('disponible') == '1' ? 'selected' : '' }}>Disponible</option>
            <option value="0" {{ old('disponible') == '0' ? 'selected' : '' }}>No Disponible</option>
        </select>
        @error('disponible') <small style="color:red">{{ $message }}</small> @enderror
    </div>

    <br>

    <div>
        <label>Menú:</label><br>
        <select name="menu_id">
            <option value="" selected disabled>Seleccione un Menú</option>
            @foreach($menus as $menu)
                <option value="{{ $menu->id }}" {{ old('menu_id') == $menu->id ? 'selected' : '' }}>{{ $menu->nombre }}

                </option>
            @endforeach
        </select>
        @error('menu_id') <small style="color:red">{{ $message }}</small> @enderror
    </div>

    <br>

    <button type="submit">Guardar</button>
</form>