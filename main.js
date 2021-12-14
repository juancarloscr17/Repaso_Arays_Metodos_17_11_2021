addEventListener("DOMContentLoaded", async()=>{
    let config = {
        method : "POST",
        body : JSON.stringify({
            nombre : " "
        })
    };
    let petecion = await fetch("https://juancarloscr17.000webhostapp.com/Repaso_Arays_Metodos_17_11_2021/api.php",config);
    let json = await petecion.text();
    console.log(json);
})