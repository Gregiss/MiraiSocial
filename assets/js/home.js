var login = 1;

$(".centerbro").click(function(){
    if(login == 1){
        $("#register").css("left", "50%");
        $("#login").css("left", "200%");
        login = 0;
        $(".cadastrar").html('<i class="fas fa-sign-in-alt"></i>');
    } else{
        login = 1;
        $("#register").css("left", "-200%");
        $("#login").css("left", "50%");
        $(".cadastrar").html('<i class="fas fa-plus"></i>');
    }
});