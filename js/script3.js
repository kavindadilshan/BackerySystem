//all js 
function itemlist(){
	   var geturl=$("#url").val();
	    var id=$("#catid").val();
	   var myurl =geturl;
	    var dataString = "id="+id;
	   //alert(myurl);
		 $.ajax({
		 type: "POST",
		 url: myurl,
		 data: dataString,
		 success: function(data) {
			 $('.iteminfo').html(data);
			 $('#items').modal('show');
		 } 
	});
	}
	


	
function addfoodtocart(pid,id){
		 var geturl=$("#carturl").val();
	     var itemname=$("#itemname_"+id).val();
		 var sizeid=$("#sizeid_"+id).val();
		 var varientname=$("#size_"+id).val();
		 var qty=$("#itemqty_"+id).val();
		 var price=$("#itemprice_"+id).val();
		 var catid=$("#catid").val();
		 var updateid=$("#updateid").val();
	     var myurl =geturl;
	 if(updateid==''){
	var dataString = "pid="+pid+'&itemname='+itemname+'&varientname='+varientname+'&qty='+qty+'&price='+price+'&catid='+catid+'&sizeid='+sizeid;
	 }
	 else{
	var dataString = "pid="+pid+'&itemname='+itemname+'&varientname='+varientname+'&qty='+qty+'&price='+price+'&catid='+catid+'&sizeid='+sizeid+'&orderid='+updateid;
		 }
		  $.ajax({
		 	 type: "POST",
			 url: myurl,
			 data: dataString,
			 success: function(data) {
				  if(updateid==''){
				 	$('#cartlist').html(data);
					var tax=$('#tvat').val();
					var discount=$('#tdiscount').val();
					var tgtotal=$('#tgtotal').val();
					$('#calvat').text(tax);
					$('#invoice_discount').val(discount);
					$('#caltotal').text(tgtotal);
					$('#grandtotal').val(tgtotal);
					$('#orggrandTotal').val(tgtotal);
				  }
				  else{
					   $('#updatetlist').html(data);
					    var tax=$('#tvat').val();
						var discount=$('#tdiscount').val();
						var tgtotal=$('#tgtotal').val();
						$('#calvat').text(tax);
						$('#invoice_discount').val(discount);
						$('#caltotal').text(tgtotal);
						$('#grandtotal').val(tgtotal);
						$('#orggrandTotal').val(tgtotal);
					  }
			 } 
		});
	}
	

function updatecart(id,qty,status){
		if(status=="del" && qty==0){
			return false;
			}
		else{
		 var geturl=$("#cartupdateturl").val();
		 var dataString = "CartID="+id+"&qty="+qty+"&Udstatus="+status;
		  $.ajax({
		 	 type: "POST",
			 url: geturl,
			 data: dataString,
			 success: function(data) {
				 $('#cartlist').html(data);
				    var tax=$('#tvat').val();
					var discount=$('#tdiscount').val();
					var tgtotal=$('#tgtotal').val();
					$('#calvat').text(tax);
					$('#invoice_discount').val(discount);
					$('#caltotal').text(tgtotal);
					$('#grandtotal').val(tgtotal);
					$('#orggrandTotal').val(tgtotal);
			 } 
		});
		}
	}
function posupdatecart(id,qty,status){
		if(status=="del" && qty==0){
			return false;
			}
		else{
		 var geturl=$("#cartupdateturl").val();
		 var dataString = "CartID="+id+"&qty="+qty+"&Udstatus="+status;
		  $.ajax({
		 	 type: "POST",
			 url: geturl,
			 data: dataString,
			 success: function(data) {
				 $('#addfoodlist').html(data);
				var total=$('#grtotal').val();
					var totalitem=$('#totalitem').val();
					$('#item-number').text(totalitem);
					var tax=$('#tvat').val();
					var discount=$('#tdiscount').val();
					var tgtotal=$('#tgtotal').val();
					$('#calvat').text(tax);
					$('#invoice_discount').val(discount);
					$('#caltotal').text(tgtotal);
					$('#grandtotal').val(tgtotal);
					$('#orggrandTotal').val(tgtotal);
			 } 
		});
		}
	}
function removecart(rid){
		 var geturl=$("#removeurl").val();
		 var dataString = "rowid="+rid;
		  $.ajax({
		 	 type: "POST",
			 url: geturl,
			 data: dataString,
			 success: function(data) {
				 $('#addfoodlist').html(data);
				var total=$('#grtotal').val();
					var totalitem=$('#totalitem').val();
					$('#item-number').text(totalitem);
					var tax=$('#tvat').val();
					var discount=$('#tdiscount').val();
					var tgtotal=$('#tgtotal').val();
					$('#calvat').text(tax);
					$('#invoice_discount').val(discount);
					$('#caltotal').text(tgtotal);
					$('#grandtotal').val(tgtotal);
					$('#orggrandTotal').val(tgtotal);
			 } 
		});
	}
function addonsitem(id,sid){
		 var geturl=$("#addonsurl").val();
		 var myurl =geturl+'/'+id;
		 var dataString = "pid="+id+"&sid="+sid;
		  $.ajax({
		 	 type: "POST",
			 url: myurl,
			 data: dataString,
			 success: function(data) {
				 $('.addonsinfo').html(data);
				 $('#edit').modal('show');
			 } 
		});
	}
function posaddonsitem(id,sid){
		 var geturl=$("#addonsurl").val();
		 var myurl =geturl+'/'+id;
		 var dataString = "pid="+id+"&sid="+sid;
		  $.ajax({
		 	 type: "POST",
			 url: myurl,
			 data: dataString,
			 success: function(data) {
				 $('.addonsinfo').html(data);
				 $('#edit').modal('show');
			 } 
		});
	}
function addonsfoodtocart(pid,id){
	var addons = [];
	var adonsqty=[];
	 var allprice = 0;
	 var adonsprice = [];
	 var adonsname=[];
				$('input[name="addons"]:checked').each(function() {
					var adnsid=$(this).val();
					var adsqty=$('#addonqty_'+adnsid).val();
					adonsqty.push(adsqty);
				  	addons.push($(this).val());
					
					allprice += parseFloat($(this).attr('role'))*parseInt(adsqty);
					adonsprice.push($(this).attr('role'));
					adonsname.push($(this).attr('title'));
				});
	var geturl=$("#carturl").val();
	var catid=$("#catid").val();
	var itemname=$("#itemname_"+id).val();
	 var sizeid=$("#sizeid_"+id).val();
	 var varientname=$("#size_"+id).val();
	 var qty=$("#itemqty_"+id).val();
	 var price=$("#itemprice_"+id).val();
	 var updateid=$("#updateid").val();
	 var myurl =geturl;
	 if(updateid==''){
	var dataString = "pid="+pid+'&itemname='+itemname+'&varientname='+varientname+'&qty='+qty+'&price='+price+'&catid='+catid+'&sizeid='+sizeid+'&addonsid='+addons+'&allprice='+allprice+'&adonsunitprice='+adonsprice+'&adonsqty='+adonsqty+'&adonsname='+adonsname;
	 }
	 else{
		 var dataString = "pid="+pid+'&itemname='+itemname+'&varientname='+varientname+'&qty='+qty+'&price='+price+'&catid='+catid+'&sizeid='+sizeid+'&addonsid='+addons+'&allprice='+allprice+'&adonsunitprice='+adonsprice+'&adonsqty='+adonsqty+'&adonsname='+adonsname+'&orderid='+updateid;
		 }
		$.ajax({
		 	 type: "POST",
			 url: myurl,
			 data: dataString,
			 success: function(data) {
				 if(updateid==''){
					 $('#cartlist').html(data);
					 $('#edit').modal('hide');
					  var tax=$('#tvat').val();
					var discount=$('#tdiscount').val();
					var tgtotal=$('#tgtotal').val();
					$('#calvat').text(tax);
					$('#invoice_discount').val(discount);
					$('#caltotal').text(tgtotal);
					$('#grandtotal').val(tgtotal);
					$('#orggrandTotal').val(tgtotal);
				  }
				  else{
					   $('#updatetlist').html(data);
					    $('#edit').modal('hide');
						 var tax=$('#tvat').val();
					var discount=$('#tdiscount').val();
					var tgtotal=$('#tgtotal').val();
					$('#calvat').text(tax);
					$('#invoice_discount').val(discount);
					$('#caltotal').text(tgtotal);
					$('#grandtotal').val(tgtotal);
					$('#orggrandTotal').val(tgtotal);
					  }
			 } 
		});

	}
function posaddonsfoodtocart(pid,id){
	var addons = [];
	var adonsqty=[];
	 var allprice = 0;
	 var adonsprice = [];
	 var adonsname=[];
				$('input[name="addons"]:checked').each(function() {
					var adnsid=$(this).val();
					var adsqty=$('#addonqty_'+adnsid).val();
					adonsqty.push(adsqty);
				  	addons.push($(this).val());
					
					allprice += parseFloat($(this).attr('role'))*parseInt(adsqty);
					adonsprice.push($(this).attr('role'));
					adonsname.push($(this).attr('title'));
				});
	var geturl=$("#carturl").val();
	var catid=$("#catid").val();
	var itemname=$("#itemname_"+id).val();
	 var sizeid=$("#sizeid_"+id).val();
	 var varientname=$("#size_"+id).val();
	 var qty=$("#itemqty_"+id).val();
	 var price=$("#itemprice_"+id).val();
	 var myurl =geturl;
	var dataString = "pid="+pid+'&itemname='+itemname+'&varientname='+varientname+'&qty='+qty+'&price='+price+'&catid='+catid+'&sizeid='+sizeid+'&addonsid='+addons+'&allprice='+allprice+'&adonsunitprice='+adonsprice+'&adonsqty='+adonsqty+'&adonsname='+adonsname;
		$.ajax({
		 	 type: "POST",
			 url: myurl,
			 data: dataString,
			 success: function(data) {
				$('#addfoodlist').html(data);
				var total=$('#grtotal').val();
					var totalitem=$('#totalitem').val();
					$('#item-number').text(totalitem);
					var tax=$('#tvat').val();
					var discount=$('#tdiscount').val();
					var tgtotal=$('#tgtotal').val();
					$('#calvat').text(tax);
					$('#invoice_discount').val(discount);
					$('#caltotal').text(tgtotal);
					$('#grandtotal').val(tgtotal);
					$('#orggrandTotal').val(tgtotal);
				$('#edit').modal('hide');
			 } 
		});

	}
function deletecart(id,orderid){
	var geturl=$("#delurl").val();
		var dataString = "mid="+id+"&orderid="+orderid;
		$.ajax({
		 	 type: "POST",
			 url: geturl,
			 data: dataString,
			 success: function(data) {
				 alert("Deleted Successfully!!!");
				 $('#updatetlist').html(data);
			 } 
		});
	}
function expand(id){
	var classes=$("#expandcol_"+id).attr('class').split(' ')[1];
	if ($("#expandcol_"+id).hasClass("hasaddons")) {
	$("."+classes).removeClass("hasaddons");
	}
	else{
		$("."+classes).addClass("hasaddons");
		}
	//var classes=$("#expandcol_"+id).attr('class').split(' ')[1];
	//$("."+classes).removeClass("hasaddons");
	}

function calculatetotal() {
	var total_price = 0;
    var inv_dis = 0;
    var ser_chg = 0;
	
    total_price = $("#orggrandTotal").val();
    inv_dis = $("#invoice_discount").val();
	if(inv_dis==''){
		inv_dis = 0;
		}
    ser_chg = $("#service_charge").val();
		if(ser_chg==''){
		ser_chg = 0;
		}

    var sum = parseFloat(total_price)+parseFloat(ser_chg) - parseFloat(inv_dis);
    $("#grandtotal").val(sum);
	 $("#caltotal").text(sum);

}

function sumcalculation() {
	var total_price = 0;
    var inv_dis = 0;
    var ser_chg = 0;
	
    total_price = $("#orginattotal").val();
    inv_dis = $("#discount").val();
	if(inv_dis==''){
		inv_dis = 0;
		}
    ser_chg = $("#scharge").val();
		if(ser_chg==''){
		ser_chg = 0;
		}

    var sum = parseFloat(total_price)+parseFloat(ser_chg) - parseFloat(inv_dis);
    $("#grandtotal").val(sum);
	 $("#gtotal").text(sum);
	

}

