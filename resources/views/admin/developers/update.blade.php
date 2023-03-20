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
                تعديل مطور
                </h3>
            </div>
        </div>

        <!--begin::Form-->
        <form action="{{route('dev.updateDeveloper',$dev->id)}}" method="POST" class="kt-form kt-form--fit kt-form--label-right" enctype="multipart/form-data">
            @csrf

            <div class="kt-portlet__body">
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label"> اسم الشركه:</label>
                    <div class="col-lg-3">
                        <input type="text" name="companyName" class="form-control" value="{{$dev->companyName}}" required>

                    </div>
                    <label class="col-lg-2 col-form-label">  اسم جهات الاتصال:</label>
                    <div class="col-lg-3">
                        <input type="text" name="name" class="form-control" value="{{$dev->name}}" required>

                    </div>

                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">  رقم الهاتف:</label>
                    <div class="col-lg-3">
                        <input type="number" name="phone" class="form-control" value="{{$dev->phone}}" required>
                    </div>    
                    <label class="col-lg-2 col-form-label"> الصوره او اللوجو:</label>
                    <div class="col-lg-3">
                        <input type="file" name="image" class="form-control" placeholder=" الصوره او اللوجو " >
                    </div> 
                </div>
            <div class="kt-portlet__foot kt-portlet__foot--fit-x">
                <div class="kt-form__actions">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-success">تعديل</button>
                            <a class="btn btn-dark" href="{{route('dev.developer')}}" role="button">رجوع</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </form>
    </div>    
</div>
</div>
@endsection
