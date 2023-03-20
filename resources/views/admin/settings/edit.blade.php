@extends('layoutsadawe.admin')

@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">


    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h1>
                    تعديل اعدادات الموقع 
                </h1>
            </div>
        </div>
        <!--begin::Form-->
        @foreach( \App\Models\Setting::limit(1)->get() as $set)
        <form method="post" action="{{ route('setting.editsetting',$set->id) }}" class="kt-form kt-form--fit kt-form--label-right" enctype="multipart/form-data">
            @csrf
            <div class="kt-portlet__body">
                <div class="form-group row">
                    <label class="col-lg- col-form-label"> الاسم  :</label>
                    <div class="col-lg">
                        <input type="text" name="name" class="form-control" value="{{ $set->name }}" required>
                    </div>
                    <label class="col-lg- col-form-label"> الايميل  :</label>
                    <div class="col-lg">
                        <input type="email" name="email" class="form-control" value="{{ $set->email }}" required>
                    </div>
                </div>   
            </div>
            <div class="kt-portlet__body">
                <div class="form-group row">
                    <label class="col-lg- col-form-label">  الاهداف:</label>
                    <div class="col-lg">
                        <textarea  class="form-control" name="goal"  rows="3"> {{ $set->goals }}  </textarea>
                    </div>
                    <label class="col-lg- col-form-label"> الموقع :</label>
                    <div class="col-lg">
                        <input type="text" name="site" class="form-control" value="{{ $set->site }}" required>
                    </div>
                    
                </div>   
            </div>
            <div class="kt-portlet__body">
                <div class="form-group row">
                    <label class="col-lg- col-form-label"> نبذه   :</label>
                    <div class="col-lg">
                        <textarea  class="form-control" name="brief"  rows="3"> {{ $set->Brief }}  </textarea>
                    </div>
                    
                    <label class="col-lg- col-form-label"> انستجرام :</label>
                    <div class="col-lg">
                        <input type="text" name="insta" class="form-control" value="{{ $set->insta }}" required>
                    </div>
                </div>   
            </div>
           
            <div class="kt-portlet__body">
                <div class="form-group row">
                    <label class="col-lg- col-form-label"> الرساله :</label>
                    <div class="col-lg">
                        <textarea  class="form-control" name="message"  rows="3"> {{ $set->message }}  </textarea>
                    </div>
                    <label class="col-lg- col-form-label"> فيس بوك :</label>
                    <div class="col-lg">
                        <input type="text" name="facebook" class="form-control" value="{{ $set->facebook }}" required>
                    </div>
                </div>   
            </div>
           
            <div class="kt-portlet__body">
                <div class="form-group row">
                <label class="col-lg- col-form-label"> الرؤيه :</label>
                    <div class="col-lg">
                        <textarea  class="form-control" name="vision"  rows="3"> {{ $set->vision }}  </textarea>
                    </div>
                    <label class="col-lg- col-form-label"> لينكد ان :</label>
                    <div class="col-lg">
                        <input type="text" name="linkedin" class="form-control" value="{{ $set->linkedin }}" required>
                    </div>
                </div>   
            </div>

            <div class="kt-portlet__body">
                <div class="form-group row">
                    
                <label class="col-lg- col-form-label"> العنوان :</label>
                    <div class="col-lg">
                        <textarea  class="form-control" name="address"  rows="3"> {{ $set->address }}  </textarea>
                    </div>
                    <label class="col-lg- col-form-label"> واتس اب :</label>
                    <div class="col-lg">
                        <input type="text" name="whatsapp" class="form-control" value="{{ $set->whatsapp }}" required>
                    </div>
                </div>   
            </div>
           
            <div class="kt-portlet__foot kt-portlet__foot--fit-x">
                <div class="kt-form__actions">
                    <div class="row">
                        
                            <div class="m-auto">
                                <button type="submit" class="btn btn-success px-5 h1">تعديل</button>
                                <!-- <a class="btn btn-dark" href="{{route('place.places')}}" role="button">رجوع</a> -->
                                <!-- <button type="reset" class="btn btn-secondary">Cancel</button> -->
                            </div>
                        </div>
                    </div>
                </div>
        </form>
        @endforeach
        <!--end::Form-->
    </div>
</div>

@endsection
