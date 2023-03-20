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
                تعديل الحاله
                </h3>
            </div>
        </div>

        <!--begin::Form-->
        <form action="{{route('status.updateStatus',$st->id)}}" method="POST" class="kt-form kt-form--fit kt-form--label-right">
            @csrf
    
            <div class="kt-portlet__body">
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">النوع :</label>
                    <div class="col-lg-3">
                        <input type="text" name="name" class="form-control" value="{{$st->name}}" required>
                    </div>
            </div>
            <div class="kt-portlet__foot kt-portlet__foot--fit-x">
                <div class="kt-form__actions">
                    <div class="row">
                        
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4">
                            <button type="submit" class="btn btn-success">تعديل</button>
                            <a class="btn btn-dark" href="{{route('status.status')}}" role="button">رجوع</a>
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
