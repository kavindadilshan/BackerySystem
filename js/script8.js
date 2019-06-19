//all js 
function editunit(unitid){
	   var myurl =baseurl+'units/unitmeasurement/updateunitfrm/'+unitid;
	    var dataString = "unitid="+unitid;
	   //alert(myurl);
		 $.ajax({
		 type: "GET",
		 url: myurl,
		 data: dataString,
		 success: function(data) {
			 $('.editunit').html(data);
			 $('#edit').modal('show');
		 } 
	});
	}
function editingredient(inid){
	   var myurl =baseurl+'units/ingradient/updateintfrm/'+inid;
	    var dataString = "unitid="+inid;
	   //alert(myurl);
		 $.ajax({
		 type: "GET",
		 url: myurl,
		 data: dataString,
		 success: function(data) {
			 $('.editunit').html(data);
			 $('#edit').modal('show');
		 } 
	});
	}		