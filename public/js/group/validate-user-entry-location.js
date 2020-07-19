var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function() {
    console.log('from onready state change');
};

function sendAJAX () {
    let text = document.getElementById('zipcode');
    xhr.open('GET','http://fflaravel.test/admin/administration');
    xhr.send();
    console.log(text);
}
function checkZip(zipcode) {
    /*$(".btn-submit").click(function(e){
    window.console.log('in submit');
    window.console.log($('#zipcode').val());*/
    $.ajax({
        type: 'GET',
        /*url: "http://fflaravel.test/admin/administration",*/
        uploadUrl: '{{url("admin/administration")}}',
        data: {zipcode: zipcode},
        cache: false,
        headers: {
            'X-CSRF-Token': '{{ csrf_token() }}',
        },
        success: function(data) {
            var test = ($('#zipcode').val() % 5);
            if (($('#zipcode').val().length % 5) !== 0)
            {
                window.console.log('you have not entered a valid zip code value');
                window.console.log($('#zipcode').val().length);
                swal({
                    title: "Warning",
                    text: "not valid",
                    icon: "warning"
                });

            } else
            {
                window.console.log('in success...seems to be valid');
                window.console.log($('#zipcode').val().length);
                swal({
                    title: "Success",
                    text: "Valid!",
                    icon: "success"
                });
            }
            window.console.log(test);

        }
    })
}

