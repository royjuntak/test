@extends('layouts.app')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{  asset('public/css/board.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <a href="{{ url('/board') }}" style="all:unset; ">
                <div class="menu active">
                    <span class="fa fa-server"></span>
                        board
                </div>
            </a>
            <a href="{{ url('/homes') }}" style="all:unset; ">
                <div class="menu ">
                    <span class="fa fa-home"></span> 
                        home
                </div>
            </a>
            <div class="menu-team">
                Team 
            </div>
            <div class="menu projek">
                <span class="fa fa-server"></span> JUNTAK
            </div>
            <div class="menu projek">
                <span class="fa fa-plus-square-o"></span> Create Team
            </div>
        </div>
        <div class="col-md-9">
            <span class="fa fa-eye"></span> Recently Viewed
            <br>
            <br>
            <br>
            <br>
            <br>
            <span class="fa fa-user-md"></span> Personal Board
        </div>
    </div>
</div>
@endsection