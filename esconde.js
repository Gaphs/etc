function hidequad() {
    document.getElementById("tra").style.display = "flex";
    document.getElementById("quad").style.display = "none";
}
function hidetrig() {
    document.getElementById("tra").style.display = "none";
    document.getElementById("quad").style.display = "flex";
}
function limpar() {

    document.getElementById("texto1").textContent = "";
    document.getElementById("texto2").textContent = "";

    inputA.value = '';
    inputB.value = '';
    inputC.value = '';
    Base.value = '';
    Altura.value = '';


    document.querySelector('.arrow-up').style = "none";
    document.querySelector('.square').style = "none";
}
export default {
    hidequad,
    hidetrig,
    limpar
}