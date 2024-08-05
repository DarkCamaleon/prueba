console.log('janoh');
console.log($("#usuario").val());
$('#usuario').click(function(){
  $.ajax({
    url: "../view/layouts/respuesta.php",
    type: "POST",
    dataType: "json",
    data:{
      dato1 : 'respuestaPrueba',
      dato2 : $("#usuario").val(),
      dato3 : $("#id-rut").val()
    },
    success: function(resultado, status ){
      console.log(resultado);
      $(".usuario").html(resultado.resp);
      $(".rut").html(resultado.resp2);
    },
    error: function (objeto, texterror) {
      alert("ERROR: Pasó lo siguiente-> " + texterror);
    }
  })
});