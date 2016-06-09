@extends('layouts.app1')

@section('content')
<div class="container col-md-12">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
                @if (Auth::guest())
                    @include('auth.login')
                @else
                <a>{{ Auth::user()->name }}</a> <br>
                            <td><a href="{{ url('/home') }}">Dashboard</a></td>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
