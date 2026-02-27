<nav style="margin-bottom: 20px;">
    <a href="{{ route('menus.create') }}">
        + Registrar Menú
    </a>
    <a href="{{ route('platillos.create') }}">
        + Registrar Platillo
    </a>
</nav>

<hr>
<h1>Lista de Platillos</h1>
<hr>

<table>
    <thead>
        <tr style="background-color: #f2f2f2;">
            <th>Nombre</th>
            <th>Calorias</th>
            <th>Disponible</th>
            <th>Menú Asignado</th>
        </tr>
    </thead>
    <tbody>
        @foreach($platillos as $platillo)
        <tr>
            <td>{{ $platillo->nombre }}</td>
            <td>{{ $platillo->calorias }}</td>
            <td>{{ $platillo->disponible ? 'Sí' : 'No' }} </td>
            <td>{{ $platillo->menu->nombre }}</td>
        </tr>
        @endforeach
    </tbody>
</table>