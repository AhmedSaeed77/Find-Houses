@extends('layoutsadawe.admin')


@section('css')

<meta name="csrf-token" content="{{ csrf_token() }}" />


@endsection

@section('content')

		<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

							<div class="kt-portlet kt-portlet--mobile">

								<div class="kt-portlet__head kt-portlet__head--lg">
									<div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
										<h3 class="kt-portlet__head-title">
											Places
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<div class="kt-portlet__head-actions">
												<div class="dropdown dropdown-inline">
													<button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="la la-download"></i> Export
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<ul class="kt-nav">
															<li class="kt-nav__section kt-nav__section--first">
																<span class="kt-nav__section-text">Choose an option</span>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon la la-print"></i>
																	<span class="kt-nav__link-text">Print</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon la la-copy"></i>
																	<span class="kt-nav__link-text">Copy</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon la la-file-excel-o"></i>
																	<span class="kt-nav__link-text">Excel</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon la la-file-text-o"></i>
																	<span class="kt-nav__link-text">CSV</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon la la-file-pdf-o"></i>
																	<span class="kt-nav__link-text">PDF</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
												&nbsp;
												<a href="#" class="btn btn-brand btn-elevate btn-icon-sm">
													<i class="la la-plus"></i>
													New Record
												</a>
											</div>
										</div>
									</div>
								</div>

								<div class="kt-portlet__body">
                                     <div class="col-6">
                                        <label><strong>  بحث بالاسم     :</strong></label>
                                        <input type="text" id="name" class="form-control"    >
                                    </div>
									<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr>
												<th> ID</th>
												<th> name </th>
												<th>email </th>
												<th>action</th>
											</tr>
										</thead>
									</table>
								</div>
							</div>
						</div>
@endsection

@section('js')
		<!--begin::Page Vendors(used by this page) -->
		<script src="{{URL::asset('assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
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
                    url:"{{ route('datatable') }}",
                    data: function (d) {
                          d.name = $('#name').val()
                        }
                    },
			columns: [
                { data: 'id' },
                { data: 'name' },
                { data: 'email' },
                { data: 'action' }
            ]
		});
        $('#name').keyup(function(){
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
