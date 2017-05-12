$( "#elem_estatus" ).change( function() {
  console.log( $( this ).val() );
  if($(this).val() == "ap"){
    $( "#div_estatus_presentado" ).addClass( "hidden" );
    $( "#div_estatus_aprobado" ).removeClass("hidden");
    $( "#div_monto" ).removeClass("hidden");
    $( "#div_notificacion" ).removeClass("hidden");
  }
  else if($(this).val() == "pr"){
    $( "#div_estatus_aprobado" ).addClass( "hidden" );
    $( "#div_monto" ).addClass( "hidden" );
    $( "#div_estatus_presentado" ).removeClass("hidden");
    $( "#div_notificacion" ).addClass("hidden");
  }
  else{
    $( "#div_estatus_aprobado" ).addClass( "hidden" );
    $( "#div_monto" ).addClass( "hidden" );
    $( "#div_estatus_presentado" ).addClass( "hidden" );
    $( "#div_notificacion" ).removeClass("hidden");
  }
});