const form =document.querySelector(".typing-area"),
inputField=form.querySelector(".form-control"),
sendBtn = form.querySelector("button");

sendBtn.onclick = () =>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST" , "Scripts/PHP/insert-chat.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                console.log(data);
                if(data == "success"){
                    location.href = "chat.php";
                }else{
                    errorText.style.display = "block";
                    errorText.textContent = data;
                }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData); 
}