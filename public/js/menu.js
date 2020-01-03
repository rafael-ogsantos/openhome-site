
const selectElement = (s) => document.querySelector(s);

selectElement('.open').addEventListener('click', () => {
    selectElement('.nav-list').classList.add('active');
    selectElement('.nav-list2').classList.add('active');
})

selectElement('.close').addEventListener('click', () => {
    selectElement('.nav-list').classList.remove('active');
    selectElement('.nav-list2').classList.remove('active');
})

function animaTitulo(anima){
   const textoArry = anima.innerHTML.split('');
   anima.innerHTML = '';
   textoArry.forEach((letra, i) => {
       setTimeout(() => anima.innerHTML += letra , 75 * i)
   });
}

const titulo = document.querySelector('.sub-logo');
animaTitulo(titulo)