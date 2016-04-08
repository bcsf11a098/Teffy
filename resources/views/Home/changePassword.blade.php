@extends('layouts.app')

@section('content')
    <br><br>
	<div class="row">
        <div class="col-md-6 col-md-offset-3 ">
            <div class="well bs-component new-post">
                <form class="form-horizontal" method="POST" action="/updatePwd">
					{!! csrf_field() !!}
                    <div class="form-group">
                        <label class="col-md-4 control-label">E-Mail Address
                        </label>
                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email"value="{{Auth::user()->email}}" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Old Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" 
                                    name="old_password">
                            </div>
                    </div>
                    <div class="form-group">
                       <label class="col-md-4 control-label">New Password</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" 
                            name="new_password" value="{{old('new_password')}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Confirm Password
                        </label>

                        <div class="col-md-6">
                            <input type="password" class="form-control" 
                            name="confirm_password">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-3 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-user"></i>Save
                            </button>
                        </div>
                        <div class="col-md-3 col-md-offset-1">
                            <a href="/showUpdatePage"
                               class="btn btn-primary back_a">
                                <i class="fa fa-btn fa-user"></i>Back
                            </a>
                        </div>
                    </div>
                </form>
            </div>
               <!--  <div id="errors">
                    {{count($errors)}}
                	@if(count($errors))
                    {{count($errors)}}
                    <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                    </ul>
                    @endif
                </div>-->    
        </div>
    </div>
@stop
