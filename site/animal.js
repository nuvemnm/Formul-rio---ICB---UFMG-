

const cpm1quantidade = document.querySelector('#quantidade');
const cpm1idade = document.querySelector('#idade');
const cpm1peso = document.querySelector('#peso');
const cpm1especie = document.querySelector('#especie');



const cpm2quantidade = document.querySelector('#quantidade2');
const cpm2idade = document.querySelector('#idade2');
const cpm2peso = document.querySelector('#peso2');
const cpm2especie = document.querySelector('#especie')

function atualizacpm2(){
    cpm2quantidade.value = cpm1quantidade.value;
    cpm2idade.value = cpm1idade.value;
    cpm2peso.value = cpm1peso.value;
    cpm2especie.radio = cpm1especie.radio
}

cpm1quantidade.addEventListener('input', atualizacpm2);
cpm1idade.addEventListener('input', atualizacpm2);
cpm1peso.addEventListener('input', atualizacpm2);
cpm1especie.addEventListener('inut', atualizacpm2);

function gerapdf(){
    window.print();
}
