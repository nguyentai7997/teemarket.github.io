// $(function() {
//
// 	var MyDateField = function(config) {
// 		jsGrid.Field.call(this, config);
// 	};
//
// 	MyDateField.prototype = new jsGrid.Field({
// 		sorter: function(date1, date2) {
// 			return new Date(date1) - new Date(date2);
// 		},
//
// 		filterTemplate: function() {
// 			return this._filterPicker = $("<input>").datepicker({ defaultDate: new Date() });
// 			// var now = new Date();
// 			// return new Date(now).toDateString();
// 			// this._fromPicker = $("<input>").datepicker({ defaultDate: now.setFullYear(now.getFullYear() - 1) });
// 			// return $("<div>").append(this._fromPicker);
// 		},
//
// 		itemTemplate: function(value) {
// 			return new Date(value).toDateString();
// 		},
//
// 		insertTemplate: function(value) {
// 			return this._insertPicker = $("<input>").datepicker({ defaultDate: new Date() });
// 		},
//
// 		editTemplate: function(value) {
// 			return this._editPicker = $("<input>").datepicker().datepicker("setDate", new Date(value));
// 		},
//
// 		insertValue: function() {
// 			return this._insertPicker.datepicker("getDate").toISOString();
// 		},
//
// 		editValue: function() {
// 			return this._editPicker.datepicker("getDate").toISOString();
// 		}
// 	});
//
// 	jsGrid.fields.myDateField = MyDateField;
//
// 	$("#orders").jsGrid({
// 		height: "600px",
// 		width: "100%",
//
// 		filtering: true,
// 		// inserting: true,
// 		editing: true,
// 		deleting:false,
// 		sorting: true,
// 		paging: true,
// 		autoload: true,
// 		pageSize: 10,
// 		pageButtonCount: 5,
//
// 		controller: {
// 			loadData: function(filter){
// 				return $.ajax({
// 					url: 'http://localhost:8012/teemarket/admin/get_orders',
// 					type: 'post',
// 					dataType: "json",
// 					data : {
// 						code: "nguyentai17admin"
// 					},
// 				});
// 			},
//
// 			updateItem: function(item){
// 				return $.ajax({
// 					type: "PUT",
// 					url: "fetch_data.php",
// 					data: item
// 				});
// 			},
// 		},
//
// 		fields: [
// 			{name: "Order ID", type: "number", align: "center"},
// 			{name: "Time", type: "myDateField", align: "center"},
// 			{name: "Campaign ID", type: "number", align: "center"},
// 			{name: "Email", type: "text", align: "center", width: 200},
// 			{name: "Country", type: "text", align: "center"},
// 			{name: "Items", type: "number", align: "center"},
// 			{name: "Base Cost", type: "number", align: "center"},
// 			{name: "Profit", type: "number", align: "center"},
// 			{name: "Flags", type: "text", align: "center"},
// 			{ type: "control" }
// 		]
// 	});
//
// });

// $(document).ready(function() {
//
// 	var table;
//
// 	$("#example").on("mousedown", "td .fa.fa-minus-square", function(e) {
// 		table.row($(this).closest("tr")).remove().draw();
// 	})
//
// 	$("#example").on('mousedown.edit', "i.fa.fa-pencil-square", function(e) {
//
// 		$(this).removeClass().addClass("fa fa-envelope-o");
// 		var $row = $(this).closest("tr").off("mousedown");
// 		var $tds = $row.find("td").not(':first').not(':last');
//
// 		$.each($tds, function(i, el) {
// 			var txt = $(this).text();
// 			$(this).html("").append("<input type='text' value='" + txt + "'>");
// 		});
//
// 	});
//
// 	$("#example").on('mousedown', "input", function(e) {
// 		e.stopPropagation();
// 	});
//
// 	$("#example").on('mousedown.save', "i.fa.fa-envelope-o", function(e) {
//
// 		$(this).removeClass().addClass("fa fa-pencil-square");
// 		var $row = $(this).closest("tr");
// 		var $tds = $row.find("td").not(':first').not(':last');
//
// 		$.each($tds, function(i, el) {
// 			var txt = $(this).find("input").val()
// 			$(this).html(txt);
// 		});
// 	});
//
//
// 	$("#example").on('mousedown', "#selectbasic", function(e) {
// 		e.stopPropagation();
// 	});
//
//
// 	var url = 'http://www.json-generator.com/api/json/get/ccTtqmPbkO?indent=2';
// 	table = $('#example').DataTable({
// 		ajax: url,
// 		rowReorder: {
// 			dataSrc: 'order',
// 			selector: 'tr'
// 		},
// 		columns: [{
// 			data: 'order'
// 		}, {
// 			data: 'place'
// 		}, {
// 			data: 'name'
// 		}, {
// 			data: 'delete'
// 		}]
// 	});
//
// 	// add row
// 	$('#addRow').click(function() {
// 		//t.row.add( [1,2,3] ).draw();
// 		var rowHtml = $("#newRow").find("tr")[0].outerHTML
// 		console.log(rowHtml);
// 		table.row.add($(rowHtml)).draw();
// 	});
// });

