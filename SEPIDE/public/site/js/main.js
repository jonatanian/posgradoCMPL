$( "#elem_estatus" ).change( function() {
  console.log( $( this ).val() );
  if($(this).val() == "ap"){
    $( "#div_estatus_presentado" ).addClass( "hidden" );
    $( "#div_estatus_aprobado" ).removeClass("hidden");
    $( "#div_monto" ).removeClass("hidden");
    $( "#div_notificacion" ).removeClass("hidden");
    //Para Patentes
    $( "#div_fechas_patente" ).addClass( "hidden" );
    $( "#div_notificacion_patente" ).removeClass("hidden");
  }
  else if($(this).val() == "pr"){
    $( "#div_estatus_aprobado" ).addClass( "hidden" );
    $( "#div_monto" ).addClass( "hidden" );
    $( "#div_estatus_presentado" ).removeClass("hidden");
    $( "#div_notificacion" ).addClass("hidden");
    //Para Patentes
    $( "#div_fechas_patente" ).removeClass( "hidden" );
    $( "#div_notificacion_patente" ).addClass("hidden");
  }
  else{
    $( "#div_estatus_aprobado" ).addClass( "hidden" );
    $( "#div_monto" ).addClass( "hidden" );
    $( "#div_estatus_presentado" ).addClass( "hidden" );
    $( "#div_notificacion" ).removeClass("hidden");
    //Para Patentes
    $( "#div_fechas_patente" ).addClass( "hidden" );
    $( "#div_notificacion_patente" ).removeClass("hidden");
  }
});

$( "#elem_estatus_transferencia" ).change( function() {
  if($(this).val() == "ac"){
    $("#div_fecha_transferencia_inicio").removeClass("hidden");
    $("#div_fecha_transferencia_termino").removeClass("hidden");
  }
  else if($(this).val() == "fn"){
    $("#div_fecha_transferencia_inicio").addClass("hidden");
    $("#div_fecha_transferencia_termino").removeClass("hidden");
  }
  else{
    $("#div_fecha_transferencia_inicio").addClass("hidden");
    $("#div_fecha_transferencia_termino").addClass("hidden");
  }
});

$("#elem_registro").change(function(){
  if($(this).val() == "otro"){
    $("#div_otro_registro").removeClass("hidden");
  }
  else{
    $("#div_otro_registro").addClass("hidden");
  }
});

$("#elem_medio").change(function(){
  if($(this).val() == "otro"){
    $("#div_otro").removeClass("hidden");
  }
  else{
    $("#div_otro").addClass("hidden");
  }
});

$("#elem_reg").change(function(){
  if($(this).val() == "otro"){
    $("#div_otro").removeClass("hidden");
  }
  else{
    $("#div_otro").addClass("hidden");
  }
});

$("#elem_fin").change(function(){
  if($(this).val() == "otro"){
    $("#div_otro").removeClass("hidden");
  }
  else{
    $("#div_otro").addClass("hidden");
  }
});

$("#elem_patente").change(function(){
  if($(this).val() == "otro"){
    $("#div_participantes").removeClass("hidden");
  }
  else{
    $("#div_participantes").addClass("hidden");
  }
});
