const inputs = document.querySelectorAll('input')
const button = document.getElementById('button')
const output = document.getElementById('output')

function isValid() {
    for (let index = 0; index < inputs.length; index++) {
        if (inputs[index].value == "") {
            inputs[index].classList.add('invalid')
            return false
        } else {
            inputs[index].classList.remove('invalid')
        }
    }
    return true
}

button.addEventListener('click', () => {
    if (isValid()) {
        output.innerText = checkAge(inputs[0].value, +inputs[1].value)
    }
})

function checkAge($nome, $idade) {
    [$idadeAdulta, $idadeIdosa] = [18, 65];

    $nome = $nome.split(' ')[0]

    if ($idade < $idadeAdulta) return $nome +", você é menor de idade.";
    else if ($idade <= $idadeIdosa) return $nome +", você é maior de idade.";
    else return $nome +", você é maior de 65 anos.";
}