var personajesMax = $('#cantJug').val();
var pjSelected = '';
var pjSelected2 = '';
var pjSelected3 = '';
var contador = 0;
//$('mandarPj').attr('disabled', 'disabled');
console.log($('#General'));
$(document).ready(function(){
  $('select[name=numJug]').on('click', function(){
    personajesMax = $(this).val();
  });
  $('#btnEmpezar').hover(function(){
    $('#playerUno').val(pjSelected);
    $('#playerDos').val(pjSelected2);
    $('#playerTres').val(pjSelected3);
    console.log(pjSelected);
    console.log(pjSelected2);
    console.log(pjSelected3);
    //alert("si se enviaron ;)");
  });
});

document.getElementById("numPjSelect").innerHTML = 1;
$('#kemonito').attr('checked', 'checked');
$('#mandarPj').on('click', function(){
  personajesMax = $('select[name=numJug]').val();
  
  contador = contador + 1;
  console.log(personajesMax);
  console.log(contador);
  document.getElementById("numPjSelect").innerHTML = contador+1;
  if (contador == personajesMax){
    $('button.btn-close').trigger('click');
    $('.startSelect1').prop('disabled', true);
  }
    
    //$('#Jugadores').modal().hide();
    //$('input[name="personaje[]"]').each(function (){
     // console.log($(this).attr("id"));
    //});
});

$('input[name="personaje[]"]').on('click',function (){
  if (contador == personajesMax) 
    $('#mandarPj').removeAttr('disabled');
 });

$('#kemonito').on('click', function(){
  if (contador===0)
    pjSelected = 'kemonito';
  if (contador===1)
    pjSelected2 = 'kemonito';
  if (contador===2)
    pjSelected3 = 'kemonito';
});

$('#harryPotter').on('click', function(){
  if (contador===0)
    pjSelected = 'harryPotter';
  if (contador===1)
    pjSelected2 = 'harryPotter';
  if (contador===2)
    pjSelected3 = 'harryPotter';
});

$('#perro').on('click', function(){
  if (contador===0)
    pjSelected = 'perro';
  if (contador===1)
    pjSelected2 = 'perro';
  if (contador===2)
    pjSelected3 = 'perro';
});

$('#pikachu').on('click', function(){
  if (contador===0)
    pjSelected = 'pikachu';
  if (contador===1)
    pjSelected2 = 'pikachu';
  if (contador===2)
    pjSelected3 = 'pikachu';
});

$('#robot').on('click', function(){
  if (contador===0)
    pjSelected = 'robot';
  if (contador===1)
    pjSelected2 = 'robot';
  if (contador===2)
    pjSelected3 = 'robot';
});

$('#tabla').on('click', function(){
  if (contador===0)
    pjSelected = 'tabla';
  if (contador===1)
    pjSelected2 = 'tabla';
  if (contador===2)
    pjSelected3 = 'tabla';
});


