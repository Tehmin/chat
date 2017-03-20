jQuery('document').ready(function () {
    // name validation
    var nameregex = /^[a-zA-Z ]+$/;

    jQuery.validator.addMethod("validname", function (value, element) {
        return this.optional(element) || nameregex.test(value);
    });

    // valid email pattern
    var eregex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    jQuery.validator.addMethod("validemail", function (value, element) {
        return this.optional(element) || eregex.test(value);
    });


    jQuery("form").each(function () {
        jQuery(this).validate({

            rules: {
                name: {
                    required: true,
                    validname: true,
                    minlength: 4
                },
                email: {
                    required: true,
                    validemail: true
                },
                password: {
                    required: true,
                    minlength: 6,
                    maxlength: 15
                },
                cpassword: {
                    required: true,
                    equalTo: '#password'
                }
            },
            messages: {
                name: {
                    required: "Please Enter User Name",
                    validname: "Name must contain only alphabets and space",
                    minlength: "Your Name is Too Short"
                },
                email: {
                    required: "Please Enter Email Address",
                    validemail: "Enter Valid Email Address"
                },
                password: {
                    required: "Please Enter Password",
                    minlength: "Password at least have 6 characters"
                },
                cpassword: {
                    required: "Please Retype your Password",
                    equalTo: "Password Did not Match !"
                }
            },
            errorPlacement: function (error, element) {
                jQuery(element).closest('.form-group').find('.help-block').html(error.html());
            },
            highlight: function (element) {
                jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            },
            unhighlight: function (element, errorClass, validClass) {
                jQuery(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                jQuery(element).closest('.form-group').find('.help-block').html('');
            },

            submitHandler: function (form) {
                //form.button();
                //alert('ok');
                var formData = $(form).serialize();

                $.ajax({
                    url: "",
                    type: "POST",
                    dataType: "json",
                    data: formData,
                    success: function (data) {
                        console.log(data);
                        if(data.success){


                        }else if(data.error){
                            alert(data.error);
                        }
                        $(".username").val('');
                        $(".email").val('');
                        $(".password").val('');
                        $(".re_password").val('');
                    },
                    error: function () {
                        //alert('error')
                    }
                })
            }
        });
    })
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
})
