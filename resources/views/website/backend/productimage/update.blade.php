@extends('website.backend.layout.main')
@section('content')

     <div class="x_title">
                    <h2> Update Product Category </h2>
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
                 

   <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action=
   "{{route('productimage.update',$productimage->id) }}" method="POST">
   @method('PUT')
        @csrf

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Category <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select type="text" id="product_id" name='product_id' required="required" class="form-control col-md-7 col-xs-12">
                            @foreach($pro_img as $procat)

                            <option value="{{$procat->id}}" name="product_name">{{$procat->product_name}}</option>
                            @endforeach
                            
                          </select>
                        </div>
                      </div>
                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product-name">Image Title <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="image_title" name='image_title' required="required" placeholder="image_title" class="form-control col-md-7 col-xs-12" value="{{$productimage->image_title}}">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="img" name = 'image'>Image Upload <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="img" name='img'  class="form-control col-md-7 col-xs-12" onchange="fileSelect();" value="{{$productimage->image}}">
                        </div>
                      </div>
                         

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Update</button>
                        </div>
                      </div>

                    </form>


                    
@endsection

