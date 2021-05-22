const inputNumber = document.querySelector('#inputNumber')
            
const multiplicandos = document.querySelectorAll('.multiplicando')
const multiplicadores = document.querySelectorAll('.multiplicador')
const resultados = document.querySelectorAll('.result')

inputNumber.addEventListener('change', () => {
    let inputNumberValue = inputNumber.value
    
    if (inputNumberValue > 99999) {
        inputNumber.value = ''
        inputNumberValue = ''
    }
    
    if (inputNumberValue == '') inputNumberValue = 0
    inputNumberValue = parseFloat(inputNumberValue)
    multiplicadores.forEach(multiplicador => multiplicador.innerText = inputNumberValue)
    
    for (let index = 0; index <= multiplicandos.length; index++) {
        resultados[index].innerText = multiplicandos[index].innerText * inputNumberValue
    }
})