function validateForm() {  
    //collect form data in JavaScript variables  
    var suggestion
    var firstName = document.getElementById("firstName").value;  
    var lastName = document.getElementById("lastName").value;  
    var address = document.getElementById("address").value;
    var country = $('#country').val();
    var region = $('#region').val();
    var cap = document.getElementById("cap").value;
    var cc_name =  document.getElementById("cc-name").value;
    var cc_number =  document.getElementById("cc-number").value;


        
    //check empty first name field  
    if(firstName == "") {  
        suggestion = document.getElementById("firstNameJS");
        suggestion.innerHTML = "**Fill the first name"; 
        suggestion.scrollIntoView({block:"center",behavior: "smooth"}); 
        return false;  
    }
    if(lastName == "") {  
        suggestion = document.getElementById("lastNameJS");
        suggestion.innerHTML = "**Fill the last name"; 
        suggestion.scrollIntoView({block:"center",behavior: "smooth"}); 
        return false;  
    }
    if(address == "") {
        suggestion = document.getElementById("addressJS");
        suggestion.innerHTML = "**Fill the address"; 
        suggestion.scrollIntoView({block:"center",behavior: "smooth"}); 
        return false;        
    }    
    if(country == "") {
        suggestion = document.getElementById("countryJS");
        suggestion.innerHTML = "**Choose a valid country"; 
        suggestion.scrollIntoView({block:"center",behavior: "smooth"}); 
        return false;        
    }
    if(region == "") {
        suggestion = document.getElementById("regionJS");
        suggestion.innerHTML = "**Choose a valid region"; 
        suggestion.scrollIntoView({block:"center",behavior: "smooth"}); 
        return false;        
    }
    if(cap == "" || cap.length != 5) {
        suggestion = document.getElementById("capJS");
        suggestion.innerHTML = "**Insert a valid Cap"; 
        suggestion.scrollIntoView({block:"center",behavior: "smooth"}); 
        return false;        
    } 
    if(cc_name == "") {  
        suggestion = document.getElementById("cc_nameJS");
        suggestion.innerHTML = "**Fill the name on card"; 
        suggestion.scrollIntoView({block:"center",behavior: "smooth"}); 
        return false;  
    }
    if(cc_number == "" || cc_number.length!= 16) {  
        suggestion = document.getElementById("cc_numberJS");
        suggestion.innerHTML = "**Insert a valid card number"; 
        suggestion.scrollIntoView({block:"center",behavior: "smooth"}); 
        return false;  
    }
    else {  
        //alert ("Your account created successfully");  
        //document.write("JavaScript form has been submitted successfully");  
    }  
}  

// Listen on the 'input' event inside the .digits area:
document.querySelector(".digits").addEventListener("input", function(e){

    // Exclude non-numeric characters from input:
    e.target.value = e.target.value.replace(/[^0-9]/g,'');
  
    // If the input value is filled and there is a neighbouring element that is input, then focus on that element:
    if ( e.target.length > 1  && e.target && jQuery(this).attr("id")=="digit" ){
  
        $('#digit2').focus();
  
    }
  
  });
  