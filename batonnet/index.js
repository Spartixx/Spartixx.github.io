let btns = document.querySelectorAll(".send-btn")
let messageTitle = document.querySelector("#message-title")
let textInput = document.querySelector("#batonnet-nb-input")
let batons = document.querySelectorAll(".img_div")

defaultMessage = "Choisissez entre 1 et 3 bâtons. Celui qui prend le dernier perd la partie."

function check_value(){
    let textInput = document.querySelector("#batonnet-nb-input")

    let value = textInput.value.trim()
    let textToNumber = Number(value)

    if(!isNaN(textToNumber) && Number.isInteger(textToNumber)){
        if(textToNumber > 0 && textToNumber <=3){
            return textToNumber
        }
    }

    throw new TypeError("Veuillez entrer un nombre valide compris entre 1 et 3.")
}


textInput.addEventListener("input", () => {
    if(textInput.textContent !== defaultMessage) {
        messageTitle.textContent = defaultMessage
    }
})


function removeBaton(number){
    let removed = 0

    batons.forEach((baton) =>{
        if(removed < number && baton.style.display !== "none"){
            baton.style.display = "none"
            removed++
        }
    })

}


function getRandomNumber(){
    return Math.floor(Math.random() * 3) + 1
}


function winCondition(){
    hiden = 0

    batons.forEach((baton)=>{
        if(baton.style.display === "none"){
            hiden++
        }
    })

    return hiden === batons.length;
}

function resetGame(){
    batons.forEach((baton)=>{
        baton.style.display = "flex"
    })
}

function winProcedure(winner){
    messageTitle.textContent = `Le gagnant est : ${winner}`
    setTimeout(()=>{
        resetGame()
        messageTitle.textContent = defaultMessage
    }, 4000)
}


function buttonClick(){
    try {
        let numberToRemove = check_value()
        removeBaton((numberToRemove))

        if(winCondition()){
            winProcedure("L'ordinateur")
            return
        }

        messageTitle.textContent = "L'ordinateur réfléchit..."
        botNumber = getRandomNumber()

        setTimeout(()=>{
            messageTitle.textContent = `L'ordinateur a enlevé ${botNumber} allumettes`
            removeBaton(botNumber)
            if(winCondition()){
                winProcedure("Vous")
            }
        }, 3000)



    }catch (e) {
        if(e.name === "TypeError"){
            messageTitle.textContent = e.message
        }
    }
}


btns.forEach(bouton=>{
    bouton.addEventListener("click", ()=>{
        buttonClick()
    })
})