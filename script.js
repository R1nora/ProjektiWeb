
function nextForm(){
    var usernR = document.getElementById('Username').value;
    var passR = document.getElementById('Password').value;
    var cpassR = document.getElementById('cPassword').value;
    var emlR = document.getElementById('Email').value;
    var emri = document.getElementById('Name').value;
    var phone = document.getElementById('PhoneNumber').value;
    var PhoneNumber = /^[0-9]+$/
    if (emri.length < 6) {
        alert('Please enter a valid name, longer than 6 characters');
    }
    else if (usernR.length < 4) {
        alert('Please enter a valid username, longer than 4 characters');
    }
    else if (emlR.includes(' ')) {
        alert('Please enter a valid email');
    }
    else if (!emlR.endsWith(".com")) {
        alert('please enter a valid email');
    }
    else if (!emlR.includes('@')) {
        alert('please enter a valid email');
    }
    else if(!PhoneNumber.test(phone)){
        alert('Please enter a valid phone number');
    }
    else if (passR.length < 8 || passR === passR.toLowerCase() || passR === passR.toUpperCase() || !stringContainsNumber(passR)) {
        alert('Your password must be longer than 8 characters and contain lowercase and uppercase characters as well as at least one number!');
    }
    else if (passR != cpassR) {
        alert('Please confirm your password correctly!');
    }
    else{
        alert('You have registered succsesfully');
        return true;
    }
}
function stringContainsNumber(_input) {
    let string1 = String(_input);
    for (let i = 0; i < string1.length; i++) {
        if (parseInt(string1.charAt(i))) {
            return true;
        }
    }
    return false;
}

function validateForm(){
var email = document.getElementById('email').value;
var password = document.getElementById('password').value;
if(email!='filan_fisteku@gmail.com'|| password!='1234qwer'){
alert("please check your email or password!");
}
else {
setTimeout(function(){window.location.reload();},10);
}
}
let searchForm = document.querySelector('.search-form');


document.querySelector('btn').onclick = () =>{
    searchForm.classList.toggle('active');
    
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}