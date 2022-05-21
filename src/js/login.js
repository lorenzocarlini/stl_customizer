function validateForm() {  
    //collect form data in JavaScript variables  
    var email = document.getElementById("email").value;  
    var pwd = document.getElementById("password").value;  
        
    //check empty first name field  
    if(email == "") {  
        document.getElementById("JSError").innerHTML = "**Fill the email please!";  
        return false;  
    } 
    //check empty password field  
    if(pwd == "") {  
        document.getElementById("JSError").innerHTML = "**Fill the password please!";  
        return false;  
    } else {  
        return true;
    }  
}  