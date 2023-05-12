@extends('layouts/main')

@section('content')

<h1>TRENI STRANI</h1>


<div class="fluid-container flex">

    @foreach ($trains as $singleTrain)
        
    <div class="pack-container">
        <div class="header">
            <p class="title">
                {{ $singleTrain->agency }}
            </p>
        </div>
        <div>
            <ul class="lists">
                <li class="list">
                    <p>
                        Stazione di Partenza: {{ $singleTrain->departure_station }}
                    </p>
                </li>
                <li class="list header text-start">
                    <p>
                        Stazione di Arrivo: {{ $singleTrain->arrival_station }}
                    </p>
                </li>
                <li class="list">
                    <p>
                        Data di Partenza: {{ $singleTrain->departure_time }}
                    </p>
                </li>
                <li class="list">
                    <p>
                        Codice Treno: {{ $singleTrain->train_code }}
                    </p>
                </li>
                <li class="list">
                    <p>
                        {{ ($singleTrain->in_time == null ? 'Nessun Ritardo' : 'In Ritardo') }}
                    </p>
                </li>
            </ul>
        </div>
        <div class="button-container">
            <button type="button">
                Buy Now
            </button>
        </div>
    </div>
    
    @endforeach


</div>

    
@endsection