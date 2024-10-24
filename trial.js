function submitForm(){
var name = document.getElementById("name").value;
var email = document.getElementById("email").value;
var password = document.getElementById("password").value;
var confirmPassword = document.getElementById("confirmPassword").value;
var error = document.getElementById("error");

if (name === "" || email === "" || password === "" ||confirmPassword === ""){
    error.innerHTML = "All fields are required.";
return;
}

if (password !== confirmPassword)
{
error.inneHTML = "passwords do not match"
return;
}

error.inneHTML = "" ; //clear erroe messages if validation passes

alert("Signup succesful for"+ name + "with email"+ email + "!");



}