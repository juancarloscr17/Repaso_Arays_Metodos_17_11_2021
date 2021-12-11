addEventListener("DOMContentLoaded", async()=>{
    let config = {
        method : "POST",
        body : JSON.stringify({
            nombre : " "
        })
    };
    let petecion = await fetch("api.php",config);
    let json = await petecion.text();
    console.log(json);
})