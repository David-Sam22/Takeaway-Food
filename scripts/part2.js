
"use strict";


function getCreditType(){
	var CreditType = "Unknown";
	var CreditArray = document.getElementById("Card").getElementsByTagName("input");
	
	for(var i =0;i<CreditArray.length;i++){
		if(CreditArray[i].checked)
				CreditType = CreditArray[i].value;
	}
		return CreditType;

}

function getBooking(){
	if(sessionStorage.firstname != undefined){
		if (sessionStorage.cdrink == 0)
		{
			sessionStorage.quan = 0;
		}else sessionStorage.quan = 1;
		
		document.getElementById("confirm_name").textContent = sessionStorage.firstname + " " + sessionStorage.lastname;
		document.getElementById("confirm_pcontact").textContent = sessionStorage.pcontact;
		document.getElementById("confirm_address").textContent = sessionStorage.street  + ", " + sessionStorage.town  + ", " + sessionStorage.pcode  + ", " + sessionStorage.statec;
		document.getElementById("confirm_phone").textContent = sessionStorage.num;
		document.getElementById("confirm_cmt").textContent = sessionStorage.cmt;
		document.getElementById("confirm_drink").textContent = parseFloat(sessionStorage.cdrink) * sessionStorage.quan + " $ ";
		document.getElementById("confirm_food1").textContent = parseFloat(sessionStorage.cfood1)  + " $ ";
		document.getElementById("confirm_food2").textContent = parseFloat(sessionStorage.cfood2) + " $ ";
		document.getElementById("confirm_desert1").textContent = parseFloat(sessionStorage.cdesert1) + " $ ";
		document.getElementById("confirm_cost").textContent = parseFloat(sessionStorage.cdrink) + parseFloat(sessionStorage.cfood1) + parseFloat(sessionStorage.cfood2) + parseFloat(sessionStorage.cdesert1) + " $ ";
		document.getElementById("confirm_email").textContent = sessionStorage.email;
		
		document.getElementById("quantity").value = sessionStorage.quan;
		document.getElementById("Request").value = sessionStorage.cmt;
		document.getElementById("firstname").value = sessionStorage.firstname;
		document.getElementById("lastname").value = sessionStorage.lastname;
		document.getElementById("pcontact").value = sessionStorage.pcontact;
		document.getElementById("street").value = sessionStorage.street;
		document.getElementById("state").value =sessionStorage.statec;
		document.getElementById("pcode").value =sessionStorage.pcode;
		document.getElementById("town").value =sessionStorage.town;
		document.getElementById("Phone").value = sessionStorage.num;
		document.getElementById("drink").value = sessionStorage.cdrink;
		document.getElementById("desert1").value = sessionStorage.cdesert1;
		document.getElementById("food1").value = sessionStorage.cfood1;
		document.getElementById("food2").value = sessionStorage.cfood2;
		document.getElementById("cost").value = parseFloat(sessionStorage.cdrink) + parseFloat(sessionStorage.cfood1) + parseFloat(sessionStorage.cfood2) + parseFloat(sessionStorage.cdesert1) + " $ ";
		document.getElementById("email").value = sessionStorage.email;
	}
}

function cancelBooking(){
	window.location = "index.html";
}


function getOrder(arr){
	var temp = "Unknown";
	var tempArray = arr;
	
	for(var i =0;i<tempArray.length;i++){
		if(tempArray[i].selected)
			temp = tempArray[i].value;
	}
	if(temp == "")
	{
			return 0;	
	}else return temp;
	
}

function getExtra(ext){
	var temp = "Unknown";
	var tempArray = ext;
	
	for(var i =0;i<tempArray.length;i++)
	{
		if(tempArray[i].checked){
			temp = tempArray[i].value;
			return temp;
		}
	}
	
	  if (temp = "Unknown")
	  {
		return temp = 0;
	  }
}

function checkundefined(val){
	var value = val;
	
		if (typeof value === 'string'){
			return value = 0;
		}
}

function storeBooking(firstname,lastname,pcontact, num, statec,street,pcode,town,cmt,cfood1,cfood2,cdesert1,cdrink,quan,email){
	sessionStorage.firstname = firstname;
	sessionStorage.lastname = lastname;
	sessionStorage.pcontact = pcontact;
	sessionStorage.num = num;
	sessionStorage.statec = statec;
	sessionStorage.street = street;
	sessionStorage.pcode = pcode;
	sessionStorage.town = town;
	sessionStorage.cmt = cmt;
	sessionStorage.cfood1 = cfood1;
	sessionStorage.cfood2 = cfood2;
	sessionStorage.cdesert1 = cdesert1;
	sessionStorage.cdrink = cdrink;
	sessionStorage.quan = quan;
	sessionStorage.email = email;
}

function validate(){
	if(document.getElementById("RegForm"))
	{
	var errMsg = "";
	var result = true;
	var statec = getOrder(document.getElementById("State").getElementsByTagName("option"));
	var pcode = document.getElementById("Post").value;
	var firstname = document.getElementById("First").value;
	var lastname = document.getElementById("Last").value;
	var num = document.getElementById("Phone").value;
	var street = document.getElementById("Street").value;
	var pcode = document.getElementById("Post").value;
	var town = document.getElementById("Town").value;
	var cmt = document.getElementById("Request").value;
	var email = document.getElementById("email").value;
	
	var pcontact = getExtra(document.getElementsByName("Con"));
	var cdrink = getOrder(document.getElementById("OrderD3").getElementsByTagName("option"));
	var quan = document.getElementById("Quantity").value;
	var cdesert1 = getOrder(document.getElementById("OrderD1").getElementsByTagName("option"));
	var cfood1 = getOrder(document.getElementById("OrderF1").getElementsByTagName("option"));
	var cfood2 = getOrder(document.getElementById("OrderF2").getElementsByTagName("option"));


	//var cdrink = odrink * document.getElementById("Quantity").value;
/*
	if(firstname=="")
	{
		result = false;
		errMsg = errMsg+"Must Insert Something.\n"
	}

		switch(statec){
			case "VIC":
				if(!pcode.match(/^[3]|[8]/)){
					errMsg = errMsg+"VIC post code should start with 3 or 8.\n"
					result = false;
				}
			break;
			case "NSW":
				if(!pcode.match(/^[1]|[2]/)){
					errMsg = errMsg+"NSW post code should start with 1 or 2.\n"
					result = false;
				}
			break;
			case "QLD":
				if(!pcode.match(/^[4]|[9]/)){
					errMsg = errMsg+"QLD post code should start with 4 or 9.\n"
					result = false;
				}
			break;
			case "NT":
				if(!pcode.match(/^[0]/)){
					errMsg = errMsg+"NT post code should start with 0.\n"
					result = false;
				}
			break;
			case "WA":
				if(!pcode.match(/^[6]/)){
					errMsg = errMsg+"WA post code should start with 6.\n"
					result = false;
				}
			break;
			case "SA":
				if(!pcode.match(/^[5]/)){
					errMsg = errMsg+"SA post code should start with 5.\n"
					result = false;
				}
			break;
			case "TAS":
				if(!pcode.match(/^[7]/)){
					errMsg = errMsg+"TAS post code should start with 7.\n"
					result = false;
				}
			break;
			case "ACT":
				if(!pcode.match(/^[0]/)){
					errMsg = errMsg+"ACT post code should start with 0.\n"
					result = false;
				}
			break;
		}

	if (errMsg != ""){
		alert(errMsg);
	}
*/		
	if(result){
		storeBooking(firstname,lastname,pcontact, num, statec,street,pcode,town,cmt,cfood1,cfood2,cdesert1,cdrink,quan,email);
	}
return result;

} else if (document.getElementById("bookform"))
{
	var errMsg = "";
var result = true;
var cname = document.getElementById("cName").value;
var cnum = document.getElementById("cNum").value;
var expmm = document.getElementById("ExpMM").value;
var expyy = document.getElementById("ExpYY").value;
var cvv = document.getElementById("CVV").value;
var cretype = getCreditType();
	/*	
		if(!cname.match(/^[a-zA-Z\s]+$/)){
			errMsg = errMsg+"Name must only contain alpha characters nor number.\n"
			result = false;
		}
		
		switch(cretype){
			case "Master":
				if(!cnum.match(/^[5][1-5]\d{14}/)){
					errMsg = errMsg+"Credit Card must start from 51 to 55 and 16 digits.\n"
					result = false;
				}
				if(!cvv.match(/^\d{3}/)){
					errMsg = errMsg+"CVV must be 3 digits for Master Card.\n"
					result = false;
				}
				
				break;
			case "Visa":
				if(!cnum.match(/^[4]\d{15}/)){
					errMsg = errMsg+"Credit Card must start with 4 and 16 digits.\n"
					result = false;
				}
				if(!cvv.match(/^\d{3}/)){
					errMsg = errMsg+"CVV must be 3 digits for Master Card.\n"
					result = false;
				}
			break;
			case "American":
				if(!cnum.match(/^[3]([4]|[7])\d{14}/)){
					errMsg = errMsg+"Credit Card must be started with 34 or 37 and 16 digits.\n"
					result = false;
				}
				if(!cvv.match(/^\d{4}/)){
					errMsg = errMsg+"CCV must be 4 digits for American Card.\n"
					result = false;
				}
			break;
		}

		if(expyy<17){
			errMsg = errMsg+"Your Card is expired.\n"
			result = false;
		} else if  ((expmm<4) && (expyy<=17)){
			errMsg = errMsg+"Your Card is expired.\n"
			result = false;
		}
		

	if (errMsg != ""){
		alert(errMsg);
	}
*/
return result;
}
}



function init(){
	
	if(document.getElementById("RegForm"))
	{
	var regform = document.getElementById("RegForm");
	regform.onsubmit = validate;
	} else if (document.getElementById("bookform"))
	{
	var bookForm = document.getElementById("bookform");
	bookForm.onsubmit = validate;

	var cancel = document.getElementById("cancelButton");
	cancel.onclick = cancelBooking;
	
	getBooking();
	}
}


window.onload = init;