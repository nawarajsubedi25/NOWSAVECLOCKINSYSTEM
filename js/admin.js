$(document).ready(function () {
    $('#contact_form').bootstrapValidator({
        container: 'popover',
         feedbackIcons: {
            valid: 'glyphicon glyphicon-ok-circle',
            invalid: 'glyphicon glyphicon-remove-circle',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            grounp:'col-sm-4',
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

});
