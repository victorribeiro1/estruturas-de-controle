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

let counter1 = 1
let counter2 = 30

function confer() {

    let isTrue = false

    
    if (isValid()) isTrue = true

    if (isTrue) {
        populateList("between", getIntervalBetween(+inputs[0].value, +inputs[1].value))
        populateList("odd", getOddNumbers(getIntervalBetween(+inputs[0].value, +inputs[1].value)))
        populateList("sum", sumOddNumbers(getOddNumbers(getIntervalBetween(+inputs[0].value, +inputs[1].value))))
    }
}

    inputs[0].addEventListener('change', () => {
        if (isValid()) confer()
    })

    inputs[1].addEventListener('change', () => {
        if (isValid()) confer()
    })

function getIntervalBetween($x, $y) {
    $allNumbers = [];

    if ($x == $y || $x - $y == 1 || $x - $y == -1) {
        $allNumbers.push(0);
        return $allNumbers;
    }

    let min = $x < $y ? $x : $y;
    let max = $x > $y ? $x : $y;


    console.log('Min: ' + min)
    console.log('Max: ' + max)
    
    while (min < max - 1) {
        console.log('Depois do while: ' + $allNumbers)
        $allNumbers.push(++min);
    }

    return $allNumbers;
}

function getOddNumbers($allNumbers) {
    $oddNumbers = [];

    $allNumbers.forEach($number => {
        if ($number % 2 !== 0) $oddNumbers.push($number);
    })
    
    return $oddNumbers;
} 

function sumOddNumbers($oddNumbers) {
    // console.log($oddNumbers)
    // const $totalSum = $oddNumbers.reduce((current, next) => current += next)

    let totalSumArray = []
    var $totalSum = 0

    for (let number of $oddNumbers) {
        $totalSum += number
    }
    totalSumArray.push($totalSum)

    return [totalSumArray]
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