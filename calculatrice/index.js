let toucheBtns = document.querySelectorAll(".touche-btn")
let displayText = document.querySelector("#display-text")

let numberArray = [""]
let operationArray = []
let operationsHistory = [""]
let operation = ""
let resultDisplayed = false
let lastOperationClass = ""

toucheBtns.forEach((bouton)=>{
    bouton.addEventListener("click", ()=>{
        if(resultDisplayed){
            resetDisplay()
            resultDisplayed = false
            operation = ""
        }
        addOperation(bouton, bouton.value)
        backChar(bouton)
        getResult(bouton)
    })
})

function addOperation(bouton, char){
    if(bouton.classList.contains("char-button")){

        if((lastOperationClass === "operation" || lastOperationClass === "") && bouton.classList.contains("operation-btn")){
            alert("Veuillez entrer un chiffre.")
        }else{
            operation += char
            displayNewOperation()
        }


        if(bouton.classList.contains("number-btn")){lastOperationClass = "digit"}
        else if(bouton.classList.contains("operation-btn")){lastOperationClass = "operation"}
    }

}

function backChar(bouton){
    if(bouton.id === "back-button"){
        if(operation.length > 0){
            operation = operation.substring(0, operation.length-1)
            displayNewOperation()
        }

        if(operation.length  < 1){
            resetDisplay()
        }
    }

}

function getResult(bouton){
    if(bouton.id === "result-btn") {
        let lastChar = operation.substring(operation.length-1, operation.length)
        if(["+","-","*","."].includes(lastChar)){
            operation = operation.substring(0, operation.length-1)
        }
        displayText.textContent = eval(operation)
        resultDisplayed = true
    }
}

function resetDisplay(){
    displayText.textContent = "0"
}

function displayNewOperation(){
    displayText.textContent = operation
    if(displayText.textContent.startsWith("0")){
        displayText.textContent = displayText.textContent.substring(1)
    }
}