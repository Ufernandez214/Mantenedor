document.addEventListener('DOMContentLoaded', function(){
ftnUsuariosTotales();
});
function ftnUsuariosActivos(){
$.post( "http://localhost/Mantenedor/Dashboard/getUsuariosActivos",)
  .done(function(success) {
  	ftnUsuariosInactivos();
    var objData = JSON.parse(success);
    var contador = parseInt($(".contador").html());
    var activos = parseInt(objData.Data.msg[0].Activos);
    for (i=1;i<= activos;i++) {
    	 $("#total-activos").text(i);
    }
  });
}
function ftnUsuariosTotales(){
   $.post( "http://localhost/Mantenedor/Dashboard/getUsuariosTotales",)
  .done(function(success) {
  	ftnUsuariosActivos();
    var objData = JSON.parse(success);
    var contador = parseInt($(".contador").html());
    var activos = parseInt(objData.Data.msg[0].Totales);
    for (i=1;i<= activos;i++) {
    	 $("#total-registrados").text(i);
    }
  });
}
function ftnUsuariosInactivos(){
   $.post( "http://localhost/Mantenedor/Dashboard/getUsuariosInactivos",)
  .done(function(success) {
    var objData = JSON.parse(success);
    var contador = parseInt($(".contador").html());
    var activos = parseInt(objData.Data.msg[0].Inactivos);
    for (i=1;i<= activos;i++) {
    	 $("#total-inactivos").text(i);
    }
  });
}