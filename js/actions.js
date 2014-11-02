//actions.js
var fn = {
    init: function(){
        //document.addEventListener("deviceready", yourCallbackFunction, false); //phonga
        document.addEventListener('deviceready',fn.device,false);
        //$('#regSend').click(); //Producir un click
    },
    device: function(){
        if(!fn.estaRegistrado)
            window.location.href = '#reg';
        $('#regTake').tap(myCapture.tomarFoto);
        $('#regSend').tap(fn.registro);
        $('#showStorage').tap(function(){
            alert(fn.storage.getItem('registro'));
        });
        
        $('#nr1 ul[data-role=listview] li').tap(fn.selectTH);
        $('#nr1 div[data-role=navbar] ul li:eq(1)').tap(fn.nrNext);
		
		$('#nr2 ul[data-role=listview] li').tap(fn.selectTH2);
        $('#nr2 div[data-role=navbar] ul li:eq(1)').tap(fn.nrNext2);
		
		$('#nr3 ul[data-role=listview] li').tap(fn.selectTH3);
        $('#nr3 div[data-role=navbar] ul li:eq(1)').tap(fn.nrNext3);
		
        $('#nr4 div[data-role=navbar] ul li:eq(1)').tap(fn.reservar);
        
        document.addEventListener("online",fn.sincronizarReserva,false);
		$('#verHistorial').tap(db.leerHistorial);
    },
    registro: function(){
		var th = $('#nr1').attr('th');
		var th2 = $('#nr2').attr('th2');
		var th3 = $('#nr3').attr('th3');
        var usuario = $('#regusr').val();
        var password = $('#regpass').val();
        var notas = $('#regnot').val();
        var foto = $('#regTake').attr('rel');
        if(usuario != '' && password != '' && th != '' && th2 != '' && th3 != ''){
            //Enviar datos al Servidor.
            fn.enviarRegistro(usuario, password, notas, th, th2, th3, foto);
        }else{
            navigator.notification.alert("Todos los campos son requeridos.",null,'Error','Aceptar');
        } 
    },
    enviarRegistro: function(usuario, password, notas, th, th2, th3, foto){
        $.mobile.loading( 'show' );
        $.ajax({
            type: "POST",
            url: "http://50.62.9.206/~srealms/sige_movil/test.php",
            data: {usuario:usuario,password:password,notas:notas,th:th,th2:th2,th3:th3}
        }).done(function(respuesta){
            if( respuesta == '1' ){
                myTransfer.subir(foto, "http://50.62.9.206/~srealms/sige_movil/test.php");
            }
        });
    },
    enviarReserva: function(th, th2, th3){
        $.mobile.loading( 'show' );
        $.ajax({
            type: "POST",
            url: "http://50.62.9.206/~srealms/sige_movil/test.php",
            data: {funcionarios:th,propaganda:th2,puntualidad:th3}
        }).done(function(respuesta){
            if( respuesta == '1' ){
                db.agregarHistorial(th,th2,th3);
            }
        });
    },
    storage: window.localStorage,
    estaRegistrado: function(){
        if(fn.storage.getItem('registro') == 1)
            return true;
        else
            return false;
    },
    selectTH: function(){
        if($(this).index()>0){
            $('#nr1 ul[data-role=listview] li a').css('background-color','');
            $(this).find('a').css('background-color','#a9a9a9');
            $('#nr1').attr('th',$(this).index());
        }
    },
	 selectTH2: function(){
        if($(this).index()>0){
            $('#nr2 ul[data-role=listview] li a').css('background-color','');
            $(this).find('a').css('background-color','#a9a9a9');
            $('#nr2').attr('th2',$(this).index());
        }
    },
	 selectTH3: function(){
        if($(this).index()>0){
            $('#nr3 ul[data-role=listview] li a').css('background-color','');
            $(this).find('a').css('background-color','#a9a9a9');
            $('#nr3').attr('th3',$(this).index());
        }
    },
    nrNext: function(){
        if($('#nr1').attr('th') != undefined && $('#nr1').attr('th') != ''){
            window.location.href = "#nr2";
        }else{
            alert('Es necesario seleccionar una opción');
        }
    },
	 nrNext2: function(){
        if($('#nr2').attr('th2') != undefined && $('#nr2').attr('th2') != ''){
            window.location.href = "#nr3";
        }else{
            alert('Es necesario seleccionar una opción');
        }
    },
	 nrNext3: function(){
        if($('#nr3').attr('th3') != undefined && $('#nr3').attr('th3') != ''){
            window.location.href = "#nr4";
        }else{
            alert('Es necesario seleccionar una opción');
        }
    },
	
    reservar: function(){
        var th = $('#nr1').attr('th');
		var th2 = $('#nr2').attr('th2');
		var th3 = $('#nr3').attr('th3');
       
        
        if(th != '' && th2 != '' && th3 != ''){
            if(connection.estaConectado()){
                //Enviar Reserva a servidor
                fn.enviarReserva(th,th2,th3);
            }else{
                //Guardar los datos hasta conexión
                $.mobile.loading( 'show' );
                db.agregarPendientes(th,th2,th3);
            }
        }else{
            alert('Todos los campos son requeridos');
        }
    },
    sincronizarReserva: function(){
        db.leerPendientes();
    }
};
$(fn.init);