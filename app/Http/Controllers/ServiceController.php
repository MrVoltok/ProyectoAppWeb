<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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
        // $userId = Auth::check() ? Auth::user()->id : null;
        return view('schedule', ['services' => Service::all()]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        // $userId = Auth::check() ? Auth::user()->id : null;
        return view('auth.list.listServices', ['services' => Service::all()]);
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
     * Verifies if $horaInicio is between $horaApertura and $horaCierre
     */
    private function validateHour(Request $request){
        
        $horaInicio = Carbon::parse($request['horaInicio']);
        $horaCierre = Carbon::parse('21:00:00');
        $horaApertura = Carbon::parse('10:00:00');
        
        if ($horaInicio->greaterThan($horaCierre) || $horaInicio->lessThan($horaApertura)) {
            return false;
        }
        return true;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validateHour($request);
        if(!$this->validateHour($request)){
            return redirect()->route('schedule');
        }

        $service = new Service;
        $service->name = $request['service'];
        $service->horaInicio = $request['horaInicio'];

        switch($request['service']){
            case 1:
                $name = "Gel en uñas";
                $precio = 180;
                $duracion = 45;
                $aux = Carbon::createFromFormat('H:i', $request['horaInicio']);
                $horaFin = $aux->addMinutes($duracion);
                break;

            case 2:
                $name = "Manicure";
                $precio = 150;
                $duracion = 30;
                $aux = Carbon::createFromFormat('H:i', $request['horaInicio']);
                $horaFin = $aux->addMinutes($duracion);
                break;

            case 3:
                $name = "Tinte de cabello";
                $precio = 580;
                $duracion = 80;
                $aux = Carbon::createFromFormat('H:i', $request['horaInicio']);
                $horaFin = $aux->addMinutes($duracion);
                break;
        }
        $service->name = $name;
        $service->precio = $precio;
        $service->horaFin = $horaFin->format('H:i');
        $service->duracion = $duracion;
        $service->dia = $request['dia'];
        auth()->user()->services()->create([
            'name' => $service->name,
            'horaInicio' => $service->horaInicio,
            'horaFin' => $service->horaFin,
            'duracion' => $service->duracion,
            'precio' => $service->precio,
            'dia' => $service->dia,
        ]);
        // $service = Service::all();
        /*
        
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
