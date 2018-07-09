@extends('layouts.app')

@section('content')

@if(Auth::user())
<div id="home_container" class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in!
                    
                    @endif
                </div>
            </div>
        </div>

        <div class="col-md-8" style="margin-top: 2em;">
            <div class="card">
                <div class="card-header text-white bg-info">
                    <h3 class="panel-title">Réservation</h3>
                </div>
                <div class="card-body">
                    {!! $calendar->calendar() !!}
                    {{ $calendar->getOptionsJson() }}
                    {!! $calendar->script() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
