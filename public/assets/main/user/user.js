/**
 * Script pour la vérification de l'enregistrement des utilisateurs
 */

$('#register-user').click(function(){
    var firstname = $('#firstname').val();
    var lastname = $('#lastname').val();
    var email = $('#email').val();
    var password = $('#password').val();
    var password_confirm = $('#confirmpassword').val();
    var passwordLength = password.length;
    var address = $('#address').val();
    var ville = $('#ville').val();
    var telephone = $('#telphone').val();
    var agreeterms = $('#gridCheck').prop('checked');

    if(firstname != "" && /^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]+$/.test(firstname)){
        $('#firstname').removeClass('is-invalid');
        $('#firstname').addClass('is-valid');
        $('#error-register-firstname').text("");

        if(lastname != "" && /^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]+$/.test(lastname)){
            $('#lastname').removeClass('is-invalid');
            $('#lastname').addClass('is-valid');
            $('#error-register-lastname').text("");

            if(email != "" && /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(email)){
                $('#email').removeClass('is-invalid');
                $('#email').addClass('is-valid');
                $('#error-register-email').text("");

                if(passwordLength >= 8){
                    $('#password').removeClass('is-invalid');
                    $('#password').addClass('is-valid');
                    $('#error-register-password').text("");

                    if(password === password_confirm){
                        $('#confirmpassword').removeClass('is-invalid');
                        $('#confirmpassword').addClass('is-valid');
                        $('#error-register-confirmpassword').text("");

                        if(address != ""){
                            $('#address').removeClass('is-invalid');
                            $('#address').addClass('is-valid');
                            $('#error-register-address').text("");

                            if(ville != ""){
                                $('#ville').removeClass('is-invalid');
                                $('#ville').addClass('is-valid');
                                $('#error-register-ville').text("");

                                if(telephone != "" && /^[0-9]+$/.test(telephone)){
                                    $('#telphone').removeClass('is-invalid');
                                    $('#telphone').addClass('is-valid');
                                    $('#error-register-telphone').text("");

                                    if(agreeterms){
                                        $('#gridCheck').removeClass('is-invalid');
                                        $('#gridCheck').addClass('is-valid');
                                        $('#error-register-agreeterms').text("");

                                        // Envoyer le formulaire d'inscription ici
                                        $('#form-register').submit();

                                    } else {
                                        $('#gridCheck').addClass('is-invalid');
                                        $('#gridCheck').removeClass('is-valid');
                                        $('#error-register-agreeterms').text("Veuillez accepter les Conditions d'Utilisation.");
                                    }
                                } else {
                                    $('#telphone').addClass('is-invalid');
                                    $('#telphone').removeClass('is-valid');
                                    $('#error-register-telphone').text("Numéro de téléphone non valide.");
                                    }
                                }else {
                                    $('#ville').addClass('is-invalid');
                                    $('#ville').removeClass('is-valid');
                                    $('#error-register-ville').text("Veuillez saisir votre ville.");
                                }
                            } else {
                                $('#address').addClass('is-invalid');
                                $('#address').removeClass('is-valid');
                                $('#error-register-address').text("Veuillez saisir votre adresse.");
                            }
                        } else {
                            $('#confirmpassword').addClass('is-invalid');
                            $('#confirmpassword').removeClass('is-valid');
                            $('#error-register-confirmpassword').text("Les mots de passe ne correspondent pas.");
                        }
                    } else {
                        $('#password').addClass('is-invalid');
                        $('#password').removeClass('is-valid');
                        $('#error-register-password').text("Votre mot de passe doit contenir au moins 8 caractères.");
                    }
                } else {
                    $('#email').addClass('is-invalid');
                    $('#email').removeClass('is-valid');
                    $('#error-register-email').text("L'email n'est pas valide.");
                }
            } else {
                $('#lastname').addClass('is-invalid');
                $('#lastname').removeClass('is-valid');
                $('#error-register-lastname').text("Le prénom n'est pas valide.");
            }
        } else {
            $('#firstname').addClass('is-invalid');
            $('#firstname').removeClass('is-valid');
            $('#error-register-firstname').text("Le nom n'est pas valide.");
        }
});


