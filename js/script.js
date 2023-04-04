const nombre = document.getElementById("nombre");
const apellido = document.getElementById("apellido");
const numero = document.getElementById("numero");
const correo = document.getElementById("correo");

FormData.addeventlisterner("submit", e=>{
    e.prevendefault()
    if(nombre.ariaValueMax.length <6){
        alert("nombre muy corto");
    }
})