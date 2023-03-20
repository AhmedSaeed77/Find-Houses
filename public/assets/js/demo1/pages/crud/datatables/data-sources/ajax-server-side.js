"use strict";
var KTDatatablesDataSourceAjaxServer = function() {

	var initTable1 = function() {
        var table = $('#kt_table_1');

		// begin first table
		table.DataTable({
            responsive: true,
			processing: true,
			serverSide: true,
            ajax: 'http://127.0.0.1:8000/userss',
			columns: [
                { data: 'id' },
                { data: 'name' },
                { data: 'email' },
                { data: 'action' }
            ]
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
