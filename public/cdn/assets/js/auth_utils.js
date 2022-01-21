function auth_sign_in() {
    var login_email = $('[name="login_email"]').val()
    var login_password = $('[name="login_password"]').val()

    if (login_email == '' || login_password == '' ) {
        iziToast.error({
            title: 'Complete all mandatory fields!',
            message: 'Some form fields are incomplete.',
            position: 'topRight'
        })
    } else {
        $.post(
            auth.auth_routes.business_login_post,
            {
                login_email: login_email,
                login_password: login_password,

            },
            function (result) {


                iziToast.success({
                    title: 'Updated!',
                    message: 'fields are updated.',
                    position: 'topRight'
                })
            }
        )
    }
}

function auth_sign_up()
{
    var signup_email = $('[name="signup_email"]').val()
    var signup_password = $('[name="signup_password"]').val()
    var signup_username = $('[name="signup_username"]').val()
    var signup_terms = $('#signup_terms').is(":checked")
    if (signup_email == '' ) {
        iziToast.error({
            title: 'Complete all mandatory fields!',
            message: 'Email is missing',
            position: 'topRight'
        })
    }
    else if(signup_username == '') {
        iziToast.error({
            title: 'Complete all mandatory fields!',
            message: 'Username is missing',
            position: 'topRight'
        })
    }
    else if(signup_password == '') {
        iziToast.error({
            title: 'Complete all mandatory fields!',
            message: 'Password is missing',
            position: 'topRight'
        })
    }
    else if(signup_terms == false) {
        iziToast.error({
            title: 'Complete all mandatory fields!',
            message: 'Check terms and condition',
            position: 'topRight'
        })
    }
    else
    {
        $('#register_form_details').submit();
    }



}
