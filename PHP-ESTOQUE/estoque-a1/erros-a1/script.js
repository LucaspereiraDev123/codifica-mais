
document.querySelector("form").addEventListener("submit", function (e) {
    const campoNome = document.getElementById("nome");

    if (campoNome.value.trim() === "") {
        e.preventDefault();
        alert("O campo Nome do Produto não pode conter apenas espaços.");
        exit;
    };

    const campoQuantidade = document.getElementById("quantidade");

    if (campoQuantidade.value.trim() < 0) {
        e.preventDefault();
        alert("O campo Quantidade não pode ser negativo.");
        exit;
    };

    const campoValor = document.getElementById("valor");

    if (campoValor.value.trim() <= 0) {
        e.preventDefault();
        alert("O campo Valor não pode ser menor ou igual a 0.");
        exit;
    }
});


// document.querySelector("form").addEventListener("submit", function (e) {
//     const campo = document.getElementById("quantidade");

//     if (campo.value.trim() < 0) {
//         e.preventDefault();
//         alert("O campo Quantidade não pode ser negativo.");
//     };
// });



// document.querySelector("form").addEventListener("submit", function (e) {
//     const campo = document.getElementById("valor");

//     if (campo.value.trim() <= 0) {
//         e.preventDefault();
//         alert("O campo Valor não pode ser menor ou igual a 0.");
//     };
// });
