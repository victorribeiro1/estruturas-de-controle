const itens = document.querySelector('.itens')
const output = document.querySelector('.output')

$total = 0;
$currentPower = 0;
$houseNumber = 1;

for ($counter = 0; $counter !== 64; $counter++) {
    $currentPower = Math.pow(2, $counter);

    let dados = document.createElement('li')
    dados.innerHTML =  `<span>${$counter + 1}</span> <span>></span> <span>${$currentPower}</span>`

    itens.appendChild(dados)

    $houseNumber++;
    $total += Math.pow(2, $counter);
}

output.innerText = $total