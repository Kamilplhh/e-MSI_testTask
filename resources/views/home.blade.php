@extends('layouts.master')

@section('content')
<p>
    <label for="nip">NIP</label>
    <input type="text" name="nip"><br>

    <label for="regon">REGON</label>
    <input type="number" name="regon" min=0><br>

    <label for="nazwa">NAZWA</label>
    <input type="text" name="nazwa"><br>

    <label for="data">DATA POWSTANIA</label>
    <input type="date" name="data"><br>

    <label for="ulica">ULICA</label>
    <input type="text" name="ulica"><br>

    <label for="nrDomu">NUMER DOMU</label>
    <input type="textbox" name="nrDomu"><br>

    <label for="nrMieszk">NUMER MIESZKANIA</label>
    <input type="text" name="nrMieszk"><br>

    <label for="uwagi">UWAGI</label>
    <input type="text" name="uwagi"><br>
</p>

<select>
    <option value="off" disabled selected>Kolory</option>
    <option value="zielony">Zielony</option>
    <option value="niebieski">Niebieski</option>
    <option value="szary">Szary</option>
    <option value="turkusowy">Turkusowy</option>
    <option value="granatowy">Granatowy</option>
    <option value="czerwony">Czerwony</option>
    <option value="biały">Biały</option>
</select>

<select>
    <option value="off" disabled selected>VAT</option>
    <option value="ZW">ZW</option>
    <option value="NP">NP.</option>
    <option value="0%">0%</option>
    <option value="3%">3%</option>
    <option value="8%">8%</option>
    <option value="23%">23%</option>
</select>

<ol>
    <li>Element</li>
    <li>Element</li>
    <li>Element</li>
</ol>
@stop