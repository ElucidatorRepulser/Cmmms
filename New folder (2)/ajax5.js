<!-- Add user -->
	$(document).on('click','#btn-add',function(e) {
		var data = $("#user_form").serialize();
		$.ajax({
			data: data,
			type: "post",
			url: "backend/crud_g_form5.php",
			success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$('#addEmployeeModal').modal('hide');
						alert('Data added successfully !');
                        location.reload();
					} else if(dataResult.statusCode==201){
					   alert(dataResult);
					}
			}
		});
	});
	$(document).on('click','.update',function(e) {
		var id=$(this).attr("data-id");
		var fname=$(this).attr("data-fname");
		var mname=$(this).attr("data-mname");
		var lname=$(this).attr("data-lname");
		var dob=$(this).attr("data-dob");
		var city=$(this).attr("data-city");
		var prov=$(this).attr("data-prov");
		var gender=$(this).attr("data-gender");
		var cs=$(this).attr("data-cs");
		var czs=$(this).attr("data-czs");
		var mpho=$(this).attr("data-mpho");
		var email=$(this).attr("data-email");
		var schoolsec=$(this).attr("data-schoolsec");
		var hag=$(this).attr("data-hag");
		var pa=$(this).attr("data-pa");
		var padd=$(this).attr("data-padd");
		var zc=$(this).attr("data-zc");
		var sa=$(this).attr("data-sa");
		var tod=$(this).attr("data-tod");
		var ipa=$(this).attr("data-ipa");
		var occ=$(this).attr("data-occ");
		var ea=$(this).attr("data-ea");
		var noe=$(this).attr("data-noe");
		var hea=$(this).attr("data-hea");
		var tp=$(this).attr("data-tp");
		var sif=$(this).attr("data-sif");
		$('#id_u').val(id);
		$('#fname_u').val(fname);
		$('#mname_u').val(mname);
		$('#lname_u').val(lname);
		$('#dob_u').val(dob);
		$('#city_u').val(city);
		$('#prov_u').val(prov);
		$('#gender_u').val(gender);
		$('#cs_u').val(cs);
		$('#czs_u').val(czs);
		$('#mpho_u').val(mpho);
		$('#email_u').val(email);
		$('#schoolsec_u').val(schoolsec);
		$('#hag_u').val(hag);
		$('#pa_u').val(pa);
		$('#padd_u').val(padd);
		$('#zc_u').val(zc);
		$('#sa_u').val(sa);
		$('#tod_u').val(tod);
		$('#ipa_u').val(ipa);
		$('#occ_u').val(occ);
		$('#ea_u').val(ea);
		$('#noe_u').val(noe);
		$('#hea_u').val(hea);
		$('#tp_u').val(tp);
		$('#sif_u').val(sif);
	});
<!-- Update -->
	$(document).on('click','#update',function(e) {
		var data = $("#update_form").serialize();
		$.ajax({
			data: data,
			type: "post",
			url: "backend/crud_g_form5.php",
			success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$('#editEmployeeModal').modal('hide');
						alert('Data updated successfully !');
                        location.reload();
					}
					else if(dataResult.statusCode==201){
					   alert(dataResult);
					}
			}
		});
	});
	$(document).on("click", ".delete", function() {
		var id=$(this).attr("data-id");
		$('#id_d').val(id);

	});
	$(document).on("click", "#delete", function() {
		$.ajax({
			url: "backend/crud_g_form5.php",
			type: "POST",
			cache: false,
			data:{
				type:3,
				id: $("#id_d").val()
			},
			success: function(dataResult){
					$('#deleteEmployeeModal').modal('hide');
					$("#"+dataResult).remove();

			}
		});
	});
	$(document).on("click", "#delete_multiple", function() {
		var user = [];
		$(".user_checkbox:checked").each(function() {
			user.push($(this).data('user-id'));
		});
		if(user.length <=0) {
			alert("Please select records.");
		}
		else {
			WRN_PROFILE_DELETE = "Are you sure you want to delete "+(user.length>1?"these":"this")+" row?";
			var checked = confirm(WRN_PROFILE_DELETE);
			if(checked == true) {
				var selected_values = user.join(",");
				console.log(selected_values);
				$.ajax({
					type: "POST",
					url: "backend/crud_g_form5.php",
					cache:false,
					data:{
						type: 4,
						id : selected_values
					},
					success: function(response) {
						var ids = response.split(",");
						for (var i=0; i < ids.length; i++ ) {
							$("#"+ids[i]).remove();
						}
					}
				});
			}
		}
	});
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
		var checkbox = $('table tbody input[type="checkbox"]');
		$("#selectAll").click(function(){
			if(this.checked){
				checkbox.each(function(){
					this.checked = true;
				});
			} else{
				checkbox.each(function(){
					this.checked = false;
				});
			}
		});
		checkbox.click(function(){
			if(!this.checked){
				$("#selectAll").prop("checked", false);
			}
		});
	});
