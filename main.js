let btn = document.querySelector("#faq-btn")

let hiden = true

btn.addEventListener("click", (e) => {
    if(hiden){
        hiden = false
        document.querySelector(".faq").style.display = "flex";
    }else{
        hiden = true
        document.querySelector(".faq").style.display = "none";
    }

})

