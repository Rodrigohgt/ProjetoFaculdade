function validar() {
    if (document.getElementById('num').value == " ") {
        alert('Insira o numero do cartão');
        document.getElementById('num').focus();
        return false;
    }
    return true;
}

if (document.getElementById('nome').value == " ") {
    alert('Insirao nome do titular');
    document.getElementById('nome').focus();

    return false;


} else if (document.getElementById('validade').value == " ") {
    alert('Insirao a validade do cartão');
    document.getElementById('vaalidade').focus();
    return false;

} else if (document.getElementById('cvv').value == " ") {
    alert('Insirao o cvv do cartão');
    document.getElementById('validade').focus();
    return false;

}