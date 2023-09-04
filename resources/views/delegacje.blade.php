@extends('layouts.master')

@section('content')
<table class="table">
    <tr>
        <th>Lp.</th>
        <th>Imie i Nazwisko</th>
        <th>Data od</th>
        <th>Data do</th>
        <th>Miejsce wyjazdu</th>
        <th>Miejsce przyjazdu</th>
    </tr>
    @php($i = 0)
    @foreach($objects as $object)
    @php($i++)
    <tr>
        <td>{{ $i }}</td>
        <td>{{ $object->name }}</td>
        <td>{{ $object->from }}</td>
        <td>{{ $object->to }}</td>
        <td>{{ $object->departure }}</td>
        <td>{{ $object->arrival }}</td>
    </tr>
    @endforeach
</table>
@stop