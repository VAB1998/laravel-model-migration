@extends('layouts/main')

@section('title', 'Packages')

@section('content')
<section id="packages">
    <div class="container">
        <div class="row gy-3">
            @forelse ($packages as $package)
            <div class="col-6">
                <div class="card cs_card">
                    <div class="card-body">
                        <h5 class="destination">
                            Destination:
                            {{ $package['destination'] }}
                        </h5>
                        <h5 class="number_of_adults">
                            Number of Adults:
                            {{ $package['number_of_adults'] }}
                        </h5>
                        <h5 class="number_of_children">
                            Number of Children:
                            {{ $package['number_of_children'] }}
                        </h5>
                        <h5 class="departure">
                            Departure: 
                            {{ $package['departure'] }}
                        </h5>
                        <h5 class="return">
                            Return:
                            {{ $package['return'] }}
                        </h5>
                        <a href="{{route('package', $package['id'])}}" class="stretched-link"></a>
                    </div>
                </div> 
            </div>   
            @empty
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            No Movies Available
                        </h5>
                    </div>
                </div>   
            </div>
            @endforelse
        </div> 
</section>
@endsection