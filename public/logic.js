

async function ObtenerCotisacion () {
    
    const RespuestadeApi = await fetch("https://dolarapi.com/v1/dolares")
        const dato = await RespuestadeApi.json()
        return dato

}
const ul = document.createElement("ul");
async function EsperarResultado (){
    const ResultadoDeApi = await ObtenerCotisacion()

    ResultadoDeApi.forEach((element) => {
        const li = document.createElement("li")
        li.innerText=element.moneda + ':  '  + element.nombre + ':  '  + element.compra + '  '  + element.venta     // <el>innerText</el>
        const br= document.createElement("br")
        ul.appendChild(li)  // <el><append></append></el>
        ul.appendChild(br)
    });

    
}

async function crearElement(){
    await EsperarResultado()
    let Lista = document.querySelector("#ACa")   
    Lista.append(ul)
    const spinner = document.querySelector("#spinner");
    spinner.remove();

}

crearElement()
