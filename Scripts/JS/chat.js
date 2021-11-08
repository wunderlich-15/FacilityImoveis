const searchBar = document.querySelector(".search input");
usersList = document.querySelector(".users, .usersList");


searchBar.onkeyup = ()=>{
    let searchTerm = searchBar.value;
    
    if(searchTerm !=""){
        searchBar.classList.add("active");
    }else{
        searchBar.classList.remove("active");
    }
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "Scripts/PHP/search.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                usersList.innerHTML = data;
            }
        }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    xhr.send("searchTerm=" + searchTerm);
}
setInterval(()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("GET" , "Scripts/PHP/users.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(!searchBar.classList.contains("active")){
                    usersList.innerHTML = data;
                }
            }
        }
    }
    xhr.send(formData); 
},500);