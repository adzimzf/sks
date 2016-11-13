$(function() {
    $("#show-pass").click(function(event) {
        var clas= $("#show-pass li").attr('class');
        if (clas == "fa fa-eye") {
            $("#password").attr('type', 'text');
            $("#show-pass li").attr('class', 'fa fa-eye-slash');
        }else{
            $("#password").attr('type', 'password');
            $("#show-pass li").attr('class', 'fa fa-eye');
        }
    });
    //*make preview of upload image
    $("#foto-input").on('change', function () {
     
            if (typeof (FileReader) != "undefined") {
                var reader = new FileReader();
                //limit ting file under 1MB/100000
                var fileSize = $(this).get(0).files[0].size;
                console.log(fileSize);
                //38764 = 38,8 kb
                if (fileSize <= 1000000 && fileSize >= 10000) {
                    $("#foto-info").text("Upload foto minimal 10KB dan maksimal 1MB");
                    $("#foto-info").removeClass('text-danger');
                    reader.onload = function (e) {
                    // $("<img />", {
                    //     "src": e.target.result,
                    //     "class": "thumb-image"
                    // }).appendTo(image_holder);
                    $("#foto-show").attr('src', e.target.result);
                    }
                    reader.readAsDataURL($(this)[0].files[0]);
                }else{
                    $("#foto-info").text("Oppssss!! File minimal 10KB dan maksimal 1MB");
                    $("#foto-info").addClass('text-danger');
                }
                
            } else {
                alert("This browser does not support FileReader.");
            }
        });

});
