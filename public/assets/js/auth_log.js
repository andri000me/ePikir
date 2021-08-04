var protocol = window.location.protocol;
var host = window.location.hostname;

$('#loginform').submit(function(e){
    // e.preventDefault();
    var username = $('#username').val();
    var password = $('#password').val();
    if (username != '' && password != '') {
        $.ajax({
            type : "POST",
            url  : protocol+"//"+host+":8080/auth/cekLogin",
            dataType : "json",
            data : $(this).serialize(),
            success: function(data){
                // console.log(data);

                if(data.success){
                    window.location = data.link;
                } else {
                    // $("#alert_login").fadeIn("slow").delay(1000).slideUp('slow');
                    toastr.error('Username atau password salah.', 'Login Gagal!', {positionClass: 'toast-top-right', containerId: 'toast-top-right'});
                }
            }
        });

        return false;
    }

});