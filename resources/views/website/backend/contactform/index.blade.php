@extends('website.backend.layout.main')
@section('content')
 
 <div class="col-md-12 col-sm-12 col-xs-12">
                

 <div class="x_content">
                   
                    
                    <div id="datatable-responsive_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                    <div class="row">
                    <a href="{{route('contactform.create')}}" type="button" class="btn btn-info" style="float: right;">Add In ContactFrom</a>
                      <div class="col-sm-6">
                     
                      <div class="dataTables_length" id="datatable-responsive_length"><label>Show <select name="datatable-responsive_length" aria-controls="datatable-responsive" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="datatable-responsive_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable-responsive"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline collapsed" cellspacing="0" width="100%" role="grid" aria-describedby="datatable-responsive_info" style="width: 100%;">
                      <thead>
                        <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 71px;" aria-sort="ascending" aria-label="First name: activate to sort column descending">Message Form
                          </th>
                          <th class="sorting_asc" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 71px;" aria-sort="ascending" aria-label="First name: activate to sort column descending"> Name
                          </th>
                           
                          <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 70px;" aria-label="Last name: activate to sort column ascending">Email
                          </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 70px;" aria-label="Last name: activate to sort column ascending">Subject
                          </th>
                            
                          <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 155px;" aria-label="Position: activate to sort column ascending">Action
                          </th>
                         </tr>
                      </thead>
                      <tbody> 
                       @foreach($contactForm as $procat)
                          <tr role="row">
                          <td >{{$procat->message_form}}</td>
                          <td>{{$procat->name}}</td>
                          <td>{{$procat->email}}</td>
                          <td>{{$procat->status}}</td>
                          <td>{{$procat->subject}}</td>

                          <td>
                           
                           <form  method = 'POST' action="{{route('contactform.destroy',$procat->id)}}">
                            <a class="btn btn-app" href="{{route('contactform.edit',$procat->id)}}" style="color: red">
                            <i class="fa fa-edit" style="color: blue">
                              
                            </i>
                            Edit
                          </a>
                        
                         
                            @csrf
                          <button class="btn btn-app" href = "{{route('contactform.destroy',$procat->id)}}"style="color: red">
                            @method('DELETE')
                            <i class="fa fa-trash" style="color: blue">
                              
                            </i>
                            Delete
                          </button>
                          </form>
                        </td>
                         
                        </tr>
                          @endforeach
                      </tbody>
                    </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="datatable-responsive_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="datatable-responsive_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="datatable-responsive_previous"><a href="#" aria-controls="datatable-responsive" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="datatable-responsive" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="datatable-responsive" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="datatable-responsive" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="datatable-responsive" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="datatable-responsive" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="datatable-responsive" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="datatable-responsive_next"><a href="#" aria-controls="datatable-responsive" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
          
          
                  </div>
                
              </div>

@endsection