function Form1(){
    var usernR = document.getElementById('First Name').value;
    var mbiemri = document.getElementById('Last Name').value;
    var mess= document.getElementById('Message').value;
    var email = document.getElementById('Email').value;
    var Mobile = document.getElementById('PhoneNumber').value;
    var PhoneNumber = /^[0-9]+$/
    if (usernR.length < 3) {
        alert('Please enter a valid first name, longer than 3 characters');
    }
    if (mbiemri.length < 3) {
        alert('Please enter a valid last name, longer than 3 characters');
    }
    else if (email.includes(' ')) {
        alert('Please enter a vaid email');
    }
    else if (!email.endsWith(".com")) {
        alert('please enter a valid email');
    }
    else if (!email.includes('@')) {
        alert('please enter a valid email');
    }
    else if(!PhoneNumber.test(Mobile)){
        alert('Please enter a valid phone number');
    }
    else if (mess<2) {
        alert('Please enter a message, longer than 2 characters');
    }
    
    else{
        alert('Message sent succsesfully');
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