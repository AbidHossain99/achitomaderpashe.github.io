const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-text");

form.onsubmit = (e)=>{
    e.preventDefault();
}

continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              if(data === "admin"){
                location.href = "homescreen_admin.php";
              }
              else if(data === "volunteer"){
                location.href = "homescreen_volun.php";
              }
              else if(data === "specialist"){
                location.href = "homescreen_spec.php";
              }
              else if(data === "user"){
                location.href = "homescreen_user.php";  
              }
              else{
                errorText.style.display = "block";
                errorText.textContent = data;
              }
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}