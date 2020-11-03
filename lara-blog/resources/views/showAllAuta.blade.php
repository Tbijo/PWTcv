{{--dat pouzivatelov do tabulky pouzitim blade--}}
<table>
    {{--pole auta sa sem dostane cez metodu ktora zavola tento view --}}
    @foreach($auta as $auto)
        <tr>
            <td> {{$auto->znacka}} - {{$auto->model}} - {{$auto->farba}}</td>
            <td> <a href="{{action('AutoController@showAction', ['id' => $auto->id])}}">Editovat</a> </td>
            <td> <a href="{{action('AutoController@deleteAction', ['id' => $auto->id])}}">Vymazat</a> </td>
        </tr>
    @endforeach

</table>
