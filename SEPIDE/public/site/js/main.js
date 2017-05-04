$( "#elem_estatus" ).change( function() {
  console.log( $( this ).val() );
  if($(this).val() == "aprobado"){
    $( "#div_estatus_presentado" ).addClass( "hidden" );
    $( "#div_estatus_aprobado" ).removeClass("hidden");
  }
  else if($(this).val() == "presentado"){
    $( "#div_estatus_aprobado" ).addClass( "hidden" );
    $( "#div_estatus_presentado" ).removeClass("hidden");
  }
  else{
    $( "#div_estatus_aprobado" ).addClass( "hidden" );
    $( "#div_estatus_presentado" ).addClass( "hidden" );
  }
});