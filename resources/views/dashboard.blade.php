@extends('layouts.app')

@section('page-header')
    <section class="content-header">
        <h1>Dashboard<small></small></h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-square-o"></i> Dashboard</a></li>
        </ol>
    </section>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            Du bist angemeldet, willkommen {{ \Illuminate\Support\Facades\Auth::user()->firstname }} {{ \Illuminate\Support\Facades\Auth::user()->firstname }}!
        </div>
    </div>
@endsection
