@extends('layouts.app')

@section('content')
<div class="container container-schedule">
      <div class="left">
        <div class="calendar">
          <div class="month">
            <i class="fas fa-angle-left prev"></i>
            <div class="date">december 2015</div>
            <i class="fas fa-angle-right next"></i>
          </div>
          <div class="weekdays">
            <div>D</div>
            <div>L</div>
            <div>A</div>
            <div>M</div>
            <div>J</div>
            <div>V</div>
            <div>S</div>
          </div>
          <div class="days"></div>
          <div class="goto-today">
            <div class="goto">
              <input type="text" placeholder="MM / AAAA" class="date-input" />
              <button class="goto-btn">Buscar</button>
            </div>
            <button class="today-btn">Hoy</button>
          </div>
        </div>
      </div>
      <div class="right">
        <div class="today-date">
          <div class="event-day">wed</div>
          <div class="event-date">12th december 2022</div>
        </div>
        <div class="events">
          <!-- LISTA DE RESERVACIONES -->
          @forelse($services as $service)
            @if (!Auth::check())
              <div class="event">
                <div class="event-data">
                  <div class="event-time">
                    <span class="event-time-text">{{ $service->horaInicio }} - {{ $service->horaFin }}</span>
                  </div>
                  <div class="title">
                    <span class="event-title-text">Servicio Reservado</span>
                  </div>
                </div>
              </div>
            @elseif ($service->user_id == Auth::user()->id)
              <div class="event">
                <div class="event-data">
                  <div class="event-time">
                    <span class="event-time-text">{{ $service->horaInicio }} - {{ $service->horaFin }}</span>
                  </div>
                  <div class="title">
                    <span class="event-title-text">{{ $service->name }}</span>
                  </div>
                </div>
                <div class="event-delete">
                  <form action="{{ route('schedule.destroy', $service->id) }}" method="post">
                    @csrf
                    @method("DELETE")
                    <button type="submit">
                      <i class="fa-solid fa-x"></i>
                    </button>
                  </form>
                </div>
              </div>
              @else
                <div class="event">
                  <div class="event-data">
                    <div class="event-time">
                      <span class="event-time-text">{{ $service->horaInicio }} - {{ $service->horaFin }}</span>
                    </div>
                    <div class="title">
                      <span class="event-title-text">Servicio Reservado</span>
                    </div>
                  </div>
                </div>
            @endif
          @empty
            <div class="no-event">
              <p>No se han apartado citas</p>
            </div>
          @endforelse
        </div>
        <form action=" {{ route('schedule.store') }} " method="post">
          @csrf
          <div class="add-event-wrapper">
            <div class="add-event-header">
              <div class="title">Agenda una cita</div>
              <i class="fas fa-times close"></i>
            </div>
            <div class="px-3">
              <div class="service-name mb-3">
                <label for="service">Servicio</label>
                <select name="service" id="service" class="form-select">
                  <option value="null" selected>Servicio</option>
                  <option value="1">Gel en uñas</option>
                  <option value="2">Manicure</option>
                  <option value="3">Tinte de cabello</option>
                </select>
              </div>
              <div class="add-event-TimeInput ">
                <label for="horaInicio"class="text-dark" >Horario de cita: </label>
                <input type="time" class="event-timeInput" name="horaInicio">
              </div>
            </div>
            <div class="hidden-dayValue"></div>
            <div class="add-event-footer">
              <button type="sumbit" class="add-event-btn">Agendar cita</button>
            </div>
          </div>
        </div>
      </form>
      <button class="add-event">
        <i class="fas fa-plus"></i>
      </button>
    </div>

  <script src="{{ asset('js/script.js') }}"></script>
  <script src="{{ asset('js/day.js') }}"></script>
@endsection
