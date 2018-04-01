$(document).ready(function () {
    $('#contact_form').bootstrapValidator({
        container: 'popover',
         feedbackIcons: {
            valid: 'glyphicon glyphicon-ok-circle',
            invalid: 'glyphicon glyphicon-remove-circle',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            userName: { 
                validators: {
                    notEmpty: {
                        message: "What's your first name?"
                    },
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: "What's your last name?"
                    },
                }
            },
        },
    })
    // Enable submit button all the time 
    .on('status.field.bv', function (e, data) {
            // $(e.target)  --> The field element
            // data.bv      --> The BootstrapValidator instance
            // data.field   --> The field name
            // data.element --> The field element

            data.bv.disableSubmitButtons(false);
        });

});
