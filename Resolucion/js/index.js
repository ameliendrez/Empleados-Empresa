$(document).ready(function(){
  "use strict";

  function callAjax(dir) {
      $.ajax({
          "url" : dir,
          "method" : "GET",
          "data-type" : "HTML",
          "success" : mostrarContenido,
          "error": handleError
      }); 
  }

  function callPostAjax(dir, data) { 
      $.ajax({
          "url" : dir,
          "method" : "POST",
          "data-type" : "HTML",
          "data" : data,
          "success" : mostrarContenido,
          "error": handleError
      });
   }

  function handleError(xmlhr, r, error) {
      console.log(error); 
  }

  function mostrarContenido (data, textStatus, jqXHR) {
      $(".administrador-contenido").html(data);
  }


});