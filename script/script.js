$(document).ready(function () {
   $('#shareBtn').click(function () {
       $('#share').Toggle('500');
   });
});









/*$(document).ready(function(){
    loadPage();
});

    function loadPage(url){
    $('body').append('<div id="progress">Loading...</div>');
        if (url == undefined){
            $('#content').load('index.php #content', hijackLinks);
        }else{
            $('#content').load(url + '#container', hijackLinks);
        }
    }
        function hijackLinks(){
            $('#container a').click(function(e){
                e.preventDefault();
                loadPage(e.target.href);
            });
      $('#progress').remove();
        } */


/*$('#content').load('index.php');

$('#container').load('index.php', function(){
    alert('Load was performed');
});

$(document).ready(function(){
    $('#leftButton').click(function(){
        $('#nav').slideToggle('fast');
    });
});

$(document).ready(function(){
    $('#button')
});

*/