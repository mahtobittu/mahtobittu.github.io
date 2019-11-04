
$(document).ready(function () {
    
    
    $("h3").css("color" , "white");
    $("li").css("margin-bottom" , "5px");
    $("#scrolld").animate({height :'30px'}, "slow");
    //$("li").css("font-size" , "larger");
    // $( document ).on( "mousemove", function(){
    //   $( "#span0" ).text(  event.pageX );
    //   $( "#span1" ).text( event.pageY);
    //   $("#span0").css("color" , "red");
    //   var f = event.pageX ;
    //   console.log(f);
    //   //$("#logo").css("transform" , "rotate(" + f +"deg)" );
    //   $("#logo").css("letter-spacing",  f/50 +"px" );
      
    // });

    // function nn(){

    //   var x = Math.random();
    //   return x;

    // }

    


    
    
    
    
  

  $("#hamRaper").click(function() {

    $(this).toggleClass( "hamRaper1" );
    var g = $(this).width();

    //$("").text(g);
     
     $("#hidethis").toggleClass( "hamhide hamburge" );
    // $(".hamburger").css( "margin" , "-1px" );
      $("#ham11").toggleClass( "ham1 hamburger" );
      $("#ham12").toggleClass( "ham2 hamburger" );
     // $("#menue1").css("display" , "flex");
      $("#menue1").toggleClass( "navi1 navi" );

      //$("#hidethis").toggleClass( "hamhide" );
     // var offset = $(body).offset();
      //var x = mouseX - 

      
      
    
    });
    
   // ScrollReveal().reveal('.hack', { delay: 250 });  
    
    
});
   
    



    
    
         
    
// $("button").on("click" ,function(){
    
//            c = $(this).text();
//            //console.log(c);
//            var x = c;
//            var rnd = Math.floor(Math.random()*50);
//            for (var i = 1; i <= rnd; i++) {
       
//                cat = $("#rock").append("<" + x + ">" + x + "</" + x + ">");
       
//            }

        
//     });
  

