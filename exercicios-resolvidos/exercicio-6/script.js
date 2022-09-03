const squareBox = document.querySelector('.square-box')

const inputNumber = document.querySelector('.exercise-6__content-box input')

inputNumber.addEventListener('change', () => {
    removeSquare()
    createSquare(inputNumber.value);
})

function createSquare(side) {
    if (side < 3) {
        alert('Ops! Lembre-se: o número mínimo deve ser 3.')
        return;

    } else if (side > 20) {
        alert('Ops! Lembre-se: o número máximo deve ser 20.')
        return;
    };

    const square = document.createElement('div')
    square.classList.add('square')
    squareBox.appendChild(square)

    for (rows= 1; rows <= side; rows++) {
        const row = document.createElement('div')
        row.classList.add('row')
        
        // adicionando um asterísco em cada coluna
        for (columns = 1; columns <= side; columns++) {
            const column = document.createElement('span')
            column.classList.add('row')
            column.innerHTML = '* &nbsp;&nbsp;&nbsp;'
            row.appendChild(column)
        }
        square.appendChild(row)
    }

}

function removeSquare() {
    if(squareBox.hasChildNodes()) squareBox.removeChild(document.querySelector('.square'))
}

createSquare(3)