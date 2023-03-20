@extends('layoutsadawe.admin')
@section('css')

<meta name="csrf-token" content="{{ csrf_token() }}" />


@endsection
@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

<div class="kt-portlet kt-portlet--mobile">

        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    اضافه مشروع جديد
                </h3>
            </div>
        </div>

        <!--begin::Form-->
        <form action="{{route('pro.addproject')}}" method="POST" class="kt-form kt-form--fit kt-form--label-right" enctype="multipart/form-data">
            @csrf
            <div class="kt-portlet__body">
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">اسم المشروع:</label>
                    <div class="col-lg-3">
                        <input type="text" name="projectName" class="form-control" placeholder="ادخل اسم المشروع" required>

                    </div>
                    <label class="col-lg-2 col-form-label">اسم المطور:</label>
                    <div class="col-lg-3">
                        <select class="form-control"  name="developer" required>
                            @foreach (DB::table('developers')->get() as $developer)
                                <option value="{{$developer->id}}">{{$developer->companyName}}</option>
                            @endforeach
                            
                        </select>

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">المساحه:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="number" name="projectSize" class="form-control" placeholder="ادخل مساحه المشروع" required>

                        </div>

                    </div>
                    <label class="col-lg-2 col-form-label">عدد الادوار بدون الارضي:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="number" name="floors" class="form-control" placeholder="ادخل عدد الادوار" required>

                        </div>

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label"> نوع المشروع:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <select class="form-control"  name="projectType" required>
                                @foreach (DB::table('types')->get() as $type)
                                <option value="{{$type->id}}">{{$type->type}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <label class="col-lg-2 col-form-label">الفئه السعرية:</label>
                    <div class="col-lg-3">
                        <div class="kt-radio-inline">
                            <select class="form-control"  name="category" required>
                                @foreach (DB::table('categories')->get() as $category)
                                <option value="{{$category->id}}"> {{ $category->name }} </option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">تكاليف الصيانه:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="number" name="maintain" class="form-control" placeholder="ادخل تكاليف الصيانه" required>

                        </div>
                    </div>
                    <label class="col-lg-2 col-form-label">تكاليف النادي:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="number" name="club" class="form-control" placeholder="ادخل تكاليف النادي " required>

                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">حاله المشروع:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <select class="form-control"  name="status" required>
                                @foreach (DB::table('statuses')->get() as $status)
                                <option value="{{$status->id}}">{{$status->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <label class="col-lg-2 col-form-label">تاريخ التسليم:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="date" name="date" class="form-control" placeholder="ادخل تاريخ التسليم" required>

                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label"> مبلغ تحت الحساب:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="number" name="underpay" class="form-control" placeholder="ادخل المبلغ تحت الحساب ">
                        </div>
                    </div>
                    <label class="col-lg-2 col-form-label">التسليم :</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="text" name="delivery" class="form-control" placeholder="ادخل قيمه التسليم " required>

                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label"> عدد السنوات:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="number" name="years" class="form-control" placeholder="ادخل عدد السنوات " required>
                        </div>
                    </div>
                    <label class="col-lg-2 col-form-label"> العروض:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="text" name="offer" class="form-control" placeholder="ادخل العروض" required>

                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label"> نسبه الخصم للدفع الكاش:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="number" name="cashDiscount" class="form-control" placeholder="نسبه الخصم للدفع الكاش" required>
                        </div>
                    </div>
                    <label class="col-lg-2 col-form-label"> السياسه المتبعه:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="text" name="policy" class="form-control" placeholder=" السياسه المتبعه" required>

                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">نسبه التحميل:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="number" name="loading" class="form-control" placeholder="ادخل نسبه التحميل" required>

                        </div>

                    </div>
                    <label class="col-lg-2 col-form-label"> تكاليف الركن:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="number" name="parking" class="form-control" placeholder="ادخل تكاليف الركن" required>

                        </div>

                    </div>
                    
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label"> الانتهاء:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="text" name="finishing" class="form-control" placeholder=" ادخل الانتهاء " required>

                        </div>

                    </div>
                    <label class="col-lg-2 col-form-label"> مكان المشروع:</label>
                    <div class="col-lg-3">
                        <select class="form-control"  name="placeId" required>
                            @foreach (DB::table('places')->get() as $place)
                                <option value="{{$place->id}}">{{$place->compname}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label"> الصوره:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="file" name="image" class="form-control" placeholder="  ادخل الصوره " required>
                        </div>
                    </div>
                </div>
            
            <div class="kt-portlet__foot kt-portlet__foot--fit-x">
                <div class="kt-form__actions">
                    <div class="row">
                        <label class="col-lg-2 col-form-label">معدل:</label>
                        <div class="col-lg-3">
                            <div class="kt-radio-inline">
                                <label class="kt-radio kt-radio--solid">
                                    <input type="radio" name="updated" checked="" value="true"> نعم
                                    <span></span>
                                </label>
                                <label class="kt-radio kt-radio--solid">
                                    <input type="radio" name="updated" value="false"> لا
                                    <span></span>
                                </label>
                            </div>

                        </div>

                        <div class="col-lg-2"></div>
                        <div class="col-lg-4">
                            <button type="submit" class="btn btn-success">اضافه</button>
                            <a class="btn btn-dark" href="{{route('pro.project')}}" role="button">رجوع</a>
                            <!-- <button type="reset" class="btn btn-secondary">Cancel</button> -->
                        </div>
                    </div>
                    </div>                    
                </div>
            </div>
            
        </form>
        
              
        <!--end::Form-->
    </div>
    </div>

</div>

    <script src="{{ URL::asset('js/sweetalert2@11.js') }}"></script>
        <script src="{{ URL::asset('js/sweetalert2.all.js') }}"></script>
@endsection
