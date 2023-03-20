<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<div class="card" style="width: 18rem;">
{{$places}}
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="/add" class="btn btn-primary">add new place</a>
    <a href='/edit/1' class="btn btn-primary"><i class="fa fa-edit" style="font-size:24px"></i></a>
    <a href='/delete/2' class="btn btn-primary"><i class="material-icons">delete</i></a>
 
  </div>
</div> -->
@extends('layoutsadawe.admin')


@section('content')

	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="alert alert-light alert-elevate" role="alert">
								
							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head kt-portlet__head--lg">
									<div class="kt-portlet__head-label">
										
										<h3 class="kt-portlet__head-title">
											Places
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<div class="kt-portlet__head-actions">
												<div class="dropdown dropdown-inline">
													
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
												<a href="{{route('place.addplace')}}" class="btn btn-brand btn-elevate btn-icon-sm">
													<i class="la la-plus"></i>
													New Place
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">

									<!--begin: Datatable -->
									<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr>
												<th>Name</th>
											
												<th class='text-center'>Actions</th>
											</tr>
										</thead>
										<tbody>
                                        @foreach($places as $place)
                                        <tr>
                                            <td>
                                                {{$place->compname}}
                                            </td>
                                            <td >
                                                <div class='row text-center'>
                                                <a class='col-md-6' href='{{route('place.edit',$place->id)}}'>edit</a>
                                                <a  class='col-md-3' href='{{route('place.delete',$place->id)}}'>delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
										</tbody>
									</table>

									<!--end: Datatable -->
								</div>
							</div>
						</div>

@endsection

@section('js')


<script>

  // datasource definition
$(function() {
    var table = $('#kt_table_1').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url:"{{ route('users') }}",
                    data: function (d) {
                        }
                    },
                columns: [
                    // {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {
                        data: 'id',
                        name: 'id',
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    }
                ]
            });


    // var datatable = $('#kt_table_1').KTDatatable({
    //       pageSize: 10,
    //         serverPaging: true,
    //         serverFiltering: true,
    //         serverSorting: true,
    //      ajax: {
    //             url: '{{ route('users') }}',
    //             map: function(raw) {
    //             // sample data mapping
    //             var dataSet = raw;
    //             if (typeof raw.data !== 'undefined') {
    //                 dataSet = raw.data;
    //             }
    //             return dataSet;
    //             },
    //         },




    //     // layout definition
    //     layout: {
    //         scroll: false,
    //         footer: false,
    //     },

    //     // column sorting
    //     sortable: true,

    //     pagination: true,

    //     search: {
    //         input: $('#generalSearch'),
    //     },

    //     // columns definition
    //     columns: [
    //         {
    //             data: 'id',
    //             name: 'id',
    //         },
    //         {
    //             data: 'action',
    //             name: 'action',
    //         }
    //         ],

    //     });
});
<script>
@endsection
