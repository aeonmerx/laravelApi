<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Usuarios de la Tabla de Datos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    /* Optional table styling for a cleaner presentation */
    table {
      width: 100%; /* Adjust width as needed */
      border-collapse: collapse; /* Remove borders between cells */
    }
    th, td {
      padding: 10px; /* Add some padding for readability */
    }
  </style>
</head>
<body>
<button><a href="{{ url('datos/create') }}">CREAR USUARIO</a></button>
<table class="table table-striped">
  <thead> <tr>
      <th>Nombre</th>
      <th>Edad</th>
    </tr>
  </thead>
  <tbody>  @foreach($datos as $dato)
      <tr>
        <td>{{ $dato->nombre }}</td>
        <td>{{ $dato->edad }}</td>
      </tr>
    @endforeach
  </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
