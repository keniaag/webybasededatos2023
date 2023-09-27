$(document).ready(function(){
    var palabra = "";
    var palabraOculta = "";
    var intentos = 0;
    const maxIntentos = 6; 
    var letrasAdivinadas = [];
    const listaPalabras = ['codigo', 'software', 'programacion', 'aplicaciones', 'javascript', 'proyecto', 'jquery'];

    $("#boton1").click(function (e) {
        var rand = Math.floor(Math.random() * listaPalabras.length);
        palabra = listaPalabras[rand].toUpperCase();
        palabraOculta = "_".repeat(palabra.length);
        $("#h3").text(palabraOculta);
        intentos = 0;
        letrasAdivinadas = [];
        $("#intentos").text(intentos);
        console.log("funciona")
    });

    $("#boton").click(function (e) {
        var letra = $("#letra").val().toUpperCase();

        if (!/^[A-Z]$/.test(letra)) {
            alert("Ingresa una sola letra válida.");
            return;
        }

        if (letrasAdivinadas.includes(letra)) {
            alert("Ya adivinaste esa letra.");
            return;
        }

        letrasAdivinadas.push(letra);

        if (palabra.includes(letra)) {
            for (var i = 0; i < palabra.length; i++) {
                if (palabra[i] === letra) {
                    palabraOculta = palabraOculta.substring(0, i) + letra + palabraOculta.substring(i + 1);
                }
            }
        } else {
            intentos++;
            $("#intentos").text(intentos);
        }

        if(intentos==0){
            $("#img").attr('src', 'imagenes/ahorcado.png')
        }else{
            $("#img").attr('src', 'imagenes/ahorcado' + intentos + ".png")
        }
        $("#h3").text(palabraOculta);

        if (intentos >= maxIntentos){
            alert("¡Perdiste! La palabra era: " + palabra);
            window.location.href = 'juegoproyecto.html';
        } else if (palabraOculta === palabra) {
            alert("¡Felicidades has ganado!")
            window.location.href = 'juegoproyecto.html';
        }
        
        $("#letra").val("");
    });
});