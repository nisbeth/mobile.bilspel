$(document).ready(function(){
  $('#home').live("click", function(){
    $('#content').load('index.php #top_index');
   /*   $('#nav').slideToggle(); /* toggle ? */
   });

    $('#about').live("click", function(){
      $('#content').load('content.php #about_content');
      /*  $('#nav').slideToggle(); /* fadeOut ? */
   });
   
    $('#download').live("click", function(){
      $('#content').load('contact.php #download_content');
      /*  $('#nav').slideToggle(); /* fadeOut ? */
   });

});

/*$('body').append('<div id="progress">Loading...</div>');
    $('#progress').remove();*/


$(document).ready(function(){
   $('#shareBtn').live("click", function(){
       $('#share').slideToggle('500');
   });
   
   $(document).ready(function(){
    $('#').fadeIn('1000');
});

});


$(document).ready(function(){
   $('#android').live("click", function(){
       $('#simon').toggle('500');
   });
   $('#webb').live("click", function(){
       $('#emil').toggle('500');
   });
   $('#iphone').live("click", function(){
       $('#andreas').toggle('500');
   });
   $('#manag').live("click", function(){
       $('#jonas').toggle('500');
   });
});