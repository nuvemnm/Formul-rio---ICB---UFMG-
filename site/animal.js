

const btnSubmit = document.querySelector("#pdf");

btnSubmit.addEventListener("click", (event) => {
    event.preventDefault(); // Previne o comportamento padrão do botão de enviar
    window.print(); // Abre a janela de impressão
});

const form = document.querySelector("#form")
const linhagem = document.querySelector("#linhagem")
const quantidade = document.querySelector("#quantidade")
const idade = document.querySelector("#idade")
const peso = document.querySelector("#peso")
const requerente = document.querySelector("#requerente")
const orientador = document.querySelector("#orientador")
const ramal = document.querySelector("#ramal")
const unidade = document.querySelector("#unidade")
