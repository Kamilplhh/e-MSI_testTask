@extends('layouts.master')
@vite('resources/js/faktury.js')

@section('content')
<table class="pracownicy">
    <tr>
        <th>Lp.</th>
        <th>Opis</th>
        <th>MPK</th>
        <th>Kwota Netto</th>
        <th>Ilość</th>
        <th>VAT</th>
        <th>Kwota Brutto</th>
        <th>Wartość Netto</th>
        <th>Wartość Brutto</th>
    </tr>
    <tr>
        <td>1.</td>
        <td>Opis</td>
        <td>Kraków</td>
        <td>
            <input type="number" name="kwota" value="300" min="0">
        </td>
        <td>
            <input type="number" name="ilosc" value="2" min="0">
        </td>
        <td>
            <select name="VAT">
                <option value="23" selected>23%</option>
                <option value="0">0%</option>
                <option value="8">8%</option>
            </select>
        </td>
        <td class="kBrutto"></td>
        <td class="wNetto"></td>
        <td class="wBrutto"></td>
    </tr>
    <tr>
        <td>2.</td>
        <td>Opis</td>
        <td>Warszawa</td>
        <td>
            <input type="number" name="kwota" value="532" min="0">
        </td>
        <td>
            <input type="number" name="ilosc" value="11" min="0">
        </td>
        <td>
            <select name="VAT">
                <option value="23" selected>23%</option>
                <option value="0">0%</option>
                <option value="8">8%</option>
            </select>
        </td>
        <td class="kBrutto"></td>
        <td class="wNetto"></td>
        <td class="wBrutto"></td>
    </tr>
    <tr>
        <td>3.</td>
        <td>Opis</td>
        <td>Stargard</td>
        <td>
            <input type="number" name="kwota" value="12" min="0">
        </td>
        <td>
            <input type="number" name="ilosc" value="3" min="0">
        </td>
        <td>
            <select name="VAT">
                <option value="23" selected>23%</option>
                <option value="0">0%</option>
                <option value="8">8%</option>
            </select>
        </td>
        <td class="kBrutto"></td>
        <td class="wNetto"></td>
        <td class="wBrutto"></td>
    </tr>
    <tr>
        <td>4.</td>
        <td>Opis</td>
        <td>Lublin</td>
        <td>
            <input type="number" name="kwota" value="156" min="0">
        </td>
        <td>
            <input type="number" name="ilosc" value="7" min="0">
        </td>
        <td>
            <select name="VAT">
                <option value="23" selected>23%</option>
                <option value="0">0%</option>
                <option value="8">8%</option>
            </select>
        </td>
        <td class="kBrutto"></td>
        <td class="wNetto"></td>
        <td class="wBrutto"></td>
    </tr>
    <tr>
        <td>5.</td>
        <td>Opis</td>
        <td>Gdynia</td>
        <td>
            <input type="number" name="kwota" value="900" min="0">
        </td>
        <td>
            <input type="number" name="ilosc" value="1" min="0">
        </td>
        <td>
            <select name="VAT">
                <option value="23" selected>23%</option>
                <option value="0">0%</option>
                <option value="8">8%</option>
            </select>
        </td>
        <td class="kBrutto"></td>
        <td class="wNetto"></td>
        <td class="wBrutto"></td>
    </tr>
</table><br>
<button id="filter">Powyżej 1,000zł Netto</button>
@stop