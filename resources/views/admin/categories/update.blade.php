@extends('layoutsadawe.admin')
@section('css')

<meta name="csrf-token" content="{{ csrf_token() }}" />


@endsection
@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                تعديل التصنيف
                </h3>
            </div>
        </div>

        <!--begin::Form-->
        <form action="{{route('cat.updateCategory',$cat->id)}}" method="POST" class="kt-form kt-form--fit kt-form--label-right">
            @csrf

            <div class="kt-portlet__body">
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label"> اسم التصنيف:</label>
                    <div class="col-lg-3">
                        <input type="text" name="categoryName" class="form-control" value=" {{$cat->name}}" required>

                    </div>
                    <label class="col-lg-2 col-form-label"> الحد الادني:</label>
                    <div class="col-lg-3">
                        <input type="number" name="from" class="form-control" value="{{$cat->from}}" required>

                    </div>

                </div>
                <div class="form-group row">
                    
                        <label class="col-lg-2 col-form-label"> الحد الاقصي:</label>
                        <div class="col-lg-3">
                            <input type="number" name="to" class="form-control" value="{{$cat->to}}" required>

                    
                </div>    
                </div>
            <div class="kt-portlet__foot kt-portlet__foot--fit-x">
                <div class="kt-form__actions">
                    <div class="row">
                        
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4">
                            <button type="submit" class="btn btn-success">تعديل</button>
                            <a class="btn btn-dark" href="{{route('cat.category')}}" role="button">رجوع</a>
                            <!-- <button type="reset" class="btn btn-secondary">Cancel</button> -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </form>
    </div>    
</div>
</div>
@endsection
