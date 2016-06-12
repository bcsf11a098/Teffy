<!-- model start -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Post New Listing </h4>
                </div>
             <!-- model body -->
                        <div class="row">
                        <div class="col-md-2 "> 
                            <img src="/images/123.png" class=" c">
                        </div>
                        <form action="/listing" method="post" id="listingForm">
                            {{ csrf_field() }}

                            <meta name="listing" content="{{csrf_token()}}">

                        <div class="col-md-9 k">
                            <div class="form-group">
                                <input type="text" name="what" id="what" class="form-control input-sm" placeholder="What Are you Posting">
                            </div>
                            <hr>
                            <div class="form-group">
                               
                                <input type="text" name="why" id="why"  class="form-control  input-sm" placeholder="Why Are you Posting">
                            </div>
                            <hr>
                            <div class="form-group">
                               
                                <textarea name="discription" class="form-control  input-sm" placeholder="Discription"></textarea>
                            </div>
                            <hr>
                            <div class="row r-price">
                                <span class="col-md-1 s-price"><h5>$</h5></span>
                                <div class="col-md-5 "> 
                                    <div class="form-group">
                                        <input type="text" name="price" class="form-control input-sm" placeholder="Price">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                              <select class="form-control  input-sm" name="category">
                                <option selected disabled>Select Category </option>
                                <option value="Merchandise">Merchandise</option>
                                <option value="Cars">Cars</option>
                                <option value="Rentals">Rentals</option>
                                <option value="Real Estate">Real Estate</option>
                                <option value="Jobs">Jobs</option>
                                <option value="Pets">Pets</option>
                                <option value="Tickets">Tickets</option>
                                <option value="Services">Services</option>
                                <option value="Others">Others</option>
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
                            <div class="row " >
                                <div class="col-md-6">
                                   <select class="form-control  input-sm" name="country">
                                    <option selected disabled>Select Country </option>
                                    <option value="Autralia">Autralia</option>
                                    <option value="Canada">Canada</option>
                                    <option value="India">India</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="New Zeland">New Zeland</option>
                                   <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                </select> 
                                </div>
                                <div class="col-md-6">
                                   <input type="text" name="city" class="forn-control input-sm" placeholder="city (optional)"> 
                                </div>
                            
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="submit" id="listing-btn" name="post" value ="Post" class="btn btn-primary btn-sm pull-right">
                             </div>
                             <br>
                             <br>
                        </div>
                        </form>

                    </div>      
                
             <!-- model body ends -->
                <br>
             </div>

        </div>
    </div>
    <!-- model ends --> 