function onSignIn(googleUser)
{
	var profile=googleUser.getBasicProfile().getName();
	$(".g-signin2").css("display","none"); //jquery, display none bcz we don't have to display sign in button once user is logged in
	$(".data").css("display","block");// if user signed in then display his profile info
    $("#pic").attr('src',profile.getImageUrl());
    $("email").text(profile.getEmail());

document.write(5 + 6);
}
function signOut(){
	var auth2=gapi.auth2.getAuthInstance();
	auth2.signOut().then(function(){
alert("You have been successfully signed out");
$(".g-signin2").css("display","block"); 
$(".data").css("display","none");
	}
} 