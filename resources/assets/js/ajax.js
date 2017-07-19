//$('#contactModalBody').on('show.bs.modal', function (event) {

$('#contactModalForm').submit(function () {
    var _token = $('meta[name="csrf-token"]').attr('content');
    var name = $('#name').val();
    var email = $('#email').val();
    var company = $('#company').val();
    var message = $('#message').val();


    /*  jQuery AJAX   */

    $.ajax({
        type: "POST",
        data: {
            _token: _token,
            name: name,
            email: email,
            company: company,
            message: message
        },
        url: '/contact',

        beforeSend: function () {

            $(".tempError").each(function () {
                $(this).remove();
            });

            $('#errorFromAjaxForm').hide();

            $('#contactModalForm').hide('clip', {}, 600);

            $('.ajax-process-container').fadeIn('fast');

        },

        success: function (res) {

            $('.ajax-process-container').hide();
            $('#ajax-successes').effect('slide', {}, 600, closeModal);

            function closeModal() {

                setTimeout(function () {

                    $('#modalClose').click();

                    setTimeout(function () {
                        $('#ajax-successes').hide();
                        $('#contactModalForm').show();
                        $('#name').val(null);
                        $('#email').val(null);
                        $('#company').val(null);
                        $('#message').val(null);
                    }, 500);

                }, 1000);
            }

        },
        error: function (xhr) {
            $('.ajax-process-container').hide();
            $('#contactModalForm').fadeIn('slow', function () {

                $.each(xhr.responseJSON, function (index, element) {

                    $('#errorFromAjax').append('<li class="tempError">' + element[0] + '</li>');

                });

               // $('#errorFromAjaxForm').slideDown();
              //  $('#errorFromAjaxForm').toggle('bounce', {}, 600);
                $('#errorFromAjaxForm').show('bounce', {}, 600);


            });


        }
    });


//        /*   AXIOS   */
//
//
//        axios.post('/contact', {
//            _token: _token,
//            name: name,
//            email: email,
//            company: company,
//            message: message
//        })
//            .then(function (response) {
//
//                $('#contactModalForm').toggle('slide', {'direction': 'right'}, 600, callback);
//
//                function callback() {
//                    $('#ajax-successes').effect('slide', {}, 600, closeModal);
//                }
//
//                function closeModal() {
//
//                    setTimeout(function () {
//                        $('#modalClose').click();
//                        setTimeout(function () {
//                            $('#ajax-successes').hide();
//                            $('#contactModalForm').show();
//                            $('#name').val('');
//                            $('#email').val('');
//                            $('#company').val('');
//                            $('#message').val('');
//                        }, 1000);
//                    }, 1000);
//
//
//                }
//            })
//            .catch(function (error) {
//                if (error.response) {
//
//                    $.each(error.response.data, function (index, element) {
//
//                        $('#errorFromAjax').append('<li class="tempError">' + element[0] + '</li>');
//
//                    });
//                    $('#errorFromAjaxForm').slideDown();
//
//                }
//
//            });
//



        return false;
}); //$('#contactModalForm').submit(function () {


//}); //$('#contactModalBody').on('show.bs.modal', function (event) {