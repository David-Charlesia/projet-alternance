$(document).ready(function()
{
  var val="<?php echo $essai?>";
  $('#test').append(val);
  console.log(val);
  $('#btn_launch').click(function(){
    var types=[];
    if($('#QUESTIONS_RESEAUX').is(':checked')){
      types.push("QUESTIONS_RESEAUX");
    }
    if($('#QUESTIONS_SECU').is(':checked')){
      types.push("QUESTIONS_SECU");
    }
    if($('#QUESTIONS_GEST').is(':checked')){
      types.push("QUESTIONS_GEST");
    }

    if(types.length==0){
      $('#info_error').text('Vous devez sélectionner au moins un champs');
    }else{
      console.log(types);
    }
  })

})
