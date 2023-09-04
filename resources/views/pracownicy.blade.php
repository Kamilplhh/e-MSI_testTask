@extends('layouts.master')
@vite('resources/js/pracownicy.js')

@section('content')
<table class="pracownicy">
    <tr>
        <th>Lp.</th>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Stanowisko</th>
        <th>Data zatrudnienia</th>
        <th>Ilość dni urlopowych</th>
    </tr>
    <tr>
        <td>1.</td>
        <td>Jan</td>
        <td>Kowalski</td>
        <td>Mechanik</td>
        <td>2014-07-10</td>
        <td>12</td>
    </tr>
    <tr>
        <td>2.</td>
        <td>Tadeusz</td>
        <td>Lewandowski</td>
        <td>Inżynier</td>
        <td>2016-02-07</td>
        <td>13</td>
    </tr>
    <tr>
        <td>3.</td>
        <td>Marcel</td>
        <td>Staszewski</td>
        <td>Starszy Inżynier</td>
        <td>2023-02-01</td>
        <td>1</td>
    </tr>
    <tr>
        <td>4.</td>
        <td>Robert</td>
        <td>Surski</td>
        <td>Młodszy Inżynier</td>
        <td>1999-07-14</td>
        <td>20</td>
    </tr>
    <tr>
        <td>5.</td>
        <td>Tomasz</td>
        <td>Osa</td>
        <td>Kierownik wydziału</td>
        <td>2019-11-21</td>
        <td>7</td>
    </tr>
</table><br>

<label for="first">First</label>
<input type="color" name="first" value="#a1a1a1">
<label for="second">Second</label>
<input type="color" name="second" value="#777575">
@stop