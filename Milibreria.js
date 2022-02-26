/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * metodo que permite traer el contenido de la pagina lunes
 * y ser modificado en el archivo index
 * @returns {undefined}
 */
function Empresa() {
   $("#CONTENIDO").html("procesando.....");
   fAjax("Contenido Principal/Nuestra empresa/EmpresaInf.php","a=1",function (datos){
       $("#contenido").html(datos);
});
}
function Arriendo() {
   $("#CONTENIDO").html("procesando.....");
   fAjax("Contenido Principal/Arriendo/Arriendo.php","a=1",function (datos){
       $("#contenido").html(datos);
});
}

function Vacacional() {
   $("#CONTENIDO").html("procesando.....");
   fAjax("Contenido principal/Vacacional/Vacacional.php","a=1",function (datos){
       $("#contenido").html(datos);
});
}

function Venta() {
   $("#CONTENIDO").html("procesando.....");
   fAjax("Contenido principal/Ventas/Venta.php","a=1",function (datos){
       $("#contenido").html(datos);
});
}

function Ingresar() {
   $("#CONTENIDO").html("procesando.....");
   fAjax("Contenido principal/Ingresar/Ingresar.php","a=1",function (datos){
       $("#contenido").html(datos);
});
}


function Registrarse() {
   $("#CONTENIDO").html("procesando.....");
   fAjax("Contenido principal/Ingresar/Registrarse.php","a=1",function (datos){
       $("#contenido").html(datos);
});
}
function index() {
   $("#CONTENIDO").html("procesando.....");
   fAjax("index.php","a=1",function (datos){
       $("#contenido").html(datos);
});
}
  
  
  
function fAjax(url, parametros,ejecutar){
    $.ajax({
        type: "POST",
        url: url,
        dataType: "html",
        data: parametros,
        beforesend: function (){
         },error:function(){
             alert("HAY UN ERROR DE CONEXION CON EL SERVIDOR")
         },
         complete: function(){
           
         },
         success: function (data){
             ejecutar(data);
         }            
           });
}
