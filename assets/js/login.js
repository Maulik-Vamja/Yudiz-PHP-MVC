document.getElementById('pass').addEventListener('keyup', function () {
    const user = document.getElementById('user').value;
    const pass = document.getElementById('pass').value;
    if (user != '' && pass.length >= 8) {
        document.querySelector('#loginBtn').style.opacity = "1";
        document.querySelector('#loginBtn').disabled = '';
    } else {
        document.querySelector('#loginBtn').style.opacity = "0.4";
        document.querySelector('#loginBtn').disabled = true;
    }
});

function login() {
    const user = document.getElementById('user').value;
    const pass = document.getElementById('pass').value;
    const data = {
        "user": user,
        "pass": pass
    };
    const jsonData = JSON.stringify(data);
    const xhr = new XMLHttpRequest();

    xhr.open("POST", "../Controller/LoginController.php", true);
    xhr.setRequestHeader("Contant-type", "application/json");
    xhr.send(jsonData);

    xhr.onload = () => {
        if (xhr.status == 200) {
            if (xhr.responseText === "error") {
                document.getElementById('Errmsg').textContent = 'Enter Valid Login Credentials';
                document.getElementById('pass').value = '';
            } else {
                window.location.href = '../View/Home.php';
            }
        }
    }
}
