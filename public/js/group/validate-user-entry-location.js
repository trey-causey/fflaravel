function checkZip(zipcode) {
    /*$(".btn-submit").click(function(e){
    window.console.log('in submit');
    window.console.log($('#zipcode').val());*/
    $.ajax({
        type: 'POST',
        url: " {{route('zipCodePost')}} ",
        data: {zipcode: zipcode},
        cache: false,
        success: function(data) {
            alert(data.success);
            if ($('#zipcode').length !== 5) {
                window.console.log('not 5');
            }
            window.console.log('in success');
        }
    })
}

