$(document).ready(function() {
    $("#focus").focus().bind('blur', function() {
        $(this).focus();            
    });

    $("html").click(function() {
        $("#focus").val($("#focus").val()).focus();
    });

    $(function() {
        $("#write").keypress(function (e) {
            if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {
                $('button[type=submit] .default').click();
                var input = $("#focus").val();

                $.post('execution.php',{postinput:input},
                function(data)
                {
                    if (data == "Boom")
                    {
                        $('#filler').empty();
                        $('#focus').val('');
                    }
                    else
                    {
                        $('#focus').val('');
                        $('#filler').append("<p>[Computer-MBP:~ computername$: " + input + "</p>");
                        $('#filler').append("<p>" + data + "</p>");
                    }
                });
            }
        });
    });


});