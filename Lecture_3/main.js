document.getElementById('submitButton').addEventListener('click', codeValidate);

function codeValidate(e){
    e.preventDefault();
    let number = document.getElementById('code').innerHTML;
    console.log(number);
    let div = document.getElementById('textPlace');
    let input = document.getElementById('codeInput').value;

    if(div.childNodes()){
        div.removeChild(0);
    }
    if(number === input) {
        let p = document.createElement('p');
        p.style.color = 'green';
        p.innerHTML = "კოდი სწორია";
        form.appendChild(p);
    }
    else {
        let p = document.createElement('p');
        p.style.color = 'red';
        p.innerHTML = "კოდი არასწორია";
        form.appendChild(p);
    }
}