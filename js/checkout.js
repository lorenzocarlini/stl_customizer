function validateForm() {  
    //collect form data in JavaScript variables  
    var suggestion;
    var firstName = document.getElementById("firstName").value;  
    var lastName = document.getElementById("lastName").value;  
    var address = document.getElementById("address").value;
    var country = $('#country').val();
    var region = $('#region').val();
    var cap = document.getElementById("cap").value;
    var cc_name =  document.getElementById("cc-name").value;
    var cc_number =  document.getElementById("cc-number").value;
    var cc_cvv = document.getElementById("cc-cvv").value;
    var digit1 = document.getElementById("digit1").value;
    var digit2 = document.getElementById("digit2").value;

        
    //check empty first name field  
    if(firstName == "" || onlySpaces(firstName)) {  
        suggestion = document.getElementById("firstNameJS");
        suggestion.innerHTML = "**Fill the first name"; 
        suggestion.scrollIntoView({block:"center",behavior: "smooth"}); 
        return false;  
    }
    else {
        suggestion = document.getElementById("firstNameJS");
        suggestion.innerHTML = ""; 
    }    


    if(lastName == "" || onlySpaces(lastName)) {  
        suggestion = document.getElementById("lastNameJS");
        suggestion.innerHTML = "**Fill the last name"; 
        suggestion.scrollIntoView({block:"center",behavior: "smooth"}); 
        return false;  
    }
    else {
        suggestion = document.getElementById("lastNameJS");
        suggestion.innerHTML = ""; 
    }   

    if(address == "" || onlySpaces(address)) {
        suggestion = document.getElementById("addressJS");
        suggestion.innerHTML = "**Fill the address"; 
        suggestion.scrollIntoView({block:"center",behavior: "smooth"}); 
        return false;        
    } 
    else {
        suggestion = document.getElementById("addressJS");
        suggestion.innerHTML = ""; 
    } 

    if(country == "") {
        suggestion = document.getElementById("countryJS");
        suggestion.innerHTML = "**Choose a valid country"; 
        suggestion.scrollIntoView({block:"center",behavior: "smooth"}); 
        return false;        
    }
    else {
        suggestion = document.getElementById("countryJS");
        suggestion.innerHTML = ""; 
    } 

    if(region == "") {
        suggestion = document.getElementById("regionJS");
        suggestion.innerHTML = "**Choose a valid region"; 
        suggestion.scrollIntoView({block:"center",behavior: "smooth"}); 
        return false;        
    }
    else {
        suggestion = document.getElementById("regionJS");
        suggestion.innerHTML = ""; 
    } 

    if(cap == "" || cap.length != 5) {
        suggestion = document.getElementById("capJS");
        suggestion.innerHTML = "**Insert a valid Cap"; 
        suggestion.scrollIntoView({block:"center",behavior: "smooth"}); 
        return false;        
    } 
    else {
        suggestion = document.getElementById("capJS");
        suggestion.innerHTML = ""; 
    } 

    if(cc_name == "" || onlySpaces(cc_name)) {  
        suggestion = document.getElementById("cc_nameJS");
        suggestion.innerHTML = "**Fill the name on card"; 
        suggestion.scrollIntoView({block:"center",behavior: "smooth"}); 
        return false;  
    }
    else {
        suggestion = document.getElementById("cc_nameJS");
        suggestion.innerHTML = ""; 
    } 

    if(cc_number == "" || cc_number.length!= 16) {  
        suggestion = document.getElementById("cc_numberJS");
        suggestion.innerHTML = "**Insert a valid card number"; 
        suggestion.scrollIntoView({block:"center",behavior: "smooth"}); 
        return false;  
    }
    else {
        suggestion = document.getElementById("cc_numberJS");
        suggestion.innerHTML = ""; 
    } 

    if(digit1 == "" || digit2 == "" || digit1.length!= 2 || digit2.length!= 2 || digit1 > 12) {  
        suggestion = document.getElementById("digitsJS");
        suggestion.innerHTML = "**Insert a valid expire date"; 
        suggestion.scrollIntoView({block:"center",behavior: "smooth"}); 
        return false;  
    }
    else {
        suggestion = document.getElementById("digitsJS");
        suggestion.innerHTML = ""; 
    } 

    if(cc_cvv == "") {  
        suggestion = document.getElementById("cc_cvvJS");
        suggestion.innerHTML = "**Enter a valid CVV"; 
        suggestion.scrollIntoView({block:"center",behavior: "smooth"}); 
        return false;  
    }
    else {
        suggestion = document.getElementById("cc_cvvJS");
        suggestion.innerHTML = ""; 
    } 
}  


$(document).ready(function(){
    $("#plus").click(function(){
        var num = +$("#quantity").val() + 1;
        $("#quantity").val(num);
        $("#quantity-displayed").text(num);
        $("#price").text((num*5) + "€");
  });
    $("#minus").click(function(){
    if($("#quantity").val() > 1){
        var num = +$("#quantity").val() - 1;
        $("#quantity").val(num);
        $("#quantity-displayed").text(num);
        $("#price").text((num*5) + "€");
    }
  });

});

function onlySpaces(str) {
    return str.trim().length === 0;
}



var base_color = sessionStorage.getItem("base_color");
var text_color = sessionStorage.getItem("text_color");
var model = sessionStorage.getItem("stl_file");
var printing_material = sessionStorage.getItem("printing_material");

$("#model").val(model);
$("#base_color").val(base_color);
$("#text_color").val(text_color);
$("#printing_material").val(printing_material);





var letters = document.querySelectorAll(".letters");
letters.forEach(function(userItem) {
    userItem.addEventListener("input", function(e) {
        // Exclude numeric characters from input:
        e.target.value = e.target.value.replace(/[^a-z ]+/i,'');
    })
});

var digits = document.querySelectorAll(".digits");
digits.forEach(function(userItem) {
    userItem.addEventListener("input", function(e) {
        // Exclude non-numeric characters from input:
        e.target.value = e.target.value.replace(/[^0-9]/g,'');
    })
});

