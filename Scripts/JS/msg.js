const form = document.querySelector(".typing-area"),
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector("button");

form.onsubmit = (e)=>{
    e.preventDefault();
}
sendBtn.onclick = () =>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST" , "Scripts/PHP/insert-chat.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){

            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData); 
}