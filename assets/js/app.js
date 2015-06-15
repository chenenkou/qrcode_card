$(function() {
    $("#cardForm").submit(function() {
        var data = $(this).serialize();
        var  url = "qrcode.php";
        $.post(url, data, function(response) {
            $("#my-popup").modal();
            $("#codeImg").attr("src", response);
        });

        return false;
    });
});
