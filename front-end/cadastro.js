const formulario = document.getElementById('formulario')
const nome = document.getElementById('nome')
const textNome = document.getElementById('textNome')
const email = document.getElementById('email')
const textEmail = document.getElementById('textEmail')
const senha = document.getElementById('senha')
const textSenha = document.getElementById('textSenha')
const botao = document.getElementById('botao')
const textFormulario = document.getElementById('textFormulario')

botao.addEventListener('click', function (e) {
    e.preventDefault()  
    
    if(nome.value == '' && email.value =='' && senha.value == '' && telefone.value =='' ){
        textFormulario.textContent = 'Você precisa preencher todos os campos' 
    }else{
        textFormulario.textContent = ''
    }
    
    console.log(nome.value)
    console.log(email.value)
    console.log(senha.value)

})

email.addEventListener('keyup', function () {
    if(validarEmail(email.value) !== true){
        textEmail.innerHTML = 'O formato do email deve ser com <br> letras minúsculas ex.: teste@gmail.com'    
    }else{
        textEmail.textContent = ''
    }
}) 

function validarEmail(e_mail){
    let padraoEmail = /^[a-z0-9.]+@[a-z0-9]+\.([a-z]+)?$/
    return padraoEmail.test(e_mail)
}

senha.addEventListener('keyup', function() {
    if(validarSenha(senha.value) !== true){
        textSenha.innerHTML = 'O formato da senha deve ter 6 caracteres, <br> com 1 letra maiúscula, 1 minúscula, 1 número <br> e 1 carctere especial. ex.: Br@sil2022'    
    }else{
        textSenha.textContent = ''
    }
})

function validarSenha(senhaValor){
    let padraoSenha = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[$*&@#])[0-9a-zA-Z$*&@#]{6,}$/

    return padraoSenha.test(senhaValor)

    /* 
        /^
            (?=.*\d)              // deve conter ao menos um dígito
            (?=.*[a-z])           // deve conter ao menos uma letra minúscula
            (?=.*[A-Z])           // deve conter ao menos uma letra maiúscula
            (?=.*[$*&@#])         // deve conter ao menos um caractere especial
            [0-9a-zA-Z$*&@#]{6,}  // deve conter ao menos 6 dos caracteres mencionados
        $/
    
    */    
}

/*

https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Guide/Regular_Expressions

http://www.regexplained.co.uk/  

*/