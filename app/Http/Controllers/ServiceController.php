<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('schedule', ['services' => Service::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service;
        $service->name = $request['service'];
        $service->horaInicio = $request['horaInicio'];

        $aux;
        $duracion;
        switch($request['service']){
            case 1:
                $name = "Gel en uñas";
                $duracion = 45;
                $aux = Carbon::createFromFormat('H:i', $request['horaInicio']);
                $horaFin = $aux->addMinutes($duracion);
                break;

            case 2:
                $name = "Manicure";
                $duracion = 30;
                $aux = Carbon::createFromFormat('H:i', $request['horaInicio']);
                $horaFin = $aux->addMinutes($duracion);
                break;

            case 3:
                $name = "Tinte de cabello";
                $duracion = 80;
                $aux = Carbon::createFromFormat('H:i', $request['horaInicio']);
                $horaFin = $aux->addMinutes($duracion);
                break;
        }
        $service->name = $name;
        $service->horaFin = $horaFin->format('H:i');
        $service->duracion = $duracion;
        auth()->user()->services()->create([
            'name' => $service->name,
            'horaInicio' => $service->horaInicio,
            'horaFin' => $service->horaFin,
            'duracion' => $service->duracion,
        ]);
        // $service = Service::all();
        /*
        dd($service);
        */

        return redirect()->route('schedule');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('schedule');
    }
}
