function trig() {

    var a = parseInt(inputA.value);
    var b = parseInt(inputB.value);
    var c = parseInt(inputC.value);

    if ((a >= b + c) || (b >= a + c) || (c >= a + b)) {
        t1.textContent = 'não é um triângulo';
    } else if (a != b && b != c && a != c) {
        t1.textContent = 'é um triângulo escaleno';
    } else if (a == b && b == c && a == c) {
        t1.textContent = 'é um triângulo equilátero';
    } else if ((a == b && a != c) || (b == c && b != a) || (a == c && a != b)) {
        t1.textContent = 'é um triângulo isósceles';
    } else {
        t1.textContent = 'Erro';
    }

    s = (a + b + c) / 2;
    console.log(s);
    h = Math.sqrt(s * (s - a) * (s - b) * (s - c)) / (c / 2);
    console.log(h);
    d = Math.sqrt(Math.pow(a, 2) - Math.pow(h, 2));
    console.log(d);
    e = Math.sqrt(Math.pow(b, 2) - Math.pow(h, 2));
    console.log(e);

    const tri = document.querySelector('.arrow-up');
    tri.style.borderLeft = `${parseFloat(d)}cm solid transparent`;
    tri.style.borderRight = `${parseFloat(e)}cm solid transparent`;
    tri.style.borderBottom = `${parseFloat(h)}cm solid darkblue`;
}
export default trig