$('document').ready(function() {
               
    $("#register-form").validate({
        rules:
        {
            exp: {
                required: true
            },
            serie: {
                required: true
            },
            numero: {
                required: true
            },
            exp_ref: {
                required: true
            },
            dpto: {
                required: true
            },
            contacto: {
                required: true
            },
            op_contable: {
                required: true
            },
            desde: {
                required: true
            },
            hasta: {
                required: true
            },            
            descp_bien_servi: {
                required: true
            },
            cantidad: {
                required: true
            },            
            imp_unit: {
                required: true
            },
            base1: {
                required: true
            },
            base2: {
                required: true
            },
            base3: {
                required: true
                
            }, 
            tipo_desc: {
                required: true
            },
            base_desc: {
                required: true
            },
            otro: {
                required: true
            },
            otro2: {
                required: true
            },                                                                                                                                                      
        },
        messages:
        {
            exp: {
                required: "Por favor, indique un expediente."
            },
            serie: {
                required: "Por favor, indique una serie."
            },
            numero:{
                required: "Por favor, indique un numero."
            },
            exp_ref:{
                required: "Por favor, indique una referencia expediente."
            },
            dpto:{
                required: "Por favor, indique un departamento."
            },
            contacto:{
                required: "Por favor, indique un contacto."
            },
            op_contable:{
                required: "Por favor, indique una operacion contable."
            },            
            desde:{
                required: "Por favor, indique una fecha desde."
            },
            hasta:{
                required: "Por favor, indique una fecha hasta."
            },            
            descp_bien_servi:{
                required: "Por favor, indique un descripcion bien y servicio."
            },
            cantidad:{
                required: "Por favor, indique una cantidad."
            },
            imp_unit:{
                required: "Por favor, indique un importe unitario."
            },
            base1:{
                required: "Por favor, indique una base."
            },
            base2:{
                required: "Por favor, indique una base."
                
            },
            base3:{
                required: "Por favor, indique una base."
            }, 
            tipo_desc:{
                required: "Por favor, indique un tipo descuento."
            }, 
            base_desc:{
                required: "Por favor, indique un descuento base."
            }, 
            otro:{
                required: "Por favor, indique otros."
            }, 
            otro2:{
                required: "Por favor, indique otros."
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