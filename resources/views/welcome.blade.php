@extends('layouts.app')

@section('content')
    <div class="row">
        @include ('partials.side_bar1')
        <div class="col-md-6 a1">
            <div class="row">
                <div class="col-md-12 h">


                    <button type="button" class="btn btn-link btn-md post-btn" data-toggle="modal">Post</button>
                    <button type="button" class="btn btn-link btn-md" data-toggle="modal" data-target="#"> <i class="fa fa-question-circle"></i>&nbsp;&nbsp;<i class="fa fa-envelope"></i>&nbsp;&nbsp;Ask</button>
                    <button type="button" class="btn btn-link btn-md" data-toggle="modal" data-target="#">search</button>
                    @include ('includes.post_modal')
                </div>
            </div>
            @foreach($posts as $post)
                @include ('partials.post_body', array('post'))
            @endforeach
            
            </div>
        <div class="col-md-3" style="height:600px; background-color:lightgrey">
            div for banners or adds
        </div>

    </div>
    <div class="pull-right">
        {{$posts->render()}}
    </div>  
    <div class="modal fade" id="afterPostModal" role="dialog">
    <div class="modal-dialog">
  
        <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
    </div>    
@stop
