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
                تعديل المشروع
                </h3>
            </div>
        </div>

        <!--begin::Form-->
        <form action="{{route('pro.updateProject',$pro->id)}}" method="POST" class="kt-form kt-form--fit kt-form--label-right" enctype="multipart/form-data">
            @csrf

            <div class="kt-portlet__body">
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">اسم المشروع:</label>
                    <div class="col-lg-3">
                        <input type="text" name="projectName" class="form-control" value="{{$pro->compound}}" required>

                    </div>
                    <label class="col-lg-2 col-form-label">اسم المطور:</label>
                    <div class="col-lg-3">
                        <select class="form-control" name="developer" id="cars" required>
                            @foreach (DB::table('developers')->get() as $developer)
                                <option @if($pro->developer_id == $developer->id)  selected  @endif value="{{$developer->id}}">{{$developer->companyName}}</option>
                            @endforeach
                            
                        </select>

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">المساحه:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="number" name="projectSize" class="form-control" value="{{$pro->size}}" required>

                        </div>

                    </div>
                    <label class="col-lg-2 col-form-label">عدد الادوار بدون الارضي:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="number" name="floors" class="form-control" value="{{$pro->floors}}" required>

                        </div>

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label"> نوع المشروع:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <select class="form-control" name="projectType" required>
                                @foreach (DB::table('types')->get() as $type)
                                <option @if($pro->types_id == $type->id)  selected  @endif value="{{$type->id}}">{{$type->type}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <label class="col-lg-2 col-form-label">الفئه السعرية:</label>
                    <div class="col-lg-3">
                        <div class="kt-radio-inline">
                            <select class="form-control" name="category" required>
                                @foreach (DB::table('categories')->get() as $category)
                                <option @if($pro->category_id == $category->id)  selected  @endif value="{{$category->id}}"> {{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">تكاليف الصيانه:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="number" name="maintain" class="form-control" value="{{$pro->maintanence_fee}}" required>

                        </div>
                    </div>
                    <label class="col-lg-2 col-form-label">تكاليف النادي:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="number" name="club" class="form-control" value="{{$pro->club_fee}}" required>

                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">حاله المشروع:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <select  class="form-control" name="status" required>
                                @foreach (DB::table('statuses')->get() as $status)
                                <option @if($pro->status_id == $status->id)  selected  @endif value="{{$status->id}}">{{$status->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <label class="col-lg-2 col-form-label">تاريخ التسليم:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="date" name="date" class="form-control" value="{{$pro->delivery_date}}" required>

                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label"> مبلغ تحت الحساب:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="number" name="underpay" class="form-control" value="{{$pro->downpaynment}}" required>
                        </div>
                    </div>
                    <label class="col-lg-2 col-form-label">التسليم :</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="text" name="delivery" class="form-control" value="{{$pro->delivery}}" required>

                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label"> عدد السنوات:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="number" name="years" class="form-control" value="{{$pro->year}}" required>
                        </div>
                    </div>
                    <label class="col-lg-2 col-form-label"> العروض:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="text" name="offer" class="form-control" value="{{$pro->offers}}" required>

                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label"> نسبه الخصم للدفع الكاش:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="number" name="cashDiscount" class="form-control" value="{{$pro->cash_discount}}" required>
                        </div>
                    </div>
                    <label class="col-lg-2 col-form-label"> السياسه المتبعه:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="text" name="policy" class="form-control" value="{{$pro->politics}}" required>

                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">نسبه التحميل:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="number" name="loading" class="form-control" value="{{$pro->occupation}}" required>

                        </div>

                    </div>
                    <label class="col-lg-2 col-form-label"> تكاليف الركن:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="number" name="parking" class="form-control" value="{{$pro->parking_fee}}" required>

                        </div>

                    </div>
                    
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label"> الانتهاء:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="text" name="finishing" class="form-control" value="{{$pro->finishing}}" required>
                        </div>
                    </div>
                    <label class="col-lg-2 col-form-label"> مكان المشروع:</label>
                    <div class="col-lg-3">
                        <select class="form-control" name="placeId" required>
                            @foreach (DB::table('places')->get() as $place)
                                <option @if($pro->place_id == $place->id)  selected  @endif value="{{$place->id}}">{{$place->compname}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label"> الصوره الرئيسيه:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="file" name="image" class="form-control" >
                        </div>
                    </div>
                    <label class="col-lg-2 col-form-label"> الصور:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="file" name="images[]" class="form-control" multiple>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label"> لينك الفيديو الاول :</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="text" name="link1" class="form-control" value="{{$pro->link1}}" required>
                        </div>
                    </div>
                    <label class="col-lg-2 col-form-label"> لينك الفيديو الثانى:</label>
                    <div class="col-lg-3">
                        <div class="kt-input-icon">
                            <input type="text" name="link2" class="form-control" value="{{$pro->link2}}" required >
                        </div>
                    </div>
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
                                    <input type="radio" name="updated" @if($pro->updated == "true") checked="" @endif checked="" value="true"> نعم
                                    <span></span>
                                </label>
                                <label class="kt-radio kt-radio--solid">
                                    <input type="radio" name="updated" @if($pro->updated == "false") checked="" @endif value="false"> لا
                                    <span></span>
                                </label>
                            </div>

                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4">
                            <button type="submit" class="btn btn-success">تعديل</button>
                            <a class="btn btn-dark" href="{{route('pro.project')}}" role="button">رجوع</a>
                            <!-- <button type="reset" class="btn btn-secondary">Cancel</button> -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </form>
    </div>    

</div>
</div>
    <script src="{{ URL::asset('js/sweetalert2@11.js') }}"></script>
        <script src="{{ URL::asset('js/sweetalert2.all.js') }}"></script>
@endsection
