@extends('layoutsadawe.admin')


@section('content')
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-lg-12">

                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                fill this fields with compound data
                            </h3>
                        </div>
                    </div>

                    <!--begin::Form-->
                    <form class="kt-form kt-form--label-right" action="{{route('place.store')}}" method="post" enctype="multipart/form-data">
                             {{ csrf_field() }}   
                          <div class="kt-portlet__body">
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Full Name:</label>
                                    <input type="email" class="form-control" placeholder="Enter full name">
                                    <span class="form-text text-muted">Please enter your full name</span>
                                </div>
                                <div class="col-lg-6">
                                    <label class="">Contact Number:</label>
                                    <input type="email" class="form-control" placeholder="Enter contact number">
                                    <span class="form-text text-muted">Please enter your contact number</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Address:</label>
                                    <div class="kt-input-icon">
                                        <input type="text" class="form-control" placeholder="Enter your address">
                                        <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i
                                                    class="la la-map-marker"></i></span></span>
                                    </div>
                                    <span class="form-text text-muted">Please enter your address</span>
                                </div>
                                <div class="col-lg-6">
                                    <label class="">Postcode:</label>
                                    <div class="kt-input-icon">
                                        <input type="text" class="form-control" placeholder="Enter your postcode">
                                        <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i
                                                    class="la la-bookmark-o"></i></span></span>
                                    </div>
                                    <span class="form-text text-muted">Please enter your postcode</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>User Group:</label>
                                    <div class="kt-radio-inline">
                                        <label class="kt-radio kt-radio--solid">
                                            <input type="radio" name="example_2" checked value="2"> Sales Person
                                            <span></span>
                                        </label>
                                        <label class="kt-radio kt-radio--solid">
                                            <input type="radio" name="example_2" value="2"> Customer
                                            <span></span>
                                        </label>
                                    </div>
                                    <span class="form-text text-muted">Please select user group</span>
                                   <hr>
                                    <label>image of compound</label>
                                    <input type='file' name='image' class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="reset" class="btn btn-secondary">Cancel</button>
                                    </div>
                                    <div class="col-lg-6 kt-align-right">
                                        <button type="reset" class="btn btn-danger">Delete</button>
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
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                2 Columns Horizontal Form Layout
                            </h3>
                        </div>
                    </div>

                    <!--begin::Form-->
                  

                    <!--end::Form-->
                </div>

                <!--end::Portlet-->
            </div>
        </div>
    </div>
@endsection
