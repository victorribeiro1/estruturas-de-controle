const inputs = document.querySelectorAll('.input')
const masBall = document.querySelector('.ball--masculino')
const femBall = document.querySelector('.ball--feminino')

const textInput = document.querySelector('.exercise-2__inputText')

const button2 = document.querySelector('.exercise-2__button')

const gender = document.querySelector('.gender')

// adicinando preenchimento às bolinnhas referentes ao input radio
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

// vefiricando se todos os campos foram preenchidos
function isValid() {
    if (
        (textInput.value == '' || isNaN(+textInput.value) || textInput.value < 50) && 
        (inputs[0].checked == false && inputs[1].checked == false)
    ) {
        textInput.classList.add('invalid')
        gender.classList.add('invalid')
        return false
    }
    
    if (textInput.value == '' || isNaN(+textInput.value) || textInput.value < 50) {
        textInput.classList.add('invalid')
        gender.classList.remove('invalid')
        return false
    } else {
        textInput.classList.remove('invalid')
    }
    
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
    inputs.forEach(input => {
        if (input.checked) input.setAttribute('checked', 'true')
    })
    return document.querySelector('[checked]').value
}

// calculando o peso ideal
function calcIdealWeight($height, $gender) {
    $height /= 100;
    
    if ($gender == 'masculino') $idealWeight = (72.7 * $height) - 58;
    else $idealWeight = (62.1 * $height) - 44.7;
    
    return $idealWeight;
}

// mostrando o peso ideal na tela se todos os campos
// tiverem sido preenchidos corretamente
button2.addEventListener('click', () => {
    if (isValid())
        document.querySelector('.exercise-2__result').innerText = calcIdealWeight(textInput.value, getGender()).toFixed(2)
})