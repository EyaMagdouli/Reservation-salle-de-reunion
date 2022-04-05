@extends('layouts.app')
@section('content')
<!--body section -->
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <div class="form-header">
                            <h1>Réserver une salle pour votre réunion</h1>
                        </div>

                        {{-- /*route('reservation.store_reservation')*/  --}}
                        <form method="POST" action="{{ route('reservation.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <span class="form-label"> Date</span>
                                        <input class="form-control" name="date" type="date" required>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <span class="form-label"> Salle</span>
                                        <select name="salle_id" id="salle_id" class="form-control" required  >
                                            @php
                                                $salles = \App\Models\Salle::where('isReserved',0)->get();
                                            @endphp
                                            @foreach ($salles as $salle )
                                                <option value="{{$salle->id}}"> {{$salle->slug}} </option>
                                            @endforeach
                                        </select>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <span class="form-label"> Capacité</span>
                                        <input type="number" name="capacity" value="2"  class="form-control" required/>
                                        {{-- <select name="salle_id" id="salle_id" class="form-control" required >
                                        @foreach ($salles as $salle )
                                            <option value="{{$salle->id}}"> {{$salle->capacity}} </option>

                                        @endforeach
                                        </select> --}}
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <h3 style="color: rgb(204, 175, 48)"> Start Time : </h3>
                                    <div class="form-group">
                                        <input class="form-control" type="time" id="appt" name="start_time" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h3 style="color: rgb(204, 175, 48)"> End Time : </h3>
                                    <div class="form-group">
                                        <input class="form-control" type="time" id="appt" name="end_time" required>
                                    </div>
                                </div>

                            </div>
                                <div class="form-btn">
                                    <input type="submit" class="submit-btn" value="Réserver">
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    function setCapacity(e){
        let val = document.getElementById('salle_id').value;
        let capacity = val.split('::')[1];
        console.log(val)
        document.getElementById('capacity').value = capacity;
    }
</script>
@endsection
