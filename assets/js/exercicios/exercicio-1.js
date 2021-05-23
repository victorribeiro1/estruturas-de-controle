const button = document.querySelector('#button')
const inputText = document.querySelector('#inputText')
const result = document.querySelector('.exercise-1__result')

button.addEventListener('click', () => {
    result.innerText = driverStatus(inputText.value);
})

function driverStatus($speed) {
    [$okSpeed, $limitSpeed] = [50, 60]

    /* abaixo */ if ($speed < 0) return `${$speed} km/h?`;
    /* abaixo */ else if ($speed == 0) return "Preencha o campo";
    /* abaixo */ else if ($speed < $okSpeed) return "Velocidade OK!";
    /* média  */ else if ($speed <= $limitSpeed) return "Cuidado!";
    /* acima  */ else return 'Multado!';
}