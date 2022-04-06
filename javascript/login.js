const form = document.querySelector(".login form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-txt");


form.onsubmit = (e)=> {
    e.preventDefault(); //preventing from submitting
}

continueBtn.onclick = ()=> {
    // console.log("Hello");
    let xhr = new XMLHttpRequest(); //creating XML
    xhr.open("POST", "php/login.php", true);
    xhr.onload = ()=> {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                // console.log(data); 
                if (data == "success") {
                    location.href = "users.php";
                }else {
                    errorText.style.display = "block";
                    errorText.textContent = data;
                }
            }
        }
    }
    //Sending the form through ajax to php
    //creating new formData object
    let formData = new FormData(form);
    xhr.send(formData); //sending the formData to php
}
