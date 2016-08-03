$(function () {
  $('.carousel').carousel();

    var divCheck = $('#divCheck'); 
    divCheck.css('display', 'none'); 
    
		$("#radio-0").click(function(){
            $('#radio0').prop('checked', true)
            divCheck.show("swing");
		 });

		$("#radio-1").click(function(){
			divCheck.hide("swing");
            $('#radio1').prop('checked', true)
		 });

// picker del formulario
var picker = new Pikaday(
    {
        field: document.getElementById('check'),    
        position: 'bottom right',
        firstDay: 1,
        format: 'DD-MM-YYYY',
        minDate: new Date(),
        maxDate: new Date(2020, 12, 31),
        yearRange: [2000,2020]
    });


    // validacion de correo nombre y fecha

    $('#form_log').submit(function(e){

        var email= $("#txtmail").val();
        var nombre = $("#txtnombre").val();
        var fecha = $("#check").val();
            if (email == "" || nombre == "") {
                
                    showAlert()
                    return false

            } else {
                
                if($('#radio0').prop('checked')){

                    // comprobar que es una fecha el contenido
                    if(!moment(fecha, 'dd/mm/YYYY').isValid()){
                        showAlert()
                        return false
                    }

                }
                return true;
            }

        });

});


function showAlert(){

    $( "#alerta" ).addClass("alert alert-danger text-center")
    $( "#alerta" ).html("<strong><i class='fa fa-exclamation-triangle' aria-hidden='true'></i></strong>  Debes indicar la fecha de salida.");  
    //class="alert alert-danger text-center" 
    setTimeout(function(){

    $( "#alerta" ).html("");
    $( "#alerta" ).removeClass("alert alert-danger text-center");
    }, 4000);
        

}