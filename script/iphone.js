$(document).ready(function(){
  $('#home').click(function(){
    $('#content').load('index.php #content');
   /*   $('#nav').slideToggle(); /* toggle ? */
   });

    $('#about').click(function(){
      $('#content').load('content.php #about_content');
      /*  $('#nav').slideToggle(); /* fadeOut ? */
   });

    $('#contact').click(function(){
      $('#content').load('content.php #contact_content');
     /*   $('#nav').slideToggle(); /* fadeOut ? */
   });
   
    $('#download').click(function(){
      $('#content').load('content.php #download_content');
      /*  $('#nav').slideToggle(); /* fadeOut ? */
   });

    $('#trailerlogo').click(function(){
      $('#content').load('content.php #trailer');
      /*  $('#nav').slideToggle();  fadeOut ? */
   });

});

$(document).ready(function () {
   $('#shareBtn').click(function () {
       $('#share').hide('500');
   });
});


/*$('body').append('<div id="progress">Loading...</div>');
    $('#progress').remove();*/


