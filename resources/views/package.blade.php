@extends('layouts/main')

@section('title', 'Package Info')

@section('content')
<section id="package">
    <div class="info">
        <h2 class="destination">
            Destination:
            {{ $package['destination'] }}
        </h2>
        <h2 class="number_of_adults">
            Number of Adults:
            {{ $package['number_of_adults'] }}
        </h2>
        <h2 class="number_of_children">
            Number of Children:
            {{ $package['number_of_children'] }}
        </h2>
        <h2 class="departure">
            Departure: 
            {{ $package['departure'] }}
        </h2>
        <h2 class="return">
            Return:
            {{ $package['return'] }}
        </h2>
    </div>
</section>
@endsection