{{--objekt auto sa sem dostane cez metodu ktora zavola tento view --}}
<form method="post" action="{{action('AutoController@updateAction', ['id' => $auto->id])}}">

    Znacka:
    <input type="text" name="znacka" value="{{$auto->znacka}}"> <br>
    Model:
    <input type="text" name="model" value="{{$auto->model}}"> <br>
    Farba:
    <input type="text" name="farba" value="{{$auto->farba}}"> <br>
    {{-- laravel nepusta form bez tohto kvoli bezpecnosti--}}
    <input type="hidden" name="_token" value="{{csrf_token()}}">

    <input type="submit" name="submit" value="Odoslat"> <br>

</form>
