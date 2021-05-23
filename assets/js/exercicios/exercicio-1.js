const button = document.querySelector('#button')
const inputText = document.querySelector('#inputText')
const result = document.querySelector('.exercise-1__result')

function driverStatus($speed) {
    [$okSpeed, $limitSpeed] = [50, 60]
    
    /* suspeitamente abaixo do limite de velocidade */ if ($speed < 0) return `${$speed} km/h?`;
    /* campo vazio */ else if ($speed == 0) return "Preencha o campo";
    /* abaixo */ else if ($speed < $okSpeed) return "Velocidade OK!";
    /* média  */ else if ($speed <= $limitSpeed) return "Cuidado!";
    /* acima  */ else return 'Multado!';
}

// EVENTS
button.addEventListener('click', () => {
    if (isNaN(+inputText.value)) {
        inputText.classList.add('invalid')
        result.innerText = "Preencha o campo";
    } else {
        inputText.classList.remove('invalid')
        result.innerText = driverStatus(+inputText.value);
    }
})