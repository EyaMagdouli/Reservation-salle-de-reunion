@extends('layouts.app')
@section('content')


@php
    $salles = \App\Models\Reservation::all();
@endphp
@foreach ($reservations as $reservation )
 {{$reservation->all()}}
 @endforeach

@endsection
