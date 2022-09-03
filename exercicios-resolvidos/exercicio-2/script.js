const inputs = document.querySelectorAll('.input')
const masBall = document.querySelector('.ball--masculino')
const femBall = document.querySelector('.ball--feminino')
const gender = document.querySelector('.gender')

const textInput = document.querySelector('.exercise-2__inputText')

const button2 = document.querySelector('.exercise-2__button')


// FUNCTIONS

// vefiricando se todos os campos foram preenchidos corretamente
// caso algum campo não tenha sido preenchido, é adicionada uma classe
// "invalid" a este campo, além da função retornar false e terromper
// o curso programa
function isValid() {
    // verifica se os dois não foram preenchidos
    if (
        (textInput.value == '' || isNaN(+textInput.value) || +textInput.value < 50) && 
        (inputs[0].checked == false && inputs[1].checked == false)
        ) {
            textInput.classList.add('invalid')
            gender.classList.add('invalid')
            return false
        }
        
    // verifica se apenas o campo referente à altura não foi preenchido
    if (textInput.value == '' || isNaN(+textInput.value) || +textInput.value < 50) {
        textInput.classList.add('invalid')
        gender.classList.remove('invalid')
        return false
    } else {
        textInput.classList.remove('invalid')
    }
    
        // verifica se apenas o campo referente ao sexo não foi preenchido
    if (inputs[0].checked == false && inputs[1].checked == false) {
        gender.classList.add('invalid')
        textInput.classList.remove('invalid')
        return false
    } else {
        gender.classList.remove('invalid')
    }

    return true
}

// pegando a opção marcada pelo usuário
function getGender() {
    return inputs[0].checked == true ? inputs[0].value : inputs[1].value
}

// calculando o peso ideal
function calcIdealWeight(height, gender) {
    height /= 100;

    console.log(gender)
    
    if (gender == 'masculino') idealWeight = (72.7 * height) - 58;
    else idealWeight = (62.1 * height) - 44.7;
    
    return idealWeight;
}


// EVENTS

// adicinando preenchimento às bolinnhas referentes ao input-radio
inputs.forEach(input => {
    input.addEventListener('change', () => {
        if (input.classList.contains('mas')) {
            femBall.classList.remove('check')
            masBall.classList.add('check')
        } else {
            masBall.classList.remove('check')
            femBall.classList.add('check')
        }
    })
})

// mostrando o peso ideal na tela se todos os campos
// tiverem sido preenchidos corretamente
button2.addEventListener('click', () => {
    if (isValid())
        document.querySelector('.exercise-2__result').innerText = 
        calcIdealWeight(+textInput.value, getGender()).toFixed(2)
})