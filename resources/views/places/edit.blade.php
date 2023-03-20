@extends('layoutsadawe.admin')


@section('content')
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-lg-12">

                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            
                        </div>
                    </div>

                    <!--begin::Form-->
                    <form class="kt-form kt-form--label-right" action="{{route('place.update')}}" method="post" enctype="multipart/form-data">
                             {{ csrf_field() }}   
                          <div class="kt-portlet__body">
                          <input type="hidden"  value='{{$place->id}}' class="form-control" name='id'>
                          <div class="form-group row">
                             <div class='col-md-6'>     
                           <div class="form-group row">
                                <div class="col-lg-12">
                                    <label> Name:</label>
                                    <input type="text"  value='{{$place->compname}}' class="form-control" placeholder="Enter name of place" name='name'>
                                    </div>
                                    </div>
                                  
                              
                              <div class="form-group row">
                              <div class="col-lg-12">
                                
                                    <label>image </label>

                                    <input type='file'   name='image' class="form-control">
                                </div>
                                </div>
                                </div>
                                <img class='col-md-6' src='{{asset($place->compimage)}}' width='200px' height='200px'>
                         
                            </div>
                        </div>
                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                         </div>
                                  
                                </div>
                            </div>
                        </div>
                    </form>

                    <!--end::Form-->
                </div>

                <!--end::Portlet-->

                <!--begin::Portlet-->
                <div class="kt-portlet">
                   

                    <!--begin::Form-->
                  

                    <!--end::Form-->
                </div>

                <!--end::Portlet-->
            </div>
        </div>
    </div>
@endsection
