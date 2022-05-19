function validateForm() {  
    //collect form data in JavaScript variables  
    var name = document.getElementById("name").value;  
    var email = document.getElementById("email").value;  
    var pwd = document.getElementById("password").value;  
    var Cpwd = document.getElementById("confirmPassword").value;  
        
    //check empty first name field  
    if(name == "") {  
        document.getElementById("JSError").innerHTML = "**Fill the first name";  
        return false;  
    }  
        
    //check empty first name field  
    if(email == "") {  
        document.getElementById("JSError").innerHTML = "**Fill the email";  
        return false;  
    } 
    //check empty password field  
    if(pwd == "") {  
        document.getElementById("JSError").innerHTML = "**Fill the password please!";  
        return false;  
    }  
    
    //check empty confirm password field  
    if(Cpwd == "") {  
        document.getElementById("JSError").innerHTML = "**Confirm your password!";  
        return false;  
    }   
        
    //minimum password length validation  
    if(pwd.length < 8) {  
        document.getElementById("JSError").innerHTML = "**Password length must be atleast 8 characters";  
        return false;  
    }  
    
    //maximum length of password validation  
    if(pwd.length > 15) {  
        document.getElementById("JSError").innerHTML = "**Password length must not exceed 15 characters";  
        return false;  
    }  
    
    if(pwd != Cpwd) {  
        document.getElementById("JSError").innerHTML = "**Passwords are not same";  
        return false;  
    } else {  
        //alert ("Your account created successfully");  
        //document.write("JavaScript form has been submitted successfully");  
    }  
}  