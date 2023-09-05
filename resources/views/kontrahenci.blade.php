@extends('layouts.master')
@vite('resources/js/kontrahenci.js')
<input id="signup-token" name="_token" type="hidden" value="{{csrf_token()}}">

@section('content')
<table class="table">
    <tr>
        <th>NIP</th>
        <th>REGON</th>
        <th>NAZWA</th>
        <th>CZY PŁATNIK VAT?</th>
        <th>ULICA</th>
        <th>NUMER DOMU</th>
        <th>NUMER MIESZKANIA</th>
        <th>Akcja</th>
    </tr>
    @foreach($contractors as $contractor)
    <tr>
        <td>
            <input type="text" name="nip" placeholder="{{ $contractor->nip }}">
        </td>
        <td>
            <input type="text" name="regon" placeholder="{{ $contractor->regon }}">
        </td>
        <td>
            <input type="text" name="nazwa" placeholder="{{ $contractor->nazwa }}">
        </td>
        <td>
            @if($contractor->platnik == 1)
            <input type="checkbox" name="platnik" checked>
            @else
            <input type="checkbox" name="platnik"">
            @endif  
        </td>
        <td>
            <input type=" text" name="ulica" placeholder="{{ $contractor->ulica }}">
        </td>
        <td>
            <input type="text" name="nrDomu" placeholder="{{ $contractor->nrDomu }}">
        </td>
        <td>
            <input type="text" name="nrMieszkania" placeholder="{{ $contractor->nrMieszkania }}">
        </td>
        <td>
            <a href="/delete/{{ $contractor->id }}"><button class="delete">Delete</button></a><br>
            <button class="update" id="{{ $contractor->id }}">Update</button>
        </td>
    </tr>
    @endforeach
    <tr>
        <td colspan="100%">
            <center>
                <button class="ADD">ADD</button>
            </center>
        </td>
    </tr>
</table>
@stop