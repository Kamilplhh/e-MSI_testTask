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
        <form method="POST" action="/update">
        @csrf
            <input type="hidden" name="id" value="{{ $contractor->id }}">
            <td>
                <input type="text" name="nip" value="{{ $contractor->nip }}" required>
            </td>
            <td>
                <input type="text" name="regon" value="{{ $contractor->regon }}" required>
            </td>
            <td>
                <input type="text" name="nazwa" value="{{ $contractor->nazwa }}" required>
            </td>
            <td>
                @if($contractor->platnik == 1)
                <input type="checkbox" name="platnik" checked>
                @else
                <input type="checkbox" name="platnik"">
            @endif  
        </td>
        <td>
            <input type=" text" name="ulica" value="{{ $contractor->ulica }}" required>
            </td>
            <td>
                <input type="text" name="nrDomu" value="{{ $contractor->nrDomu }}" required>
            </td>
            <td>
                <input type="text" name="nrMieszkania" value="{{ $contractor->nrMieszkania }}" required>
            </td>
            <td>
                <button class="update" type="submit">Update</button>
        </form>
            <a href="/delete/{{ $contractor->id }}"><button class="delete">Delete</button></a><br>
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