@extends('layoutsadawe.admin')

@section('content')

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet p-5">
        <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
            <thead>
                <tr>
                    <th># </th>
                    <th>الاسم</th>
                    <th>الايميل</th>
                    <th>الهاتف</th>
                    <th>الرساله</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

@endsection
@section('js')
		<!--begin::Page Vendors(used by this page) -->
		
        <script src="{{URL::asset('assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
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
                    url:"{{ route('message.messageDatatable') }}",
                    data: function (d) {
                          d.name = $('#name').val();
                          d.owner= $('#owner').val();
                        }
                    },
			columns: [
                { data: 'id' },
                { data: 'name'},
                {data: 'phone'},
                {data: 'email'},
                {data: 'message'},
                
                
            ]
		});
        $('#name').keyup(function(){
                    table.DataTable().draw();
        });
        $('#owner').change(function(){
                    table.DataTable().draw();
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
