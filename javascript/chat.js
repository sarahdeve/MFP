const form = document.querySelector(".typing-area"),
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector("button"),
chatBox = document.querySelector(".chat-box");

form.onsubmit = (e)=> {
    e.preventDefault(); //preventing from submitting
}

sendBtn.onclick = ()=> {
        // console.log("Hello");
        // let's start Ajax
        let xhr = new XMLHttpRequest(); //creating XML
        xhr.open("POST", "php/insert-chat.php", true);
        xhr.onload = ()=> {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    inputField.value = "";
                    scrollToBottom();
                }
            }
        }
        //Sending the form through ajax to php
        //creating new formData object
        let formData = new FormData(form);
        xhr.send(formData); //sending the formData to php
}

chatBox.onmouseenter = () => {
    chatBox.classList.add("active"); 
}
chatBox.onmouseleave = () => {
    chatBox.classList.remove("active"); 
}

setInterval(()=> {
    // console.log("Hello");
    let xhr = new XMLHttpRequest(); //creating XML
    xhr.open("POST", "php/get-chat.php", true);
    xhr.onload = ()=> {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
               let data = xhr.response;
               chatBox.innerHTML = data;
               if (!chatBox.classList.contains("active")) {
                    scrollToBottom();
               }
               // console.log(data);
            }
        }
    }
      //creating new formData object
      let formData = new FormData(form);
      xhr.send(formData); //sending the formData to php  
}, 500);

function scrollToBottom() {
    chatBox.scrollTop = chatBox.scrollHeight;
}