@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" id="panel_id" style="display: none">
                    <input type="text" name="title" class="take-note-title" placeholder="Title" id="title_id">
                    
                </div>

                <div class="panel-body">
                    <input type="text" name="title" class="take-note" placeholder="Take note" id="note_id">
                    <button class="btn btn-success" style="margin: 10px 0px" id="button_id">
                        <span class="fa fa-pencil" id="save_id"></span>
                        save note
                    </button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
