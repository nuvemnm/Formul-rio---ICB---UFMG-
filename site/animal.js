/*
const btnGenerate = document.querySelector("#pdf");

btnGenerate.addEventListener("click", () => {

    const content = document.querySelector("#container");
    window.scrollTo(0, window.scrollY - scroll);

    const options = {
        margin: [0,0,0,0],
        filename: "arquivo.pdf",
        html2canvas: {
            scale: 10,
            windowWidth: document.documentElement.offsetWidth,
            windowHeight: document.documentElement.offsetHeight
        },
        jsPDF: {unit: "mm", format: "a4", orientation: "portrait"},
    };
    
    html2pdf().set(options).from(container).save();
});
*/


const btnSubmit = document.querySelector("#pdf");

btnSubmit.addEventListener("click", (event) => {
    event.preventDefault(); // Previne o comportamento padrão do botão de enviar
    window.print(); // Abre a janela de impressão
});

