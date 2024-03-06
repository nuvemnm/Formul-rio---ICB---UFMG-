
const btnGenerate = document.querySelector("#pdf");

btnGenerate.addEventListener("click", () => {

    const content = document.querySelector("#container");

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
