{{--blade vyzaduje zapis v dvoch mnozin zatvorkach--}}
{{--vstupom do action je triedaControler @ metoda--}}
<form method="post" action="{{action('AutoController@insertAction')}}">

    Znacka:
    <input type="text" name="znacka" placeholder="znacka"> <br>
    Model:
    <input type="text" name="model" placeholder="model"> <br>
    Farba:
    <input type="text" name="farba" placeholder="farba"> <br>
{{-- laravel nepusta form bez tohto kvoli bezpecnosti--}}
    <input type="hidden" name="_token" value="{{csrf_token()}}">

    <input type="submit" name="submit" value="Odoslat"> <br>

</form>
