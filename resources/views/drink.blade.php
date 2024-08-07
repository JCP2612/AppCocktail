<h1>Drink</h1>
<table>
    <thead>
        <tr>
            <th>
                Drink
            </th>
            <th>Category</th>
            <th>Alcoholic/No Alcoholic</th>
            <th>Glass</th>
            <th>Instructions</th>
        </tr>
        <tbody>
            @foreach($data as $drinks)
            @foreach($drinks as $drinks)
            <tr>
                <td>{{$drinks['strDrink']}}</td>
                <td>{{$drinks['strCategory']}}</td>
                <td>{{$drinks['strAlcoholic']}}</td>
                <td>{{$drinks['strGlass']}}</td>
                <td>{{$drinks['strInstructions']}}</td>
            </tr>
            @endforeach
            @endforeach
        </tbody>
    </thead>
</table>