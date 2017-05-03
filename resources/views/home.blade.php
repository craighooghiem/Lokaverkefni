@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           @if (Route::has('login'))
               			<!-- skilaboð til notenda ef hann er skráður inn-->
                    @if (Auth::check()) 
                        
                      <!-- skilaboð til notenda ef hann er ekki skráður inn-->
                    @else
                        You need to <a href="{{ route('register') }}">sign up</a> to use the features of this laravel app. Already have an account ? <a href="{{ route('login') }}">log in here</a>
                        
                    @endif
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
