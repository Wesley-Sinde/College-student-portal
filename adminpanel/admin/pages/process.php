<!-- Custom Scripts -->
<script>
    $(function() {
        $('#productForm3r2').submit(function(e) {
            e.preventDefault();
            var MyData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: '../query/updateExamineeMarksExe.php',
                data: MyData,
                dataType: 'json',
                success: function(response) {
                    $('#callout').show();
                    $('.message').html(response.message);
                    if (response.error) {
                        $('#callout').removeClass('callout-success').addClass('callout-danger');
                    } else {
                        $('#callout').removeClass('callout-danger').addClass('callout-success');
                        getCart();
                    }
                }
            });
        });

        $(document).on('click', '.close', function() {
            $('#callout').hide();
        });

    });
</script>