$(function() {
    $("#print").click(function(event) {
        $("#printah").val("print");
        if ($("#teler").val() == null) {
            $("#modalText").text("Oppss Teller belum diisi .!!!!");
            $("#submit").hide();
        } else if ($("#jumlah-temuan").val() == "") {
            $("#modalText").text("Oppss Jumlah Temuan belum diisi .!!!!");
            $("#submit").hide();
        } else if ($("#nomer-seri").val() == "") {
            $("#modalText").text("Oppss Nomer Seri wajib untuk di isi.!");
            $("#submit").hide();
        } else {
            $("#modalText").text("Apakah Anda yakin akan mengeprint data.?");
            $("#submit").show();
        }
    });
    $("#pdf").click(function(event) {
        $("#printah").val("pdf");
    });
    $("#submit").click(function(event) {
        $("#formBa").submit();
    });
    $("#total-temuan").autoNumeric('init');
    $("#temuan").change(function() {
        var tes = $(this).val();
        if (tes == 'lebih' || tes == 'kurang' || tes == 'palsu' || tes == 'mutilasi') {
            if (tes == 'mutilasi') {
                $("#nomer-seri").inputmask("aaa-999-999 / aaa-999-999");
                $("#nomer-seri").attr('placeholder', 'abc-123-456 / abc-123-456');
            } else {
                $("#nomer-seri").inputmask("aaa-999-999");
                $("#nomer-seri").attr('placeholder', 'abc-123-456');
            }
            $("#tes").text(tes + " muncul div");
            $("#div-temuan-bedadenom").hide();
            $("#div-temuan").show();
        } else {
            $("#tes").text("yang lain nya");
            $("#div-temuan").hide();
            $("#div-temuan-bedadenom").show();
        }

    });
    $("#jumlah-beda-denom").keyup(function() {
        var jumlah = $(this).val();
        var denom = parseInt($("#denom").val());
        var denom_1 = parseInt($("#denom-beda1").val());
        var denom_2 = parseInt($("#denom-beda2").val());
        var denom_3 = parseInt($("#denom-beda3").val());
        var denom_4 = parseInt($("#denom-beda4").val());
        var denom_5 = parseInt($("#denom-beda5").val());
        if (jumlah == '2') {
            $("#denom-beda-2").show();
            $("#denom-beda-3").hide();
            $("#denom-beda-4").hide();
            $("#denom-beda-5").hide();
            var total = denom - (denom_1 + denom_2);
        } else if (jumlah == '3') {
            $("#denom-beda-2").show();
            $("#denom-beda-3").show();
            $("#denom-beda-4").hide();
            $("#denom-beda-5").hide();
            var total = denom - (denom_1 + denom_2 + denom_3);
        } else if (jumlah == '4') {
            $("#denom-beda-2").show();
            $("#denom-beda-3").show();
            $("#denom-beda-4").show();
            $("#denom-beda-5").hide();
            var total = denom - (denom_1 + denom_2 + denom_3 + denom_4);
        } else if (jumlah == '5') {
            $("#denom-beda-2").show();
            $("#denom-beda-3").show();
            $("#denom-beda-4").show();
            $("#denom-beda-5").show();
            var total = denom - (denom_1 + denom_2 + denom_3 + denom_4 + denom_5);
        } else {
            $("#denom-beda-2").hide();
            $("#denom-beda-3").hide();
            $("#denom-beda-4").hide();
            $("#denom-beda-5").hide();
            var total = denom - denom_1;
        }
        total = total.format(2);
        $("#total-beda").val(total);
    });
    $("#jumlah-temuan").keyup(function() {
        var jumlah = parseInt($(this).val());
        var denom = parseInt($("#denom").val());
        var total = jumlah * denom;
        $("#total-temuan").val(total);
    });
    $("#div-temuan-bedadenom").keyup(function() {
        var jumlah = $(this).val();

    });
    //aambil data api teler berdasarkan change di cabang
    $("#cabang").change(function(event) {
        console.log($(this).val());
        var id = "/cabang/" + $(this).val();
        getTeler(id);
        
    });
    $(window).load(function() {
        var id = "/cabang/" + $("#cabang").val();
        getTeler(id);
    });
    function getTeler(id){
      $.ajax({
            type: "GET",
            url: 'ambilDataTelerApi' + id, //nanti +this val
            dataType: "json",
            success: function(results) {
                var data = '';
                $.each(results, function(k, v) {
                    data += "<option>" + v.nama + "</option>";
                });
                $("#teler").html(data);

            }
        });
    }

    //input mask
    $("[data-mask]").inputmask();
    $("#nomer-seri").inputmask("aaa-999-999");
    $("#jam").inputmask("99:99");
    //Number formating


}); //end of jQuery function

//Initialize Select2 Elements
$(".select2").select2();
//Timepicker
$("#timepicker").timepicker({
    showMeridian: false,
    defaultTime: true
});
//Date picker
$('.datepicker').datepicker({
    dateFormat: 'yy-mm-dd'
});
//Initialize timepicker Elements
$('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' });
