<a href="{{ route('platillos.index') }}">← Volver a la Lista</a>

<h2>Menu Nuevo</h2>
<form action="{{ route('menus.store') }}" method="POST">
    @csrf
    <label>Nombre del Menú:</label>
    <input type="text" name="nombre" required>
    
    <button type="submit">Guardar Menú</button>
</form>

