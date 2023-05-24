@extends('layouts.app')

@section('maincontent')
    <main>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Numero Treno</th>
                    <th scope="col">Azienda</th>
                    <th scope="col">Data</th>
                    <th scope="col">Partenza</th>
                    <th scope="col">Ora Partenza</th>
                    <th scope="col">Arrivo</th>
                    <th scope="col">Ora Arrivo</th>
                    <th scope="col">Carrozze</th>
                    <th scope="col">Ritardo</th>
                    <th scope="col">Cancellato</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <th>{{ $train->train_code }}</th>
                        <td>{{ $train->agency }}</td>
                        <td>{{ $train->date_travel }}</td>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->departure_time }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ $train->arrival_time }}</td>
                        <td>{{ $train->number_carriages }}</td>
                        @if ($train->in_time)
                            <td class="bg-warning">Ritardo</td>
                        @else
                            <td class="bg-success">In Orario</td>
                        @endif
                        @if ($train->deleted)
                            <td class="bg-danger">Cancellato</td>
                        @else
                            <td></td>
                        @endif

                    </tr>
                @endforeach
            </tbody>
        </table>


    </main>
@endsection
