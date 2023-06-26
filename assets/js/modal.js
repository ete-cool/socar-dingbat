$("#tryit-close").click(function(){
    $("#try").hide();
    $(".side-tryit").fadeIn();
  });
  
  $(".side-tryit").click(function(){
    $("#try").fadeIn();
    $(".side-tryit").hide();
  });



  $("#hide-film").click(function(){
    $("#hide-film").hide();
    $("#click-film").fadeIn();
  });
  
  $("#click-film").click(function(){
    $("#hide-film").fadeIn();
  });
