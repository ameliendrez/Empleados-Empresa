$(document).ready(function(){
  "use strict";

  $("body").on("click", "#search", function(e){
    e.preventDefault();
    let form = $("#form-search-employee").serialize();
    $.post("get-employee-by-id", form, function(data, status){
        $("#searchFilter").html(data);
    });
  })

  $("body").on("click", "#add-employee", function(e){
    e.preventDefault();
    if(!datosCompletos()){
        $("#msj-error").removeClass("hidden");
        return false;
    } else{
        $("#msj-error").addClass("hidden");
    }
    let form = $("#form-employee").serialize();
    $.post("add-employee", form, function(data, status){
        $("#list-employees").html(data);
        clearForm();
    });
  })

  $("body").on("click", "#clean-form", function (e) {
      e.preventDefault();
      clearForm();
  })

  $("body").on("change", "#type-employee", function (e) {
    e.preventDefault();
    $('#type-language option').prop('selected', false);
    $('#type-design option').prop('selected', false);
    if($(this).val() == 1){
        $("#type-language-selector").removeClass("hidden");
        $("#type-design-selector").addClass("hidden");
        $("#type-language").prop("disabled", false);
    }
    else if($(this).val() == 2){
        $("#type-language-selector").addClass("hidden");
        $("#type-design-selector").removeClass("hidden");
        $("#type-design").prop("disabled", false);
    }
    else{
        $("#type-language").prop("disabled", true);
        $("#type-design").prop("disabled", true);
    }
  });
});

function clearForm() {
    $("#name").val("");
    $("#last-name").val("");
    $("#age").val(""); 
    $('#type-language option').prop('selected', false);
    $('#type-employee option').prop('selected', false);
    $('#type-design option').prop('selected', false);
    $("#type-language").prop("disabled", true);
    $("#type-design").prop("disabled", true);
    $("#msj-error").addClass("hidden");
}

function datosCompletos(){
    if($("#name").val() == null || $("#name").val() == ""){
        return false;
    }

    if($("#last-name").val() == null || $("#last-name").val() == ""){
        return false;
    }

    if($("#age").val() == null || $("#age").val() == ""){
        return false;
    }

    let typeEmployee = $("#type-employee").val();

    if(typeEmployee == null || typeEmployee == ""){
        return false;
    }

    if(typeEmployee == 1){
        if($("#type-language").val() == null || $("#type-language").val() == ""){
            return false;
        }
    }
    else if(typeEmployee == 2){
        if($("#type-design").val() == null || $("#type-design").val() == ""){
            return false;
        }
    }

    return true;
}
