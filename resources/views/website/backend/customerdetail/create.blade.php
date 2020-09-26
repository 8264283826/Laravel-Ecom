@extends('website.backend.layout.main')
@section('content')

     <div class="x_title">
                    <h2> Customer Details </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <!-- <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li> -->
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                 

   <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{route('customerdetail.store')}}" method="post">
             @csrf
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product-name">First Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="f_name" name='f_name' required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Last Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="l_name" name='l_name' required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                          </div>
                          
                          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Company Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="companie_name" name='companie_name' required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                          </div>

                          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Phone No <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="phone" name='phone' required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                          </div>


                          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">email No <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name='email' required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                          </div>


                          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Country  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="country" name='country' required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                          </div>

                          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Address1 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="address1" name='address1' required="required" class="form-control col-md-7 col-xs-12">
                          </textarea>
                        </div>
                          </div>

                          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Address2  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="address2" name='address2' required="required" class="form-control col-md-7 col-xs-12">
                          </textarea>
                        </div>
                          </div>

                          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Town No <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="town" name='town' required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                          </div>

                          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">District <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="district" name='district' required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                          </div>

                          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Post Code <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="post_code" name='post_code' required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                          </div>




                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Other Notes <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="other_notes" name='other_notes' required="required" class="form-control col-md-7 col-xs-12">
                          </textarea>
                        </div>
                      </div>
                     
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>

            
                    
@endsection

