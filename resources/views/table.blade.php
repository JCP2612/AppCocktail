<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <title>Cocktail</title>
</head>

<body>
    <h1>Drink</h1>
    <table id="myTable">
        <thead>
            <tr>
                <th>
                    Drink
                </th>
                <th>Category</th>
                <th>Alcoholic/No Alcoholic</th>
                <th>Glass</th>
                <!-- <th>Instructions</th> -->
                <th>Acciones</th>
            </tr>
        <tbody>
            @foreach($data as $drinks)
                @foreach($drinks as $drinks)
                <tr>
                    <td>{{$drinks['strDrink']}}</td>
                    <td>{{$drinks['strCategory']}}</td>
                    <td>{{$drinks['strAlcoholic']}}</td>
                    <td>{{$drinks['strGlass']}}</td>
                    <td>
                        <button type="button" class="save-btn" data-drink="{{ $drinks['strDrink'] }}" data-category="{{ $drinks['strCategory'] }}" data-alcoholic="{{ $drinks['strAlcoholic'] }}" data-glass="{{ $drinks['strGlass'] }}">Guardar</button>
                    </td>
                    <!-- <td>{{$drinks['strInstructions']}}</td> -->
                </tr>
                @endforeach
            @endforeach
        </tbody>
        </thead>
    </table>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
       $(document).ready(function() {
            $('#myTable').DataTable();

            $('.save-btn').on('click', function() {
                // Obtener datos de la fila
                var drink = $(this).data('drink');
                var category = $(this).data('category');
                var alcoholic = $(this).data('alcoholic');
                var glass = $(this).data('glass');
                
                
                
                $.ajax({
                    url: '{{ route("save.drink") }}', // Ruta hacia la función de guardado
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}', // Token CSRF para seguridad
                        drink: drink,
                        category: category,
                        alcoholic: alcoholic,
                        glass: glass
                    },
                    success: function(response) {
                        alert('Drink saved successfully!');
                    },
                    error: function(xhr) {
                        alert('Error saving drink: ' + xhr.responseText);
                    }
                });
            });
        });
       
    </script>
    <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"> -->
</body>

</html>