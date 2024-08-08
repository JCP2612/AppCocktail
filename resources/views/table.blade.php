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
                <!-- <td>{{$drinks['strInstructions']}}</td> -->
            </tr>
            @endforeach
            @endforeach
        </tbody>
        </thead>
    </table>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"> -->
</body>

</html>