function validarFuncao() {
    var funcao = document.getElementById('funcao').value;
    var ch = document.getElementById('ch').value;
    var salario = document.getElementById('salario').value;
    var dias = document.getElementById('dias').value;

    if (
        funcao == "" ||
        ch == "" ||
        salario == "" ||
        dias == ""
    ) {
        document.getElementById('erro-usuario').removeAttribute('hidden');
    }else{
        document.getElementById('erro-usuario').setAttribute('hidden', true);
        document.getElementById('form-usuario').setAttribute('onsubmit', true);
    }
}

function validarEscol(){
    var nivel = document.getElementById('nivel-escolaridade').value;

    if(nivel == ""){
        document.getElementById('erro-escolaridade').removeAttribute('hidden');        
    }else{
        document.getElementById('form-escolaridade').setAttribute('onsubmit', true);
    }
}