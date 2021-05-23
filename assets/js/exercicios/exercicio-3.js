const textarea = document.getElementById('textarea')
const output = document.getElementById('output')


textarea.addEventListener('keyup', () => {
    // if (isValid()) sort(textarea.value)
    output.innerHTML = sort(textarea.value)

    
})

function sort(array) {
    array = array.split(',')

    for (let element in array) {
        if (!isNaN(parseInt(array[element]))) {
            array[element] = parseInt(array[element])
        }
        else {
            array.slice(index, index)
        }
    }

    array = array.sort((a, b) => {
        if (a > b) return 1

        if (a < b) return -1

        return 0
    })

    array = array.join(',&ensp;') + '.'
    
    return array
}
