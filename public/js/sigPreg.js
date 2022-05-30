'use strict'

let respuestas = document.getElementsByClassName('respuesta');
        respuestas[0].onclick = () => {
            // respuestas[0].style.background = "gray";
            // respuestas[1].style.background = "rgb(238, 229, 229)";
            // respuestas[2].style.background = "rgb(238, 229, 229)";
            let resultado = (respuestas[0].id == 'rc');
            if(resultado != null && resultado) 
            console.log("hola pregunta1"); 
        }
        respuestas[1].onclick = () => { 
            // respuestas[0].style.background = "rgb(238, 229, 229)";
            // respuestas[1].style.background = "gray";
            // respuestas[2].style.background = "rgb(238, 229, 229)";
            let resultado = (respuestas[1].id == 'rc');
            if(resultado != null && resultado)
            console.log("hola pregunta2"); 
        }
        respuestas[2].onclick = () => { 
            // respuestas[0].style.background = "rgb(238, 229, 229)";
            // respuestas[1].style.background = "rgb(238, 229, 229)";
            // respuestas[2].style.background = "gray";
            let resultado = (respuestas[2].id == 'rc');
            if(resultado != null && resultado)
            console.log("hola pregunta3"); 
        }


