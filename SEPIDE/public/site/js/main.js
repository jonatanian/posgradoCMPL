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

$("#elem_financ").change(function(){
  if($(this).val() == 0){
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

$("#elem_invitado").change(function(){
  if($(this).val() == "Invitado"){
    $("#div_invitados").removeClass("hidden");
  }
  else{
    $("#div_invitados").addClass("hidden");
  }
});

$("#elem_direccion").change(function(){
  if($(this).val() == "CMP+L"){
    $("#div_pro_cmpl").removeClass("hidden");
    $("#div_lgac_cmpl").removeClass("hidden");
    $("#div_dir").addClass("hidden");
    $("#div_pro_ins").addClass("hidden");
    $("#div_lgac_ins").addClass("hidden");
  }
  else if($(this).val() == "Institucional"){
    $("#div_pro_cmpl").addClass("hidden");
    $("#div_lgac_cmpl").addClass("hidden");
    $("#div_dir").removeClass("hidden");
    $("#div_pro_ins").removeClass("hidden");
    $("#div_lgac_ins").removeClass("hidden");
  }
  else{
    $("#div_pro_cmpl").addClass("hidden");
    $("#div_dir").addClass("hidden");
    $("#div_lgac_cmpl").addClass("hidden");
    $("#div_pro_ins").addClass("hidden");
    $("#div_lgac_ins").addClass("hidden");
  }
});

$("#elem_soft").change(function(){
  if($(this).val() == "ap"){
    $("#div_fecha_ap").removeClass("hidden");
    $("#div_fecha_pr").addClass("hidden");
  }
  else if($(this).val() == "pr"){
    $("#div_fecha_pr").removeClass("hidden");
    $("#div_fecha_ap").addClass("hidden");
  }
  else{
    $("#div_fecha_pr").addClass("hidden");
    $("#div_fecha_ap").addClass("hidden");
  }
});

$("#elem_alumno").change(function(){
  if($(this).val() == "De estudiante"){
    $("#div_alumno").removeClass("hidden");
  }
  else{
    $("#div_invitados").addClass("hidden");
  }
});

$("#elem_dir").change(function(){
  if($(this).val() == "En desarrollo"){
    $("#div_dir_lim").removeClass("hidden");
    $("#div_dir_ter").addClass("hidden");
  }
  else if($(this).val() == "Terminada"){
    $("#div_dir_ter").removeClass("hidden");
    $("#div_dir_lim").addClass("hidden");
  }
  else{
    $("#div_dir_lim").addClass("hidden");
    $("#div_dir_ter").addClass("hidden");
  }
});