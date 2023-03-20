@extends('layoutsadawe.admin')

@section('content')
<div id="newtype">
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

<div class="kt-portlet kt-portlet--mobile">
<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                اضافه نوع
            </h3>
        </div>
    </div>

    <!--begin::Form-->
    <form id="newlocation">
        @csrf
        <div class="kt-portlet__body">
            <div class="form-group row">
                <label class="col-lg-2 col-form-label"> النوع:</label>
                <div class="col-lg-3">
                    <input type="text" v-model="typeName" name="typeName" class="form-control" placeholder="النوع" >
                </div>
            </div>
        <div class="kt-portlet__foot kt-portlet__foot--fit-x">
            <div class="kt-form__actions">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-10">
                        <button  @click="saveData" type="submit" class="btn btn-success">اضافه</button>
                        <a class="btn btn-dark" href="{{route('type.type')}}" role="button">رجوع</a>
                        <!-- <button type="reset" class="btn btn-secondary">Cancel</button> -->
                    </div>
                </div>
            </div>
        </div>
    </form>
    
    <!--end::Form-->
</div>
</div>
</div>
</div>
@endsection

@section('js')
<script type="JavaScript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js"></script>
<script src="{{ URL::asset('assets/js/table-data.js') }}"></script>
    <!--Internal  Datepicker js -->
    <script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <!-- Internal Select2 js-->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!-- Internal Modal js-->
    <script src="{{ URL::asset('assets/js/modal.js') }}"></script>
    <script src="{{ URL::asset('assets/js/form-elements.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="app.js"></script>

@include('vue')
        <script>
                content = new Vue({
                'el': '#newtype',
                data: {
                    typeName: '',
                    en: true,
                    fr: false,
                    load: false,
                    Count: 0,
                },
                methods: {
                    validation: function() {

                    },
                    async saveData(e) {
                        e.preventDefault();
                        this.error = []
                            this.validation(this.typeName , '    عنوان المنطه مطلوب   ');
                            //this.validation(this.image , '    عنوان المنطقه مطلوب   ');
                            
                            if (this.error.length !== 0) 
                            {
                                return false
                            }
                        let formData = new FormData(document.getElementById('newlocation'));
                        Swal.showLoading();
                        data = await adawe('{{ route('type.addType') }}' , formData);
                    //    let result = await axios.post("{{ route('type.addType') }}",formData)
                    //     console.log(result)
                    //     const  ad = new promise((res , rej)=>{
                    //             axios.post(url, data)
                    //     });
                       
                    }
                }
});
    </script>
@endsection
