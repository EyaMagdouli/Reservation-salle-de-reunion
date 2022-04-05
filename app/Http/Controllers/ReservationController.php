<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class ReservationController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create_reservation()
    {
        return view('home');
    }




    protected function validator(array $data)
    {
        return Validator::make($data, [
            'date' => ['required'],
            'salle_id' => ['required'],
            'start_time' => ['required'],
            'end_time' => ['required'],
            'capacity' => ['required'],
        ]);
    }
    public function store_reservation(Request $request){
        //dd($request->all());
        $data = $request->all();
        $reservation= Reservation::create([
            'date' => $data['date'],
            'salle_id' => $data['salle_id'],
            'user_id' => Auth::id(),
            'start_time' => $data['start_time'],
            'end_time' => $data['end_time'],
            //'capacity' => $data['capacity']
        ]);


        return redirect()->route('reservation.show')
            ->with('success', 'Reservation created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */

    public function show_reservation(Reservation $reservation)
    {
        return view('reservation.show');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        return view('reservation.edit', /* compact('reservation') */);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, Reservation $reservation)
    {
        $request->validate([
            'date' => ['required'],
            'salle_id' => ['required'],
            'start_time' => ['required'],
            'end_time' => ['required'],
            'capacity' => ['required'],
        ]);
        $reservation->update($request->all());

        return redirect()->route('reservation.show')
            ->with('success', 'Reservation updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return redirect()->route('reservation.show')
            ->with('success', 'Reservation deleted successfully');
    }





}
