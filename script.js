
document.getElementById("calcular").onclick = function calcular(){
    let peso = document.getElementById("peso").value;
    let altura = document.getElementById("altura").value;
    imc = peso/(altura*altura);
    if(imc<18.5){
        document.getElementById("resultado").innerHTML = `Seu imc é ${imc.toFixed(2)} <br/> Situação: magreza`;
        document.getElementById("resultado").style.color = "red";
    }else if(imc>=18.5 && imc<=24.9){
        document.getElementById("resultado").innerHTML = `Seu imc é ${imc.toFixed(2)} <br/> Situação: normal`;
        document.getElementById("resultado").style.color = "green";
    }else if(imc>24.9 && imc<=29.9){
        document.getElementById("resultado").innerHTML = `Seu imc é ${imc.toFixed(2)} <br/> Situação: sobrepeso`;
        document.getElementById("resultado").style.color = "#FF8C00";
    }else{
        document.getElementById("resultado").innerHTML = `Seu imc é ${imc.toFixed(2)} <br/> Situação: obesidade`;
        document.getElementById("resultado").style.color = "red";
    }

}

document.getElementById("limpar").onclick = function limpar(){
    document.getElementById("peso").value = "";
    document.getElementById("altura").value = "";
}

//Função para voltar à div do cálculo


