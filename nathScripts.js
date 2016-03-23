$("#homebtn").click(function(){
    if($("#work").is(":visible")) {
      $("#work").hide();
    }
    if($("#contact").is(":visible")) {
      $("#contact").hide();
    }
    if($("#home").is(":visible")) {
      $("#home").hide();
    }
    if(!$("#home").is(":visible")){
      $( "#navBar" ).hide();
      $("#home").fadeIn( "slow", function() {
      });
      $( "#navBar" ).fadeIn( "slow", function() {
      });
    }
});

$("#wrkbtn").click(function(){
    if($("#home").is(":visible")) {
      $("#home").hide();
    }
    if($("#contact").is(":visible")) {
      $("#contact").hide();
    }
    if($("#work").is(":visible")) {
      $("#work").hide();
    }
    if(!$("#work").is(":visible")){
      $( "#navBar" ).hide();
      $( "#navBar" ).fadeIn( "fast", function() {
        $( "#work" ).fadeIn( "fast", function() {
          $('html, body').animate({
            scrollTop: $("#navBar").offset().top + $('window').height()
          }, 1000);
        });
      });
    }
});

$("#cntctbtn").click(function(){
    if($("#home").is(":visible")) {
      $("#home").hide();
    }
    if($("#work").is(":visible")) {
      $("#work").hide();
    }
    if($("#contact").is(":visible")) {
      $("#contact").hide();
    }
    if(!$("#contact").is(":visible")){
      $( "#navBar" ).hide();
      $("#contact").fadeIn( "slow", function() {
      });
      $( "#navBar" ).fadeIn( "slow", function() {
      });
    }
});