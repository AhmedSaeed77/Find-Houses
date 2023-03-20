@extends('layoutsadawe.admin')

@section('content')

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet p-5" >
        <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
            <thead>
                <tr>
                    <th># </th>
                    <th>النوع </th>
                    <th>الاجراءات</th>
                </tr>
            </thead>
        </table>
        <div class="row">
            <div class="col-lg-10">
                <a class="btn btn-primary " href="{{ route('type.createType') }}"> اضافه نوع جديد </a>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
    <!--begin::Page Vendors(used by this page) -->

    <script src="{{ URL::asset('assets/vendors/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('js/sweetalert2@11.js') }}"></script>
    <script src="{{ URL::asset('js/sweetalert2.all.js') }}"></script>
    <script>
        var KTDatatablesDataSourceAjaxServer = function() {
            var initTable1 = function() {
                var table = $('#kt_table_1');

                // begin first table
                table.DataTable({
                    responsive: true,
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: "{{ route('type.typeDatatable') }}",
                        data: function(d) {
                            d.name = $('#name').val();
                            d.owner = $('#owner').val();
                        }
                    },
                    columns: [{
                            data: 'id'
                        },
                        {
                            data: 'type'
                        },
                        {
                            data: 'action'
                        },

                    ]
                });
                $('#name').keyup(function() {
                    table.DataTable().draw();
                });
                $('#owner').change(function() {
                    table.DataTable().draw();
                });
                $('#kt_table_1 tbody').on('click', '.delete', function() {
                    var value = $(this).attr("value");
                    console.log(value)
                    Swal.fire({
                        title: ' سيتم مسح النوع بكافة سنداتها ان وجد   ',

                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'تأكيد !'
                    }).then((result) => {

                        if (result.isConfirmed) {
                            console.log('done')
                            $.ajax({
                                type: 'post',
                                url: "{{ route('type.deleteType') }}",
                                data: {
                                    '_token': "{{ csrf_token() }}",
                                    'id': value,
                                },
                                success: (response) => {
                                    if (response) {
                                        Swal.fire({
                                            position: 'top-center',
                                            icon: 'success',
                                            title: 'تم مسح النوع بنجاح',
                                            showConfirmButton: false,
                                            timer: 1500
                                        })
                                        table.DataTable().draw();
                                    }
                                },
                                error: function(reject) {
                                    console.log(reject)
                                }

                            })

                        }
                    })
                    // console.log($(this).attr("value"));
                });

            };

            return {

                //main function to initiate the module
                init: function() {
                    initTable1();
                },

            };

        }();

        jQuery(document).ready(function() {
            KTDatatablesDataSourceAjaxServer.init();
        });
    </script>
@endsection
