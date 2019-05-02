var login = 1;

$(".centerbro").click(function(){
    if(login == 1){
        $("#register").css("left", "50%");
        $("#login").css("left", "200%");
        login = 0;
        $(".cadastrar").html('<i class="fas fa-sign-in-alt"></i>');
		$(".centerbro .desc").html("Login");
		$(".centerbro .desc").css("left" ,"0px");
    } else{
        login = 1;
        $("#register").css("left", "-200%");
        $("#login").css("left", "50%");
        $(".cadastrar").html('<i class="fas fa-plus"></i>');
		$(".centerbro .desc").html("Registrar");	
		$(".centerbro .desc").css("left" ,"-9px");
    }
});

$(".centerbro").mouseover(function(){
	$(".centerbro .desc").css("opacity" ,"1");
});

$(".centerbro").mouseout(function(){
	$(".centerbro .desc").css("opacity" ,"0");
});