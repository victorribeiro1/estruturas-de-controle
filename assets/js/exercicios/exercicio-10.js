const output = document.querySelector('.output')

const cars = [
    [
        "Jetta", "Gol", "Fox", "Nivus"
    ],
    [
        "Bolt", "Cruze", "Joy", "Onix",
    ],
    [
        "Uno", "Cronos", "Mobi", "Argo",
    ],
    [
        "Mustang", "Ka", "Edge", "Territory"
    ]
]

$counter = 1; // Para auxiliar na impressão dos elementos.
              // Inicializado com 1 pois o primeiro elemento
              // desejado se encontra na 2ª posição.

let currentBrand;

for (let index = 0; index < cars.length; index++) {
    
    switch (index) {
        case 1:
            currentBrand = "gm"
            break;

        default: 
            currentBrand = ""
    }

    if (currentBrand != "gm") {
        output.innerHTML += cars[index][$counter++] + "&ensp; | &ensp;"
    }
}