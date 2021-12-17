const mobile = document.getElementById('mobile');
const accountName = document.getElementById('name');
const username = document.getElementById('username');
const password = document.getElementById('password');
document.getElementById('mobile').addEventListener('keypress',()=> {
    const mobile = document.getElementById('mobile').value;
    if (isNaN(mobile))
        document.querySelector('.mobileMsg').textContent = "Mobile number should be a number between 0-9";
    else 
        document.querySelector('.mobileMsg').textContent = "";
});
mobile.addEventListener('focusout',()=> {
    if (mobile.value === '') 
        document.querySelector('.mobileMsg').textContent = "Enter mobile number";
    else
    document.querySelector('.mobileMsg').textContent = "";
});
accountName.addEventListener('focusout',()=> {
    if (accountName.value === '') 
        document.querySelector('.nameMsg').textContent = "Enter Your name";
    else
    document.querySelector('.nameMsg').textContent = "";
});
username.addEventListener('focusout',()=> {
    if (username.value === '') 
        document.querySelector('.usernameMsg').textContent = "Enter Username";
    else
    document.querySelector('.usernameMsg').textContent = "";
});
password.addEventListener('focusout',()=> {
    if (password.value === '') 
        document.querySelector('.passMsg').textContent = "Enter Strong Password";
    else
    document.querySelector('.passMsg').textContent = "";
});
password.addEventListener('keyup', () => {
    if (mobile.value !== '' && accountName.value !== '' && username.value !== '' && password.value !== '' && password.value.length >= 8) {
        document.querySelector('.signupBtn').style.opacity = "1";
        document.querySelector('.signupBtn').disabled = '';
    } else {
        document.querySelector('.signupBtn').style.opacity = "0.4";
    }
});

function signup() {
    const data = {
        'mobile': mobile.value,
        'name': accountName.value,
        'username': username.value,
        'password': password.value
    };
    const jsonData = JSON.stringify(data);
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "../Controller/SignupController.php?function=signup", true);
    xhr.setRequestHeader("Content-type", 'application/json');
    xhr.send(jsonData);

    xhr.onload = () => {
        if (xhr.status == 200) {
            window.location.href = 'Home.php';
        }
    }
}