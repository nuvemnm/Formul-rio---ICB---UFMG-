const cpm1quantidade = document.querySelector('#quantidade');
const cpm1idade = document.querySelector('#idade');
const cpm1peso = document.querySelector('#peso');
const cpm1rato = document.querySelector('#rato');
const cpm1camundongo = document.querySelector('#camundongo');
const cpm1femea = document.querySelector('#femea');
const cpm1macho = document.querySelector('#macho');
const cpm1swiss= document.querySelector('#swiss');
const cpm1balbc = document.querySelector('#balbc');
const cpm1c57bl6j = document.querySelector('#c57bl6j');


const cpm2quantidade = document.querySelector('#quantidade2');
const cpm2idade = document.querySelector('#idade2');
const cpm2peso = document.querySelector('#peso2');
const cpm2rato = document.querySelector('#rato2');
const cpm2camundongo = document.querySelector('#camundongo2');
const cpm2femea = document.querySelector('#femea2');
const cpm2macho = document.querySelector('#macho2');
const cpm2swiss= document.querySelector('#swiss2');
const cpm2balbc = document.querySelector('#balbc2');
const cpm2c57bl6j = document.querySelector('#c57bl6j2');


function atualizacpm2(){
    cpm2quantidade.value = cpm1quantidade.value;
    cpm2idade.value = cpm1idade.value;
    cpm2peso.value = cpm1peso.value;
}

function atualizaespecie(){
    if(cpm1rato.checked){
        cpm2rato.checked = true;
    }else if(cpm1camundongo.checked){
        cpm2camundongo.checked = true;
    }
}

function atualizasexo(){
    if(cpm1femea.checked){
        cpm2femea.checked = true;
    }else if(cpm1macho.checked){
        cpm2macho.checked = true;
    }
}

function atualizalinhagem(){
    if(cpm1swiss.checked){
        cpm2swiss.checked = true;
    }else if(cpm1balbc.checked){
        cpm2balbc.checked = true;
    }else if(cpm1c57bl6j.checked){
        cpm2c57bl6j.checked = true;
    }
}

//chama funções detro do container
container.addEventListener('input', atualizacpm2);
container.addEventListener('change', atualizaespecie);
container.addEventListener('change', atualizasexo);
container.addEventListener('change', atualizalinhagem);

function numero(){
	//cria variaveis
	const quantidade = document.getElementById("quantidade");
	const idade = document.getElementById("idade");
	const peso = document.getElementById("peso");
	const ramal = document.getElementById("ramal");
	//limita so para numeros
	quantidade.value = quantidade.value.replace(/[^0-9]/g, '');
	idade.value = idade.value.replace(/[^0-9]/g, '');
	peso.value = peso.value.replace(/[^0-9]/g, '');
	ramal.value = ramal.value.replace(/[^0-9]/g, '');
}

//função print
function gerapdf(){
    window.print();
}

