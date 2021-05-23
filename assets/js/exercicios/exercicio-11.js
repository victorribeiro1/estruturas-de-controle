const listBox = document.querySelector('.list-box')

$users = [
    {
        "nome" : "Victor Ribeiro Cunha",
        "email" : "victor1234@gmail.com",
        "senha" : "123456"
    },
    {
        "nome" : "Isabel Martines",
        "email" : "isabel4312@gmail.com",
        "senha" : "3d54cd5"
    },
    {
        "nome" : "Miguel Fernandez",
        "email" : "miguel4321@gmail.com",
        "senha" : "Ygai$%ux"
    },
    {
        "nome" : "Rodriguinho da Silva Souza",
        "email" : "rodriguinho1321@gmail.com",
        "senha" : "5g4r4GTH"
    },
    {
        "nome" : "Menezes Tenessi Soárez",
        "email" : "Menezes1212@gmail.com",
        "senha" : "12_j@A6"
    }
];

$names = [];
$emails = [];
$passwords = [];

$users.forEach(user => {
    $names.push(user.nome)
    $emails.push(user.email)
    $passwords.push(user.senha)
})

function createList(title, users) {
    let list = document.createElement('ul')
    let h4 = document.createElement('h4')
    h4.innerText = title
    list.appendChild(h4)
    listBox.appendChild(list)

    users.forEach(user => {
        let li = document.createElement('li')
        li.innerText = user

        list.appendChild(li)
    })
}


const select = document.getElementById('select')

select.addEventListener('change', e => {
    if (e.target.value == "name") {
        removeLists()
        createList("nome", $names)
    }
    else if (e.target.value == "email") {
        removeLists()
        createList("email", $emails)
    }
    else if(e.target.value == "password") {
        removeLists()
        createList("senha", $passwords)
    }
    else {
        removeLists()
        createList("nome", $names)
        createList("email", $emails)
        createList("senha", $passwords)
    }
})

function removeLists() {
    document.querySelectorAll('.exercise-11__content-box ul').forEach(list => {
        listBox.removeChild(list)
    })
}