@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                

                <div class="panel-body">
                    <h3 style="text-align:center">
                            
                        <img style ="box-shadow: 0 1px 20px 0px #000 !important; width:170px"src="/avatars/{{ Auth::user()->avatar }}" class="img-fluid rounded-circle shadow">
                        
                        <a href="/profile"> {{ Auth::user()->name }}! </a></h3>
                   
                    
                </div>
                <div class="panel-body" style="float:right">
                        <a href="/ta" style="position:right;" class="btn btn-primary">Teacher Assistant </a>
                        <a href="/dr" style="position:right;" class="btn btn-success">Doctors</a>

                    </div>
            </div>
        </div>
    </div>
</div>

@endsection
