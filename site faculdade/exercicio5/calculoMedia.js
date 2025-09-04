document.getElementById("Calcular").addEventListener("submit",function(e){
    e.preventDefault()
    
    let nota1 = document.getElementById("nota1").value.trim();
    let nota2 = document.getElementById("nota2").value.trim();

    let media = (nota1 + nota2) / 2

console.log(media)
/*if(media >=6){
    console.log("Aprovado")

}else {
    console.log("Reprovado")

}

document.getElementById("media").innerText = `Media: ${media}`
*/
})


