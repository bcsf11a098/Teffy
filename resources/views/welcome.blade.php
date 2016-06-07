@extends('layouts.app')

@section('content1')
    <div class="row">
            
            <div class="col-md-2 col-md-offset-1">
                <div class="row">
                    <div class="col-md-12 g">
                        <div class="list-group">
                           <br>
                            <h4 class="list-group-item-heading">Location</h4>
                            <a href="#" class="list-group-item">Your location</a>
                            <br>
                            <br>
                            <h4 class="list-group-item-heading">People</h4>
                                <li class="list-group-item">All My Connection</li>
                                <li class="list-group-item"> FRiends</li>
                            
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12 g">
                        <div class="list-group">
                        <br>
                            <small><h5 class="list-group-item-heading">Browse MarketPlace</h5></small>
                            <a href="#" class="list-group-item">First item</a>
                            <a href="#" class="list-group-item">Second item</a>
                            <a href="#" class="list-group-item">Third item</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 a1">
                <div class="row">
                    <div class="col-md-12 h">


                        <button type="button" class="btn btn-link btn-md" data-toggle="modal" data-target="#myModal">Post</button>
                        <button type="button" class="btn btn-link btn-md" data-toggle="modal" data-target="#"> <i class="fa fa-question-circle"></i>&nbsp;&nbsp;<i class="fa fa-envelope"></i>&nbsp;&nbsp;Ask</button>
                        <button type="button" class="btn btn-link btn-md" data-toggle="modal" data-target="#">search</button>


                    </div>
                </div>
        
    
                <div class="row">
                    <div class="col-md-12 a" >
                    
                            <div class="col-md-2 b"> 
                                <img src="/images/123.png" class=" c">
                            </div>
                            <div class="col-md-10 d panel ">
                                <div class="i">
                                    <a href="#"> UserName </a><span> posted listing in </span><a href="">Catogery</a> 
                                </div>
                                <br>
                                <div class="row e"  style="padding: 0px;">
                                    <div class="col-md-4">
                                        <img  id="image" src="/images/1234.jpg" class="j img-thumbnail" >
                                        <br>

                                        <a href=""><small>like</small></a> &nbsp;
                                        <a href=""><small>comment</small></a> &nbsp;
                                        <a href=""><small>share</small></a>
                                    </div>

                                    <div class="col-md-8 " style="height:150px;">
                                        <div class="row">

                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <a href="#">Title of the discription :</a>   
                                                </div>
                                            </div>
                                            <div class="col-md-4 pull-right ">
                                                <div class="form-group">
                                                    <label for="pwd">$ Price</label>   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <small>
                                                    <b><label >Description:</label></b>
                                                    <span> the discription of the product</span>
                                                </small>
                                                 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 a" >
                    
                            <div class="col-md-2 b"> 
                                <img src="/images/123.png" class=" c">
                            </div>
                            <div class="col-md-10 d panel ">
                                <div class="i">
                                    <a href="#"> UserName </a><span> posted listing in </span><a href="">Catogery</a> 
                                </div>
                                <br>
                                <div class="row e"  style="padding: 0px;">
                                    <div class="col-md-4">
                                        <img  id="image" src="/images/1234.jpg" class="j img-thumbnail" >
                                        <br>

                                        <a href=""><small>like</small></a> &nbsp;
                                        <a href=""><small>comment</small></a> &nbsp;
                                        <a href=""><small>share</small></a>
                                    </div>

                                    <div class="col-md-8 " style="height:150px;">
                                        <div class="row">

                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <a href="#">Title of the discription :</a>   
                                                </div>
                                            </div>
                                            <div class="col-md-4 pull-right ">
                                                <div class="form-group">
                                                    <label for="pwd">$ Price</label>   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <small>
                                                    <b><label >Description:</label></b>
                                                    <span> the discription of the product</span>
                                                </small>
                                                 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                    </div>
                </div>

            </div>
            <div class="col-md-3" style="height:600px; background-color:lightgrey">
                div for banners or adds
            </div>
        </div>  
        <br>
        <br>
        <br>
        <br>
        <br>

<!-- model start -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">New Post</h4>
                </div>
             <!-- model body -->
                        <div class="row">
                        <div class="col-md-2 "> 
                            <img src="/images/123.png" class=" c">
                        </div>
                        <div class="col-md-8 k">
                            <div class="form-group">
                                <input type="text" class="form-control" id="usr" placeholder="What Are you Posting">
                            </div>
                            <hr>
                            <div class="form-group">
                               
                                <input type="text" class="form-control" id="usr" placeholder="Why Are you Posting">
                            </div>
                            <hr>
                            <div class="form-group">
                               
                                <textarea class="form-control" placeholder="Discription"></textarea>
                            </div>
                            <hr>
                            <div class="form-group">
                              <select class="form-control" id="sel1">
                                <option selected disabled>Select Category </option>
                                <option>Category 1</option>
                                <option>Catogery 2</option>
                                <option>Catogery 3</option>
                                <option>Catogery 4</option>
                              </select>
                            </div>
                            <div class="row e" >
                                <div class="col-md-8 f">
                                    <input type="file" name='file' id='file'></input>
                                </div>
                                <div class="col-md-4">
                                    <img  id="image" src="/images/1234.jpg" class="c img-thumbnail" >
                                </div>
                            
                            </div>
                        </div>
                    </div>      
                
             <!-- model body ends -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
             </div>
        </div>
    </div>
    <!-- model ends -->
    
@stop
