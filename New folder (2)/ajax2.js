<!-- Add user -->
$(document).on('click', '#btn-add', function (e) {
    var data = $("#user_form").serialize();
    $.ajax({
        data: data,
        type: "post",
        url: "backend/crud_g_form2.php",
        success: function (dataResult) {
            var dataResult = JSON.parse(dataResult);
            if (dataResult.statusCode == 200) {
                $('#addEmployeeModal').modal('hide');
                alert('Data added successfully !');
                location.reload();
            } else if (dataResult.statusCode == 201) {
                alert(dataResult);
            }
        }
    });
});
$(document).on('click', '.update', function (e) {
    var id = $(this).attr("data-id");
    var tin = $(this).attr("data-tin");
    var rdo = $(this).attr("data-rdo");
    var name = $(this).attr("data-name");
    var zip = $(this).attr("data-zip");
    var phone = $(this).attr("data-phone");
    var taxpayer = $(this).attr("data-taxpayer");
    var PCIC = $(this).attr("data-PCIC");
    var pName = $(this).attr("data-pName");
    var pLocation = $(this).attr("data-pLocation");
    var pNumber = $(this).attr("data-pNumber");
    var DAwarded = $(this).attr("data-DAwarded");
    var DCompleted = $(this).attr("data-DCompleted");
    var DA_CP = $(this).attr("data-DA_CP");
    var DC_CP = $(this).attr("data-DC_CP");
    var DA_PBC = $(this).attr("data-DA_PBC");
    var DC_PBC = $(this).attr("data-DC_PBC");
    var DA_VAT = $(this).attr("data-DA_VAT");
    var DC_VAT = $(this).attr("data-DC_VAT");
    var DA_CWT = $(this).attr("data-DA_CWT");
    var DC_CWT = $(this).attr("data-DC_CWT");
    var DA_TAPT = $(this).attr("data-DA_TAPT");
    var DC_TAPT = $(this).attr("data-DC_TAPT");
    var DA_CFP = $(this).attr("data-DA_CFP");
    var DC_CFP = $(this).attr("data-DC_CFP");
    $('#id_u').val(id);
    $('#tin_u').val(tin);
    $('#rdo_u').val(rdo);
    $('#name_u').val(name);
    $('#zip_u').val(zip);
    $('#phone_u').val(phone);
    $('#taxpayer_u').val(taxpayer);
    $('#PCIC_u').val(PCIC);
    $('#pName_u').val(pName);
    $('#pLocation_u').val(pLocation);
    $('#pNumber_u').val(pNumber);
    $('#DAwarded_u').val(DAwarded);
    $('#DCompleted_u').val(DCompleted);
    $('#DA_CP_u').val(DA_CP);
    $('#DC_CP_u').val(DC_CP);
    $('#DA_PBC_u').val(DA_PBC);
    $('#DC_PBC_u').val(DC_PBC);
    $('#DA_VAT_u').val(DA_VAT);
    $('#DC_VAT_u').val(DC_VAT);
    $('#DA_CWT_u').val(DA_CWT);
    $('#DC_CWT_u').val(DC_CWT);
    $('#DA_TAPT_u').val(DA_TAPT);
    $('#DC_TAPT_u').val(DC_TAPT);
    $('#DA_CFP_u').val(DA_CFP);
    $('#DC_CFP_u').val(DC_CFP);

});
<!-- Update -->
$(document).on('click', '#update', function (e) {
    var data = $("#update_form").serialize();
    $.ajax({
        data: data,
        type: "post",
        url: "backend/crud_g_form2.php",
        success: function (dataResult) {
            var dataResult = JSON.parse(dataResult);
            if (dataResult.statusCode == 200) {
                $('#editEmployeeModal').modal('hide');
                alert('Data updated successfully !');
                location.reload();
            } else if (dataResult.statusCode == 201) {
                alert(dataResult);
            }
        }
    });
});
$(document).on("click", ".delete", function () {
    var id = $(this).attr("data-id");
    $('#id_d').val(id);

});
$(document).on("click", "#delete", function () {
    $.ajax({
        url: "backend/crud_g_form2.php",
        type: "POST",
        cache: false,
        data: {
            type: 3,
            id: $("#id_d").val()
        },
        success: function (dataResult) {
            $('#deleteEmployeeModal').modal('hide');
            $("#" + dataResult).remove();

        }
    });
});
$(document).on("click", "#delete_multiple", function () {
    var user = [];
    $(".user_checkbox:checked").each(function () {
        user.push($(this).data('user-id'));
    });
    if (user.length <= 0) {
        alert("Please select records.");
    } else {
        WRN_PROFILE_DELETE = "Are you sure you want to delete " + (user.length > 1 ? "these" : "this") + " row?";
        var checked = confirm(WRN_PROFILE_DELETE);
        if (checked == true) {
            var selected_values = user.join(",");
            console.log(selected_values);
            $.ajax({
                type: "POST",
                url: "backend/crud_g_form2.php",
                cache: false,
                data: {
                    type: 4,
                    id: selected_values
                },
                success: function (response) {
                    var ids = response.split(",");
                    for (var i = 0; i < ids.length; i++) {
                        $("#" + ids[i]).remove();
                    }
                }
            });
        }
    }
});
$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
    var checkbox = $('table tbody input[type="checkbox"]');
    $("#selectAll").click(function () {
        if (this.checked) {
            checkbox.each(function () {
                this.checked = true;
            });
        } else {
            checkbox.each(function () {
                this.checked = false;
            });
        }
    });
    checkbox.click(function () {
        if (!this.checked) {
            $("#selectAll").prop("checked", false);
        }
    });
});
