$(document).ready(function(){
    var $regform = $("#reg");
    $.validator.addMethod("noSpace",function(value, element){
        return value == '' || value.trim().length != 0
    }, "Spaces are not allowed");
    if($regform.length){
        $regform.validate({
            rules:{
                username:{
                    required: true,
                    noSpace: true, 
                    minlength: 3
                },
                password:{
                    required: true,
                    minlength: 4
                },
                confirmpass:{
                    required: true,
                    equalTo: '#password'
                },
                email:{
                    required: true,
                    email: true
                },
                gender:{
                    required: true
                },
                textarea:{
                    required: true
                },
                checkbox:{
                    required: true,
                }
            },
            messages:{
                username:{
                    required:'Username is mandatory!',
                    minlength:'Minimum length is 3'
                },
                password:{
                    required:'Password is mandatory!',
                    minlength:'Minimum length is 4'
                },
                confirmpass:{
                    required:'Password is mandatory!',
                    equalTo: 'Confirm your password!'
                },
                email:{
                    required:'Email is mandatory!',
                    email:'Please enter valid email!'
                },
                gender:{
                    required:'Gender is mandatory!'
                },
                textarea:{
                    required:'Feedback is mandatory!'
                },
                checkbox:{
                    required:'Declaration is mandatory!'
                }
            },
            errorPlacement: function(error, element){
                if(element.is(":radio")){
                    error.appendTo(element.parents(".gender"));
                }else if(element.is(":checkbox")){
                    error.appendTo(element.parents(".declaration"));
                }else{
                    error.insertAfter(element);
                }
            }
        })
    }
})