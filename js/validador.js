
$( document ).ready(function() {
        $('#form').submit(function(e) {
            e.preventDefault();
        }).validate({
            debug: false,
            rules: {
                "nickname": {
                    required: true
                },
                "password": {
                    required: true
                },
                "surname2": {
                    required: true
                },
                "email": {
                    required: true,
                    email: true
                },
                "cpostal": {
                    required: true,
                    number:true,
                    minlength: 5,
                    maxlength: 5
                }
            },
            messages: {
                "nickname": {
                    required: "Introduce tu nombre de usuario."
                },
                "password": {
                    required: "Introduce tu contraseña."
                },
                "surname2": {
                    required: "Apellido obligatorio."
                },
                "email": {
                    required: "Introduce tu correo.",
                    email: ""
                },
                "cpostal": {
                    required: "Introduce tu código postal.",
                    number: "Introduce un código postal válido.",
                    maxlength: "Debe contener 5 dígitos.",
                    minlength: "Debe contener 5 dígitos."
                }
            }
 
        });
});
