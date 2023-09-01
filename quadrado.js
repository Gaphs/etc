function quad() {
    var ba = parseFloat(Base.value);
    var al = parseFloat(Altura.value);

    if (ba == al) {
        t2.textContent = "É um quadrado";
    } else {
        t2.textContent = "É um retângulo";
    }

    const qua = document.querySelector('.square');
    qua.style.width = `${ba}cm `;
    qua.style.height = `${al}cm`;
    qua.style.backgroundColor = "#7a297a";

}
export default quad