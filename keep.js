const names = document.getElementById('name')
const contact = document.getElementById('contact')
const password = document.getElementById('password')
const error = document.getElementById('error')
const form = document.getElementById('form')

form.addEventListener('submit', (e) => {
    let messages = []
    if (names.value ==="" || names.value == null) {
        messages.push('Please input your name')
    }else if (password.value < 3) {
        messages.push('Password must be more than 3')
    }else {
        error.innerHTML = 'Thank you'
        e.preventDefault()
    }


    if (messages.length >0){
        e.preventDefault()
        error.innerText = messages.join(' , ')
    }
})

