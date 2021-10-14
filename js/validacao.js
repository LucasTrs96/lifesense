// Validação e verificação do checkbox dos Termos: Privacidade e Uso
function exibeAlertaTermo() {
    if (!termoPriv.checked) {
        alert('Você precisa aceitar os Termos, antes de prosseguir.');
    }
}

// Validação do CEP: Consultório
var cepCompleto = document.getElementById('cep_con');

cep_con.addEventListener('blur', function () {
    var expCep = /(\d{2})(\d{3})(\d{3})/g;
    var cepValido = expCep.exec(cepCompleto.value);
    var msgCep = '';

    if (cepValido === null) {
        msgCep = 'Digite apenas números. Sem pontos ou traços';
        console.log(msgCep);
    }

    cepCompleto.setCustomValidity(msgCep);

})

// Validação do CNPJ: Consultório
var cnpjCompleto = document.getElementById('cnpj_con');

cnpj_con.addEventListener('blur', function () {
    var expCnpj = /(\d{2})(\d{3})(\d{3})/g;
    var cnpjValido = expCnpj.exec(cnpjCompleto.value);
    var msgCnpj = '';

    if (cnpjValido === null) {
        msgCnpj = 'Digite apenas números. Sem pontos ou traços';
        console.log(msgCnpj);
    }

    cnpjCompleto.setCustomValidity(msgCnpj);

})

// Validação do Contato: Consultório
var telefone = document.querySelector('#tel_con');

telefone.addEventListener('blur', (evento) => {
    verificaTelefone(evento.target);
})

function verificaTelefone(elemento) {
    var expTel = /(^\(?[0]?[1-9]{2}\)?)[.-\s]?([9]?[\s]?[1-9]\d{3})[.-\s]?(\d{4})$/g;
    var telValido = expTel.exec(elemento.value);
    console.log(telValido);
    var msgTel = '';

    if (!telValido) {
        msgTel = 'Insira um número de telefone válido com DDD e o 9';
        console.log(!telValido);
    }

    elemento.setCustomValidity(msgTel);
}

//Validação E-Mail: Consultório
var emailCompleto = document.querySelector('#email_con')

emailCompleto.addEventListener('blur', function () {
    var expEmail = /^([\w_.]*)@([\w-.]*)\.([a-z.]){3,6}$/g;
    var verificaEmail = expEmail.exec(emailCompleto.value);
    var msgEmail = '';

    if (verificaEmail === null) {
        msgEmail = 'Digite um e-mail válido';
    }

    emailCompleto.setCustomValidity(msgEmail);
})

//Validação da Data de Nascimento: Funcionário
var dataNascimento = document.querySelector('#nasc_func');

dataNascimento.addEventListener('blur', (evento) => {
    validaDataNascimento(evento.target);
})

//Validação da Data de Nascimento: Médico
var dataNascimento = document.querySelector('#nasc_med');

dataNascimento.addEventListener('blur', (evento) => {
    validaDataNascimento(evento.target);
})

//Validação da Data de Nascimento: Paciente
var dataNascimento = document.querySelector('#nasc_pac');

dataNascimento.addEventListener('blur', (evento) => {
    validaDataNascimento(evento.target);
})

// Validação do CPF: Funcionário
var cpfCompleto = document.getElementById('cpf_func');

cpf_func.addEventListener('blur', function () {
    var expCpf = /(\d{3})(\d{3})(\d{3})(\d{2})/g;
    var cpfValido = expCpf.exec(cpfCompleto.value);
    var msgCpf = '';

    if (cpfValido === null) {
        msgCpf = 'Digite apenas números. Sem pontos ou traços';
        console.log(msgCpf);
    }

    cpfCompleto.setCustomValidity(msgCpf);

})

// Validação do CPF: Médico
var cpfCompleto = document.getElementById('cpf_med');

cpf_med.addEventListener('blur', function () {
    var expCpf = /(\d{3})(\d{3})(\d{3})(\d{2})/g;
    var cpfValido = expCpf.exec(cpfCompleto.value);
    var msgCpf = '';

    if (cpfValido === null) {
        msgCpf = 'Digite apenas números. Sem pontos ou traços';
        console.log(msgCpf);
    }

    cpfCompleto.setCustomValidity(msgCpf);

})

// Validação do CPF: Paciente
var cpfCompleto = document.getElementById('cpf_pac');

cpf_pac.addEventListener('blur', function () {
    var expCpf = /(\d{3})(\d{3})(\d{3})(\d{2})/g;
    var cpfValido = expCpf.exec(cpfCompleto.value);
    var msgCpf = '';

    if (cpfValido === null) {
        msgCpf = 'Digite apenas números. Sem pontos ou traços';
        console.log(msgCpf);
    }

    cpfCompleto.setCustomValidity(msgCpf);

})

//Validação E-Mail: Funcionário
var emailCompleto = document.querySelector('#email_func')

emailCompleto.addEventListener('blur', function () {
    var expEmail = /^([\w_.]*)@([\w-.]*)\.([a-z.]){3,6}$/g;
    var verificaEmail = expEmail.exec(emailCompleto.value);
    var msgEmail = '';

    if (verificaEmail === null) {
        msgEmail = 'Digite um e-mail válido';
    }

    emailCompleto.setCustomValidity(msgEmail);
})

//Validação E-Mail: Médico
var emailCompleto = document.querySelector('#email_med')

emailCompleto.addEventListener('blur', function () {
    var expEmail = /^([\w_.]*)@([\w-.]*)\.([a-z.]){3,6}$/g;
    var verificaEmail = expEmail.exec(emailCompleto.value);
    var msgEmail = '';

    if (verificaEmail === null) {
        msgEmail = 'Digite um e-mail válido';
    }

    emailCompleto.setCustomValidity(msgEmail);
})

//Validação E-Mail: Paciente
var emailCompleto = document.querySelector('#email_pac')

emailCompleto.addEventListener('blur', function () {
    var expEmail = /^([\w_.]*)@([\w-.]*)\.([a-z.]){3,6}$/g;
    var verificaEmail = expEmail.exec(emailCompleto.value);
    var msgEmail = '';

    if (verificaEmail === null) {
        msgEmail = 'Digite um e-mail válido';
    }

    emailCompleto.setCustomValidity(msgEmail);
})

// Validação do Contato: Funcionário
var telefone = document.querySelector('#tel_func');

telefone.addEventListener('blur', (evento) => {
    verificaTelefone(evento.target);
})

function verificaTelefone(elemento) {
    var expTel = /(^\(?[0]?[1-9]{2}\)?)[.-\s]?([9]?[\s]?[1-9]\d{3})[.-\s]?(\d{4})$/g;
    var telValido = expTel.exec(elemento.value);
    console.log(telValido);
    var msgTel = '';

    if (!telValido) {
        msgTel = 'Insira um número de telefone válido com DDD e o 9';
        console.log(!telValido);
    }

    elemento.setCustomValidity(msgTel);
}

// Validação do Contato: Médico
var telefone = document.querySelector('#tel_med');

telefone.addEventListener('blur', (evento) => {
    verificaTelefone(evento.target);
})

function verificaTelefone(elemento) {
    var expTel = /(^\(?[0]?[1-9]{2}\)?)[.-\s]?([9]?[\s]?[1-9]\d{3})[.-\s]?(\d{4})$/g;
    var telValido = expTel.exec(elemento.value);
    console.log(telValido);
    var msgTel = '';

    if (!telValido) {
        msgTel = 'Insira um número de telefone válido com DDD e o 9';
        console.log(!telValido);
    }

    elemento.setCustomValidity(msgTel);
}

// Validação do Contato: Paciente
var telefone = document.querySelector('#tel_pac');

telefone.addEventListener('blur', (evento) => {
    verificaTelefone(evento.target);
})

function verificaTelefone(elemento) {
    var expTel = /(^\(?[0]?[1-9]{2}\)?)[.-\s]?([9]?[\s]?[1-9]\d{3})[.-\s]?(\d{4})$/g;
    var telValido = expTel.exec(elemento.value);
    console.log(telValido);
    var msgTel = '';

    if (!telValido) {
        msgTel = 'Insira um número de telefone válido com DDD e o 9';
        console.log(!telValido);
    }

    elemento.setCustomValidity(msgTel);
}