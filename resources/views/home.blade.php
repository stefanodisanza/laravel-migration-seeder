@extends('layouts.app')

@section('content')
    <h1>Treni in partenza</h1>
    <table>
        <thead>
            <tr>
                <th>Azienda</th>
                <th>Stazione di partenza</th>
                <th>Stazione di arrivo</th>
                <th>Orario di partenza</th>
                <th>Orario di arrivo</th>
                <th>Codice Treno</th>
                <th>Numero Carrozze</th>
                <th>In orario</th>
                <th>Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <td>{{ $train->Azienda }}</td>
                    <td>{{ $train->{'Stazione di partenza'} }}</td>
                    <td>{{ $train->{'Stazione di arrivo'} }}</td>
                    <td>{{ $train->{'Orario di partenza'} }}</td>
                    <td>{{ $train->{'Orario di arrivo'} }}</td>
                    <td>{{ $train->{'Codice Treno'} }}</td>
                    <td>{{ $train->{'Numero Carrozze'} }}</td>
                    <td>{{ $train->{'In orario'} ? 'Sì' : 'No' }}</td>
                    <td>{{ $train->Cancellato ? 'Sì' : 'No' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection