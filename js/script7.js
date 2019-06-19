//all js 
function editinfo(id){
	   var geturl=$("#url_"+id).val();
	   var myurl =geturl+'/'+id;
	    var dataString = "id="+id;
	   //alert(myurl);
		 $.ajax({
		 type: "GET",
		 url: myurl,
		 data: dataString,
		 success: function(data) {
			 $('.editinfo').html(data);
			 $('#edit').modal('show');
			  $(".datepicker").datepicker({
				dateFormat: "dd-mm-yy"
			}); 
		 } 
	});
	}
