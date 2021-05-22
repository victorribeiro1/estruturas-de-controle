const inputs = document.querySelectorAll('input')

const table = document.querySelector('.exercise-9__table')
const numbersBox = document.querySelectorAll('.numbers-box')

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

inputs.forEach(input => {
    input.addEventListener('change', () => {
        if (isValid()) {
            populateList("between", getIntervalBetween(inputs[0].value, inputs[1].value))
            populateList("odd", getOddNumbers(getIntervalBetween(inputs[0].value, inputs[1].value)))
            populateList("sum", sumOddNumbers(getOddNumbers(getIntervalBetween(inputs[0].value, inputs[1].value))))
        }
    })
})

function getIntervalBetween($x, $y) {
    $allNumbers = [];

    $min = $x < $y ? $x : $y;
    $max = $x > $y ? $x : $y;

    while ($min < $max - 1) {
        $allNumbers.push(++$min);
    }

    return $allNumbers;
}

function getOddNumbers($allNumbers) {
    $oddNumbers = [];

    $allNumbers.forEach($number => {
        if ($number % 2 !== 0) $oddNumbers.push($number);
    })
    
    // console.log($allNumbers)
    return $oddNumbers;
} 

function sumOddNumbers($oddNumbers) {
    const $totalSum = $oddNumbers.reduce((current, next) => current += next)

    return [$totalSum]
}

function removeListItems(listName) {
    let list = document.querySelector(`.${listName}`)
    if (list.hasChildNodes) {
        document.querySelectorAll(`.${listName} li`).forEach(li => {
            list.removeChild(li)
        })
    }
}

function populateList(listClass, ...array) {    
    let list = document.querySelector(`.${listClass}`)
    removeListItems(listClass)
    
    array.forEach(element => {
        element.forEach(element => {
            let li = document.createElement('li')
            li.innerText = element
            list.appendChild(li)
        })
    })
}

removeListItems("between")