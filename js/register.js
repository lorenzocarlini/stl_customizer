function validateForm() {  
    //collect form data in JavaScript variables 
    var suggestion; 
    var name = document.getElementById("name").value;  
    var email = document.getElementById("email").value;  
    var pwd = document.getElementById("password").value;  
    var Cpwd = document.getElementById("confirmPassword").value;  
        
    //check empty first name field  
    if(name == "") {  
        suggestion = document.getElementById("nameJS");
        suggestion.innerHTML = "**Fill the name"; 
        suggestion.scrollIntoView({block:"center",behavior: "smooth"}); 
        return false;  
    }  
    else {
        suggestion = document.getElementById("nameJS");
        suggestion.innerHTML = ""; 
    }
        
    //check empty first name field  
    if(email == "") {  
        suggestion = document.getElementById("emailJS");
        suggestion.innerHTML = "**Enter a valid email"; 
        suggestion.scrollIntoView({block:"center",behavior: "smooth"});   
        return false;  
    } 
    else {
        suggestion = document.getElementById("emailJS");
        suggestion.innerHTML = ""; 
    }
    //check empty password field  
    if(pwd == "") {  
        suggestion = document.getElementById("passwordJS");
        suggestion.innerHTML = "**Enter a password"; 
        suggestion.scrollIntoView({block:"center",behavior: "smooth"}); 
        return false;  
    }  
    else {
        suggestion = document.getElementById("passwordJS");
        suggestion.innerHTML = ""; 
    }
    
    //check empty confirm password field  
    if(Cpwd == "") {  
        suggestion = document.getElementById("CpasswordJS");
        suggestion.innerHTML = "**Enter a password"; 
        suggestion.scrollIntoView({block:"center",behavior: "smooth"}); 
        return false;  
    } 
    else {
        suggestion = document.getElementById("CpasswordJS");
        suggestion.innerHTML = ""; 
    }  
        
    //minimum password length validation  
    if(pwd.length < 8) {  
        suggestion = document.getElementById("passwordJS");
        suggestion.innerHTML = "**Password length must be atleast 8 characters"; 
        suggestion.scrollIntoView({block:"center",behavior: "smooth"});
        return false;  
    }
    else {
        suggestion = document.getElementById("passwordJS");
        suggestion.innerHTML = ""; 
    }  
    
    //maximum length of password validation  
    if(pwd.length > 15) {  
        suggestion = document.getElementById("passwordJS");
        suggestion.innerHTML = "**Password length must not exceed 15 characters"; 
        suggestion.scrollIntoView({block:"center",behavior: "smooth"});  
        return false;   
    } 
    else {
        suggestion = document.getElementById("passwordJS");
        suggestion.innerHTML = ""; 
    } 
    
    if(pwd != Cpwd) {  
        suggestion = document.getElementById("CpasswordJS");
        suggestion.innerHTML = "**Passwords are not the same"; 
        suggestion.scrollIntoView({block:"center",behavior: "smooth"});  
        return false;  
    } else {  
        //alert ("Your account created successfully");  
        //document.write("JavaScript form has been submitted successfully");  
    }  
}  