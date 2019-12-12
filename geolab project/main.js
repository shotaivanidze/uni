const body = document.body;

body.addEventListener('click', LoginPopup);

function LoginPopup() {
    let container = document.createElement('div');
    container.id = "container";
    let login = document.createElement('div');
    login.id = 'login';
    let loginContainer = document.createElement('div');
    loginContainer.id = 'loginContainer';
    let inputUserName = document.createElement('input');
    inputUserName.id = 'inputUserName';
    inputUserName.classList.add('loginInput');
    inputUserName.placeholder = 'Username';
    let inputPassword = document.createElement('input');
    inputPassword.id = 'inputPassword';
    inputPassword.classList.add('loginInput');
    inputPassword.placeholder = 'Password';
    let button = document.createElement('button');
    button.id = 'loginButton';
    button.innerText = 'Log In'
    
    loginContainer.appendChild(inputUserName);
    loginContainer.innerHTML += "</br>";
    loginContainer.appendChild(inputPassword);
    loginContainer.innerHTML += "</br>";
    loginContainer.appendChild(button);
    login.appendChild(loginContainer);
    container.appendChild(login);
    body.appendChild(container);
}