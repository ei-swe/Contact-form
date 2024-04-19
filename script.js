const form = document.querySelector('form'),
statusText = form.querySelector('.button-area span');
form.onsubmit = (e) => {
    e.preventDefault();
    statusText.style.display = "block";

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "message.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState == 4 && xhr.status == 200){
          let response = xhr.response;
          if(response.indexOf("required") != -1 || response.indexOf("valid") != -1 || response.indexOf("failed") != -1){
            statusText.style.color = "red";
          }else{
            form.reset();
            setTimeout(()=>{
            statusText.style.display = "none";
            }, 3000);
          }
          statusText.innerText = response;
          form.classList.remove("disabled");
        }
      }
      let formData = new FormData(form);
      xhr.send(formData);
}
