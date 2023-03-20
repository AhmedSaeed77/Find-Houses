@extends('layoutsadawe.admin')

@section('content')

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    اضافه تصنيف
                </h3>
            </div>
        </div>

        <!--begin::Form-->
        <form method="post" action="{{ route('cat.addCategory') }}" class="kt-form kt-form--fit kt-form--label-right">
            @csrf
            <div class="kt-portlet__body">
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label"> اسم التصنيف:</label>
                    <div class="col-lg-3">
                        <input type="text" name="categoryName" class="form-control" placeholder="اسم التصنيف" required>

                    </div>
                    <label class="col-lg-2 col-form-label"> الحد الادني:</label>
                    <div class="col-lg-3">
                        <input type="number" name="from" class="form-control" placeholder="الحد الادني" required>

                    </div>

                </div>
                <div class="form-group row">
                    
                        <label class="col-lg-2 col-form-label"> الحد الاقصي:</label>
                        <div class="col-lg-3">
                            <input type="number" name="to" class="form-control" placeholder="الحد الاقصي" required>
                </div>    
                </div>
                <div class="kt-portlet__foot kt-portlet__foot--fit-x">
                    <div class="kt-form__actions">
                        <div class="row">
                           <div class="col-lg-2"></div>
                            <div class="col-lg-5">
                                <button type="submit" class="btn btn-success">اضافه</button>
                                <a class="btn btn-dark" href="{{route('cat.category')}}" role="button">رجوع</a>
                                <!-- <button type="reset" class="btn btn-secondary">Cancel</button> -->
                            </div>
                        </div>
                    </div>
                </div>
        </form>

        <!--end::Form-->
    </div>
</div>
<div>
@endsection
