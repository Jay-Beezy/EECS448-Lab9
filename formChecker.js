function processSubmission(){
    if(validateShipping() && validateUsername() && validatePassword()){
        return true;
    }
    else{
        return false;
    }
}

function validateShipping(){
    let shipping1 = document.getElementById("shipping1");
    let shipping2 = document.getElementById("shipping2");
    let shipping3 = document.getElementById("shipping3");
    let validShipping = false;


    if(shipping1.checked){
        validShipping = true;
    }
    else if(shipping2.checked){
        validShipping = true;
    }
    else if(shipping3.checked){
        validShipping = true;
    }
    else{
        validShipping = false;
    }

    if(validShipping == false){
        alert("You need to select a shipping option!");
        return false;
    }
    else{
        return true;
    }
}

function validateUsername(){
    let name = document.getElementsByName("userName")[0].value;
    if(name == ""){
        alert("Please input a username");
        return false;
    }
    else if(name.includes("@") && name.includes(".com")){
        return true;
    }
    else{
        alert("Please input a valid username");
        return false;
    }
}

function validatePassword(){
    let password = document.getElementsByName("userPassword")[0].value;
    if(password == ""){
        alert("Please input your password");
        return false;
    }
    else{
        return true;
    }
}
