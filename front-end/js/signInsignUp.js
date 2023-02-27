function signUp(){
    if($(".body__signup--main").css("display") == "none"){
      
      $(".body__signup--main").css({"display":"flex","position":"fixed"
    ,"top":"0px","left":"-30px","opacity":"1"}); 
    
    
    }
    else if( $(".body__signup--main").css("display") == "flex"){
      $(".body__signup--main").css({"display":"none"});
      
      
    }
   
  }