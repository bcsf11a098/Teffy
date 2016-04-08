@extends('layouts.app')

@section('content1')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">Welcome To Friend's Book</div>

                    <div class="panel-body">
                        <h2>
                           Make a Friend's circle <br><br>By SignUp on Friend's Book <br><br>and find Friend's
                        </h2>
                        <hr>
                        <div class="row">
                            <div class="col-md-offset-3 col-md-2">
                                <a href="{{ url('/login') }}" class="btn btn-primary btn-lg"> Login </a>
                            </div>
                            <div class="col-md-offset-1 col-md-2">
                                <a href="{{ url('/register') }}" 
                                class="btn btn-primary btn-lg">SignUp</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
