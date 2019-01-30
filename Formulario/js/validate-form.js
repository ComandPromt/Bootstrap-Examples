$('document').ready(function() {
               
    $("#register-form").validate({
        rules:
        {
            provincia: {
                required: true
            },
            ciudad: {
                required: true
            },
            tipo: {
                required: true
            },
            descpVia: {
                required: true
            },
            numero: {
                required: true,
                number: true
            },
            letra: {
                required: true
            },
            puerta: {
                required: true
            },
            bloque: {
                required: true
            },
            portal: {
                required: true
            },            
            escalera: {
                required: true
            },
            planta: {
                required: true
            },
            km: {
                required: true
            },
            hct: {
                required: true
            },
            cp: {
                required: true,
                number: true
            },                                                                                                         
        },
        messages:
        {
            provincia: {
                required: "Por favor, indique una provincia."
            },
            ciudad: {
                required: "Por favor, indique una ciudad."
            },
            tipo:{
                required: "Por favor, indique un tipo de vía."
            },
            descpVia:{
                required: "Por favor, indique una descripción a la vía."
            },
            numero:{
                required: "Por favor, indique un número.",
                numero: "Indique un número válido"
            },
            letra:{
                required: "Por favor, indique un número."
            },
            puerta:{
                required: "Por favor, indique un puerta."
            },            
            bloque:{
                required: "Por favor, indique un bloque."
            },
            portal:{
                required: "Por favor, indique un portal."
            },            
            escalera:{
                required: "Por favor, indique una escalera."
            },
            planta:{
                required: "Por favor, indique una planta."
            },
            km:{
                required: "Por favor, indique un kilometro."
            },
            hct:{
                required: "Por favor, indique un hectómetro."
            },
            cp:{
                required: "Por favor, indique un número.",
                numero: "Indique un código postal válido"
            },                                                                                                                       
        },
        errorPlacement : function(error, element) {
            $(element).closest('.form-group').find('.help-block').html(error.html());
        },
        highlight : function(element) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
            $(element).closest('.form-group').find('.help-block').html('');
        }, 
        submitHandler: function(form) {
            form.submit();
            alert('ok');
        }
    });
        
        
   
})