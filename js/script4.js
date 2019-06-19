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
		 } 
	});
	}
	
/*function getsuplierinfo(){
		 var suplierid=$("#suplierid").val();
		 var myurl =baseurl+'purchase/purchase/getlist/'+suplierid;
		 $.ajax({
			   url:myurl,
			    dataType:'json',
				type: "GET",
				async:true,
				success: function(data) {
					$("#email").val(data.supEmail);
					$("#mobile").val(data.supMobile);
					$("#address").val(data.supAddress);
				  }
			  });
	}*/

	
function purchaseitem(){
		 var rowCount = $('#itemlist table tr').length;
		 if(rowCount<2){
			 alert("Please Add Some product!!");
			 }
	}




//Add Input Field Of Row
function addInputField(t) {
    if (count == limits) alert("You have reached the limit of adding " + count + " inputs");
    else {
        var a = "product_name" + count,
            tabindex = count * 5 ,
            e = document.createElement("tr");
            tab1 = tabindex + 1;
            tab2 = tabindex + 2;
            tab3 = tabindex + 3;
            tab4 = tabindex + 4;
            tab5 = tabindex + 5;
            tab6 = tabindex + 6;
            tab7 = tabindex + 7;
            tab8 = tabindex + 8;
            tab9 = tabindex + 9;
        e.innerHTML = "<td><input type='text' name='product_name' onkeypress='invoice_productList(" + count + ");' class='form-control productSelection' placeholder='Product Name' id='" + a + "' required tabindex='"+tab1+"'><input type='hidden' class='autocomplete_hidden_value  product_id_" + count + "' name='product_id[]' id='SchoolHiddenId'/></td>   <td><input type='text' name='available_quantity[]' id='' class='form-control text-right available_quantity_" + count + "' value='0' readonly='readonly' /></td><td><input class='form-control text-right unit_" + count + " valid' value='None' readonly='' aria-invalid='false' type='text'></td><td> <input type='number' name='product_quantity[]' onkeyup='quantity_calculate(" + count + ");' onchange='quantity_calculate(" + count + ");' id='total_qntt_" + count + "' class='total_qntt_" + count + " form-control text-right' placeholder='0.00' min='0' tabindex='"+tab2+"'/></td><td><input type='number' name='product_rate[]' onkeyup='quantity_calculate(" + count + ");' onchange='quantity_calculate(" + count + ");' id='price_item_" + count + "' class='price_item"+count+" form-control text-right' required placeholder='0.00' min='0' tabindex='"+tab3+"'/></td><td><input type='text' name='discount[]' onkeyup='quantity_calculate(" + count + ");' onchange='quantity_calculate(" + count + ");' id='discount_" + count + "' class='form-control text-right' placeholder='0.00' min='0' tabindex='"+tab4+"' /><input type='hidden' value='' name='discount_type' id='discount_type_" + count + "'></td><td class='text-right'><input class='total_price form-control text-right' type='text' name='total_price[]' id='total_price_" + count + "' value='0.00' readonly='readonly'/></td><td><input type='hidden' id='total_tax_" + count + "' class='total_tax_" + count + "' /><input type='hidden' id='all_tax_" + count + "' class=' total_tax' name='tax[]'/><input type='hidden'  id='total_discount_" + count + "' class='total_tax_" + count + "' /><input type='hidden' id='all_discount_" + count + "' class='total_discount'/><button tabindex='"+tab5+"' style='text-align: right;' class='btn btn-danger' type='button' value='Delete' onclick='deleteRow(this)'>Delete</button></td>", 
        document.getElementById(t).appendChild(e), 
        document.getElementById(a).focus(),
        document.getElementById("add_invoice_item").setAttribute("tabindex", tab6);
        document.getElementById("paidAmount").setAttribute("tabindex", tab7);
        document.getElementById("full_paid_tab").setAttribute("tabindex", tab8);
        document.getElementById("add_invoice").setAttribute("tabindex", tab9);
        count++
    }
}

//Quantity calculat
function quantity_calculate(item) {
    var quantity    = $("#total_qntt_" + item).val();
    var price_item  = $("#price_item_" + item).val();
    var discount    = $("#discount_" + item).val();
    var total_tax   = $("#total_tax_" + item).val();
    var total_discount = $("#total_discount_" + item).val();
    var dis_type    = $("#discount_type_" + item).val();

    if (quantity > 0 || discount > 0) {
        if (dis_type == 1) {
            var price = quantity * price_item;

            // Discount cal per product
            var dis   = price * discount / 100;
            $("#all_discount_" + item).val(dis);

            //Total price calculate per product
            var temp = price - dis;
            $("#total_price_" + item).val(price);

            //Tax cal per product
            var tax = temp * total_tax;
            $("#all_tax_" + item).val(tax);
        }else if(dis_type == 2){

            var price = quantity * price_item;

            // Discount cal per product
            var dis   = discount * quantity;
            $("#all_discount_" + item).val(dis);

            //Total price calculate per product
            var temp = price - dis;
            $("#total_price_" + item).val(price);

            //Tax cal per product
            var tax = temp * total_tax;
            $("#all_tax_" + item).val(tax);
        }else if(dis_type == 3){
            var total_price = quantity * price_item;

            // Discount cal per product
            $("#all_discount_" + item).val(discount);

            //Total price calculate per product
            var price   = total_price - discount;
            $("#total_price_" + item).val(total_price);

            //Tax cal per product
            var tax = price * total_tax;
            $("#all_tax_" + item).val(tax);
        }
    }else {
        var n = quantity * price_item;
        var c = quantity * price_item * total_tax;
        $("#total_price_" + item).val(n), 
        $("#all_tax_" + item).val(c)
    }
    calculateSum();
    invoice_paidamount();
}
//Calculate Sum
function calculateSum() {
    var t = 0,
        a = 0,
        e = 0,
        o = 0,
        p = 0;

    //Total Tax
    $(".total_tax").each(function() {
        isNaN(this.value) || 0 == this.value.length || (a += parseFloat(this.value))
    }), 
    $("#total_tax_ammount").val(a.toFixed(2,2)), 

    //Total Discount
    $(".total_discount").each(function() {
        isNaN(this.value) || 0 == this.value.length || (p += parseFloat(this.value))
    }), 
    
    $("#total_discount_ammount").val(p.toFixed(2,2)), 

    //Total Price
    $(".total_price").each(function() {
        isNaN(this.value) || 0 == this.value.length || (t += parseFloat(this.value))
    }), 

    o = a.toFixed(2,2), 
    e = t.toFixed(2,2);
    f = p.toFixed(2,2);

    var test = +o + +e+ -f;
    $("#grandTotal").val(test.toFixed(2,2))
}

//Invoice Paid Amount
function invoice_paidamount() {
    var t = $("#grandTotal").val(),
        a = $("#paidAmount").val(),
        e = t - a;
    $("#dueAmmount").val(e.toFixed(2,2))
}
//Stock Limit
function stockLimit(t) {
    var a = $("#total_qntt_" + t).val(),
        e = $(".product_id_" + t).val(),
        o = $(".baseUrl").val();
    $.ajax({
        type: "POST",
        url: o + "Cinvoice/product_stock_check",
        data: {
            product_id: e
        },
        cache: !1,
        success: function(e) {
            if (a > Number(e)) {
                var o = "You can purchase maximum " + e + " Items";
                alert(o), $("#qty_item_" + t).val("0"), $("#total_qntt_" + t).val("0"), $("#total_price_" + t).val("0")
            }
        }
    })
}

function stockLimitAjax(t) {
    var a = $("#total_qntt_" + t).val(),
        e = $(".product_id_" + t).val(),
        o = $(".baseUrl").val();
    $.ajax({
        type: "POST",
        url: o + "Cinvoice/product_stock_check",
        data: {
            product_id: e
        },
        cache: !1,
        success: function(e) {
            if (a > Number(e)) {
                var o = "You can purchase maximum " + e + " Items";
                alert(o), $("#qty_item_" + t).val("0"), $("#total_qntt_" + t).val("0"), $("#total_price_" + t).val("0.00"), calculateSum()
            }
        }
    })
}

//Invoice full paid
function full_paid() {
    var grandTotal = $("#grandTotal").val();
    $("#paidAmount").val(grandTotal);
    invoice_paidamount();
    calculateSum();
}
//Delete a row of table
function deleteRow(t) {
    var a = $("#normalinvoice > tbody > tr").length;
    if (1 == a) alert("There only one row you can't delete.");
    else {
        var e = t.parentNode.parentNode;
        e.parentNode.removeChild(e), 
        calculateSum();
        invoice_paidamount();
    }
}
var count = 2,
    limits = 500;