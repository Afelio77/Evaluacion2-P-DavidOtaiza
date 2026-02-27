<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Vehículos | UPT Aragua</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .container { margin-top: 50px; }
        .card { border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        .table-header { background-color: #0d6efd; color: white; }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-header table-header text-center">
            <h3>Inventario de Vehículos</h3>
        </div>
        <div class="card-body">
            <table class="table table-hover table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Placa</th>
                        <th>Modelo (Año)</th>
                        <th>Precio de Venta</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($vehiculos as $vehiculo)
                        <tr>
                            <td><span class="badge bg-secondary">{{ $vehiculo->Placa }}</span></td>
                            <td>{{ $vehiculo->Modelo }}</td>
                            <td class="fw-bold text-success">
                                ${{ number_format($vehiculo->PrecioVenta, 2, ',', '.') }}
                            </td>
                            <td>
                                @if($vehiculo->Usado)
                                    <span class="badge rounded-pill bg-warning text-dark">Usado</span>
                                @else
                                    <span class="badge rounded-pill bg-primary">Nuevo</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-4">
                                <div class="alert alert-info mb-0">
                                     <strong>No se encontraron registros en el sistema.</strong>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer text-muted text-center">
            Evaluación Fase III
        </div>
    </div>
</div>
</body>
</html>