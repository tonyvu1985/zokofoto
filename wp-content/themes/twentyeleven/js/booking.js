function defaultchoosepackage(){
		// product seesion package disable true
		var productsessionnodes = document.getElementById("product-session").getElementsByTagName('*');
		var individualchoicenodes = document.getElementById("individual-choice").getElementsByTagName('*');
		
		document.getElementById("specialpackage").checked = true;
		//fade in
		document.getElementById("special-package").style.opacity=1;
		//fade out
		document.getElementById("product-session").style.opacity=0.3;
		document.getElementById("individual-choice").style.opacity=0.3;
		for(var i = 0; i < productsessionnodes.length; i++)
		{
			productsessionnodes[i].disabled = true;
			productsessionnodes[i].checked = false;
		}
	
		// individual choice package disable true
	
		for(var i = 0; i < individualchoicenodes.length; i++)
		{
			individualchoicenodes[i].disabled = true;
			individualchoicenodes[i].checked = false;
		}
}
// choose the package submit button

function choosepackage(packagename){
//	alert(packagename.name);
	var detailofpackage;
//	document.getElementById("detailofpackage").value = "";
	var productsessionnodes = document.getElementById("product-session").getElementsByTagName('*');
	var individualchoicenodes = document.getElementById("individual-choice").getElementsByTagName('*');
	
	if(packagename.name == "choose-special-package"){
		detailofpackage ="Special package";
	}
	
	if(packagename.name == "choose-individual-choice"){
		detailofpackage ="Individual Choice";
		for(var i = 0; i < individualchoicenodes.length; i++)
		{
			if(individualchoicenodes[i].checked == true){
				detailofpackage = detailofpackage + individualchoicenodes[i].value;
			}
		}
	}
	
	if(packagename.name == "choose-product-session"){
		detailofpackage ="Product session";
		for(var i = 0; i < productsessionnodes.length; i++)
		{
			if(productsessionnodes[i].checked == true){
				detailofpackage = detailofpackage + productsessionnodes[i].value;
			}
		}
	}
	document.getElementById("detailofpackage").value = detailofpackage;
}

// --------------------------------
function checkpackage(name){
	var productsessionnodes = document.getElementById("product-session").getElementsByTagName('*');
	var individualchoicenodes = document.getElementById("individual-choice").getElementsByTagName('*');

//	alert(name.value);
	if (name.value == "special package")
	{
		
		//fade in
		document.getElementById("special-package").style.opacity=1;
		//fade out
		document.getElementById("product-session").style.opacity=0.3;
		document.getElementById("individual-choice").style.opacity=0.3;
		
		// product seesion package disable true
		
		for(var i = 0; i < productsessionnodes.length; i++)
		{
			productsessionnodes[i].disabled = true;
			productsessionnodes[i].checked = false;
		}
	
		// individual choice package disable true
	
		for(var i = 0; i < individualchoicenodes.length; i++)
		{
			individualchoicenodes[i].disabled = true;
			individualchoicenodes[i].checked = false;
		}
	}
	
	if (name.value == "individual choice package"){
		//fade in
		document.getElementById("individual-choice").style.opacity=1;
		//fade out
		document.getElementById("product-session").style.opacity=0.3;
		document.getElementById("special-package").style.opacity=0.3;
		
		// product seesion package disable true
		for(var i = 0; i < productsessionnodes.length; i++)
		{
			productsessionnodes[i].disabled = true;
			productsessionnodes[i].checked = false;
		}
	
		// individual choice package disable false
		for(var i = 0; i < individualchoicenodes.length; i++)
		{
			individualchoicenodes[i].disabled = false;
			individualchoicenodes[i].checked = false;
		}
		
	}
	if (name.value == "product session package"){
		//fade in
		document.getElementById("product-session").style.opacity=1;
		//fade out
		document.getElementById("individual-choice").style.opacity=0.3;
		document.getElementById("special-package").style.opacity=0.3;
		
		// product seesion package disable true
		for(var i = 0; i < productsessionnodes.length; i++)
		{#cont
			productsessionnodes[i].disabled = false;
			productsessionnodes[i].checked = false;
		}
	
		// individual choice package disable false
		for(var i = 0; i < individualchoicenodes.length; i++)
		{
			individualchoicenodes[i].disabled = true;
			individualchoicenodes[i].checked = false;
		}
	}
	
}


function validateEmail(email) {
var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
return reg.test(email);
}

$(document).ready(function() {
$(".modalbox").fancybox();
$("#contact").submit(function() { return false; });


$("#send").on("click", function(){
var emailval = $("#email").val();
var msgval = $("#msg").val();
var msglen = msgval.length;
var mailvalid = validateEmail(emailval);

if(mailvalid == false) {
$("#email").addClass("error");
}
else if(mailvalid == true){
$("#email").removeClass("error");
}

if(msglen < 4) {
$("#msg").addClass("error");
}
else if(msglen >= 4){
$("#msg").removeClass("error");
}

if(mailvalid == true && msglen >= 4) {
// if both validate we attempt to send the e-mail
// first we hide the submit btn so the user doesnt click twice
$("#send").replaceWith("<em>sending...</em>");

$.ajax({
type: 'POST',
url: 'wp-content/themes/twentyeleven/sendmessage.php',
data: $("#contact").serialize(),
success: function(data) {
if(data == "true") {
$("#contact").fadeOut("fast", function(){
$(this).before("<p><strong>Success! Your feedback has been sent, thanks :)</strong></p>");
setTimeout("$.fancybox.close()", 10000);
});
}
}
});
}
});
});

