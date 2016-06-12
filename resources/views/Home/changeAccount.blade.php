@extends('layouts.app')

@section('content')
	<br><br>
	<div class="row">
    	<div class="col-md-6 col-md-offset-3 ">
        	<div class="well bs-component new-post">
            	<form class="form-horizontal" method="POST" action="/updateAccount">
		            {{ csrf_field() }}
		           	<fieldset>
			           	<legend ><h2>Update Account</h2></legend>
					 	<div class="form-group">
					 		<div class="row">
							   	<div class="col-md-3">
				        			<label class="profile-label pull-left">User Name: 
				        			</label>
				        		</div>
				        		
						     	<div class="col-md-7">
				        			<input class="form-control input-lg " 
				        			id="editName" type="text"
				        			name="name" value="{{Auth::user()->fname}}"readonly >
				      			</div>
				      			<div class="col-md-1 ">
							     	<button class=" edit btn btn-lg btn-link" 
							     	id="editNameBtn">
							     	Edit</button>
						     	</div>
			      			</div>
			      			<div class="row">
				      			<div class="col-md-3">
				        			<label class="profile-label pull-left">Email: 
				        			</label>
				        		</div>
						     	<div class="col-md-7">
				        			<input class="form-control input-lg" type="text" 
				        			id="editEmail" name="email" 
				        			value="{{Auth::user()->email}}"
				        			readonly >
				      			</div>
				      			<div class="col-md-offset-0 col-md-1 ">
							       <button class="edit btn btn-lg btn-link " 
							       id="editEmailBtn">
							     	Edit</button>
						     	</div>
			      			</div>
			      			<div class="row">
				      			<div class="col-md-3">
				        			<label class="profile-label pull-left">Password: 
				        			</label>
				        		</div>
				        		<div class="col-md-7">
							     	<a id="changePwd" 
							     	href="/showUpdatePwdPage"
							     	class=" profile-label-a btn btn-link">Change Password</a>
						     	</div>
			      			</div>
		      			</div>	
		    			<button type="submit" class="btn btn-sm btn-primary pull-right">SAVE</button>
					</fieldset>
				</form>
			</div>
	    </div>
	</div>
@stop
