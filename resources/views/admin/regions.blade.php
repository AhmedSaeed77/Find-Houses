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
                                2 Columns Form Layout
                            </h3>
                        </div>
                    </div>

                    <!--begin::Form-->
                    <form class="kt-form kt-form--label-right">
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
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <button type="reset" class="btn btn-primary">Save</button>
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
                    <form class="kt-form kt-form--fit kt-form--label-right">
                        <div class="kt-portlet__body">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Full Name:</label>
                                <div class="col-lg-3">
                                    <input type="email" class="form-control" placeholder="Enter full name">
                                    <span class="form-text text-muted">Please enter your full name</span>
                                </div>
                                <label class="col-lg-2 col-form-label">Contact Number:</label>
                                <div class="col-lg-3">
                                    <input type="email" class="form-control" placeholder="Enter contact number">
                                    <span class="form-text text-muted">Please enter your contact number</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Address:</label>
                                <div class="col-lg-3">
                                    <div class="kt-input-icon">
                                        <input type="text" class="form-control" placeholder="Enter your address">
                                        <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i
                                                    class="la la-map-marker"></i></span></span>
                                    </div>
                                    <span class="form-text text-muted">Please enter your address</span>
                                </div>
                                <label class="col-lg-2 col-form-label">Postcode:</label>
                                <div class="col-lg-3">
                                    <div class="kt-input-icon">
                                        <input type="text" class="form-control" placeholder="Enter your postcode">
                                        <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i
                                                    class="la la-bookmark-o"></i></span></span>
                                    </div>
                                    <span class="form-text text-muted">Please enter your postcode</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Group:</label>
                                <div class="col-lg-3">
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
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__foot kt-portlet__foot--fit-x">
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-10">
                                        <button type="reset" class="btn btn-success">Submit</button>
                                        <button type="reset" class="btn btn-secondary">Cancel</button>
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
                                3 Columns Form Layout
                            </h3>
                        </div>
                    </div>

                    <!--begin::Form-->
                    <form class="kt-form kt-form--label-right">
                        <div class="kt-portlet__body">
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>Full Name:</label>
                                    <input type="email" class="form-control" placeholder="Enter full name">
                                    <span class="form-text text-muted">Please enter your full name</span>
                                </div>
                                <div class="col-lg-4">
                                    <label class="">Email:</label>
                                    <input type="email" class="form-control" placeholder="Enter email">
                                    <span class="form-text text-muted">Please enter your email</span>
                                </div>
                                <div class="col-lg-4">
                                    <label>Username:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="la la-user"></i></span></div>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <span class="form-text text-muted">Please enter your username</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label class="">Contact:</label>
                                    <input type="email" class="form-control" placeholder="Enter contact number">
                                    <span class="form-text text-muted">Please enter your contact</span>
                                </div>
                                <div class="col-lg-4">
                                    <label class="">Fax:</label>
                                    <div class="kt-input-icon kt-input-icon--right">
                                        <input type="text" class="form-control" placeholder="Fax number">
                                        <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i
                                                    class="la la-info-circle"></i></span></span>
                                    </div>
                                    <span class="form-text text-muted">Please enter fax</span>
                                </div>
                                <div class="col-lg-4">
                                    <label>Address:</label>
                                    <div class="kt-input-icon kt-input-icon--right">
                                        <input type="text" class="form-control" placeholder="Enter your address">
                                        <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i
                                                    class="la la-map-marker"></i></span></span>
                                    </div>
                                    <span class="form-text text-muted">Please enter your address</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label class="">Postcode:</label>
                                    <div class="kt-input-icon kt-input-icon--right">
                                        <input type="text" class="form-control" placeholder="Enter your postcode">
                                        <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i
                                                    class="la la-bookmark-o"></i></span></span>
                                    </div>
                                    <span class="form-text text-muted">Please enter your postcode</span>
                                </div>
                                <div class="col-lg-4">
                                    <label class="">User Group:</label>
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
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-8">
                                        <button type="reset" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-secondary">Cancel</button>
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
                                3 Columns Horizontal Form Layout
                            </h3>
                        </div>
                    </div>

                    <!--begin::Form-->
                    <form class="kt-form kt-form--label-right">
                        <div class="kt-portlet__body">
                            <div class="form-group row form-group-marginless kt-margin-t-20">
                                <label class="col-lg-1 col-form-label">Full Name:</label>
                                <div class="col-lg-3">
                                    <input type="email" class="form-control" placeholder="Full name">
                                    <span class="form-text text-muted">Please enter your full name</span>
                                </div>
                                <label class="col-lg-1 col-form-label">Email:</label>
                                <div class="col-lg-3">
                                    <input type="email" class="form-control" placeholder="Email">
                                    <span class="form-text text-muted">Please enter your email</span>
                                </div>
                                <label class="col-lg-1 col-form-label">Username:</label>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="la la-user"></i></span></div>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <span class="form-text text-muted">Please enter your username</span>
                                </div>
                            </div>
                            <div
                                class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit">
                            </div>
                            <div class="form-group row form-group-marginless">
                                <label class="col-lg-1 col-form-label">Contact:</label>
                                <div class="col-lg-3">
                                    <input type="email" class="form-control" placeholder="Enter contact number">
                                    <span class="form-text text-muted">Please enter your contact</span>
                                </div>
                                <label class="col-lg-1 col-form-label">Fax:</label>
                                <div class="col-lg-3">
                                    <div class="kt-input-icon">
                                        <input type="text" class="form-control" placeholder="Fax number">
                                        <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i
                                                    class="la la-info-circle"></i></span></span>
                                    </div>
                                    <span class="form-text text-muted">Please enter fax</span>
                                </div>
                                <label class="col-lg-1 col-form-label">Address:</label>
                                <div class="col-lg-3">
                                    <div class="kt-input-icon">
                                        <input type="text" class="form-control" placeholder="Enter your address">
                                        <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i
                                                    class="la la-map-marker"></i></span></span>
                                    </div>
                                    <span class="form-text text-muted">Please enter your address</span>
                                </div>
                            </div>
                            <div
                                class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit">
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-1 col-form-label">Postcode:</label>
                                <div class="col-lg-3">
                                    <div class="kt-input-icon">
                                        <input type="text" class="form-control" placeholder="Enter your postcode">
                                        <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i
                                                    class="la la-bookmark-o"></i></span></span>
                                    </div>
                                    <span class="form-text text-muted">Please enter your postcode</span>
                                </div>
                                <label class="col-lg-1 col-form-label">User Group:</label>
                                <div class="col-lg-3">
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
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-lg-5"></div>
                                    <div class="col-lg-7">
                                        <button type="reset" class="btn btn-brand">Submit</button>
                                        <button type="reset" class="btn btn-secondary">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!--end::Form-->
                </div>

                <!--end::Portlet-->
            </div>
        </div>
    </div>
@endsection
