const names = document.querySelector('#name')
const form = document.querySelector('#form')
const error = document.querySelector('#error')
const contact = document.querySelector('#contact')
const password= document.querySelector('#password')
const getvalue= document.querySelector('.getvalue')
const getbutton= document.querySelector('.getbutton')
const delbutton= document.querySelector('.delbutton')
const readall= document.querySelector('.readall')


form.addEventListener('submit', (e)=>{
    let messages = []
    if (names.value < 3 || names.value == null || names.value == '') {
        messages.push('Invalid Username. kindly note that: \n (i)name cannot be empty\n (ii)name can not be less than 3 characters')
    } else if(password.value < 3 || password.value == 'password') {
        messages.push('Invalid password. kindly note that: \n (i)password cannot be empty\n (ii)password can not be less than 3 characters\n (iii)password cannot be password')
    } else {
        // alert("Registration complete")
        localStorage.setItem('name', names.value)
        localStorage.setItem('password', password.value)
        localStorage.setItem('contact', contact.value)
    }
    
    if(messages.length > 0){
        error.innerText = messages.join(' \n ')
        e.preventDefault()
    }
})

getbutton.onclick = ()=> {
    getvalue.textContent = localStorage.getItem('contact')
}
delbutton.addEventListener('click', function () {
    localStorage.removeItem('contact')
})

readall.onclick = function () {
    var keys = Object.keys(localStorage)
    console.log(keys)

    for (const key of keys) {
        // alert('key : ' +key+ ' : value : '+ localStorage.getItem(key))
        getvalue.textContent = 'key : ' +key+ ' : value : '+ localStorage.getItem(key)
    }
}