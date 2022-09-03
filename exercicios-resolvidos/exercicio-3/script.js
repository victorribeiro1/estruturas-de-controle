const textarea = document.getElementById('textarea')
const output = document.getElementById('output')

// função responsável por corrigir e agrupar os 
// caracteres inseridos na entrada
function getNumbers(textareaValue) {
    let newArray = textareaValue.split(',')

    for (let index in newArray) {
        if (isNaN(parseFloat(newArray[index]))) newArray.splice(index, 1) 
        else newArray[index] = parseFloat(newArray[index])
    }

    return newArray
}

// função responsável por ordenar a sequência 
// na qual os números devem aparecer
function sortNumbers(textareaValue) {
    
    let numbers = getNumbers(textareaValue)

    numbers = numbers.sort((a, b) => {
        if (a > b) return 1

        if (a < b) return -1
        
        return 0
    })
    
    const output = numbers.join(',&ensp;') + '.'
    
    return output
}

// EVENTS
textarea.addEventListener('keyup', () => output.innerHTML = sortNumbers(textarea.value))