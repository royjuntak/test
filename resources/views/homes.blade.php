@extends('layouts.app')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{  asset('public/css/homes.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <a href="{{ url('/board') }}" style="all:unset; ">
                <div class="menu ">
                    <span class="fa fa-server"></span> 
                        board
                </div>
            </a>
            <a href="{{ url('/homes') }}" style="all:unset;">
                <div class="menu active">
                    <span class="fa fa-home"></span> 
                        home
                </div>
            </a>
            <div class="menu-team">
                Team
            </div>
             <div class="menu bottom-menu">
                <span class="fa fa-server"></span> JUNTAK
            </div>
            <div class="menu bottom-menu">
                <span class="fa fa-plus-square-o"></span> Create Team
            </div>
        </div>
        <div class="col-md-6" style="display: grid">
            Content
            <img src="{{ URL::to('/') }}/public/img/snowee.jpg">
        </div>
        <div class="col-md-3"> 
            <span class="fa fa-eye"></span> Recently Views
            <div class="projekItems">
                <div class="box"> 
                </div> 
                <span class="boxtitle">
                    projek laravel
                </span>

            </div>
            <div class="menu projek">
                <span class="fa fa-image"></span> Team
            </div>
            <div class="menu projek">
                <span class="fa fa-image"></span> PROJEK
            </div>
            <div class="menu projek">
                <span class="fa fa-image"></span> WELCOME
            </div>
            <div class="menu projek">
                <span class="fa fa-image"></span> WELCOME
            </div>
            <br>
            <div>
                LINKS
            </div>
            <div class="menu projek">
                <span class="fa fa-plus-square-o"></span> Create Board
            </div>
        </div>
    </div>
</div>
@endsection