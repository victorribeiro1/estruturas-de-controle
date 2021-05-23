const squareBox = document.querySelector('.square-box')

const inputNumber = document.querySelector('.exercise-7__content-box input')

inputNumber.addEventListener('change', () => {
    removeSquare()
    createSquare(inputNumber.value);
})

function createSquare($side) {
    if ($side < 3) {
        alert('Ops! Lembre-se: o número mínimo deve ser 3.')
        return;

    } else if ($side > 20) {
        alert('Ops! Lembre-se: o número máximo deve ser 20.')
        return;
    };

    $rows = 1;
    $column = 1;

    const square = document.createElement('div')
    square.classList.add('square')
    squareBox.appendChild(square)

    while ($rows <= $side) {
        const row = document.createElement('div')
        row.classList.add('row')

        while ($column <= $side) {
            const column = document.createElement('span')
            column.classList.add('column')
                
            // SE a contagem coicidir com a primeira ou a última linha, 
            // imprima um asterísco.
            if ($rows == 1 || $rows == $side) {
                column.innerHTML = '* &nbsp;&nbsp;&nbsp;'
            } 
            
            // MAS SE a contagem coicidir com a primeira ou a última coluna,
            // imprima um asterísco.
            else if ($column == 1 || $column == $side) {
                column.innerHTML = '* &nbsp;&nbsp;&nbsp;'
            } 
            
            // SE NÃO for o caso de nenhum dos cenários previstos acima, 
            // imprima apenas espaço em branco.
            else {
                column.innerHTML = '&emsp;&nbsp;'
            }

            row.appendChild(column)
                
            $column++;
        }

            $rows++;
            $column = 1;
            
            square.appendChild(row)
    }
    squareBox.appendChild(square)
}

function removeSquare() {
    if(squareBox.hasChildNodes()) squareBox.removeChild(document.querySelector('.square'))
}

createSquare(3)