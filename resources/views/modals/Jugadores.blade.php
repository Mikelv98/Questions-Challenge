{{-- Modal para aceptar el apoyo --}}

<div class="modal fade" id="Jugadores1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div id="Aceptar" class="modal-content" style="background-color: #4b4d58">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: whitesmoke">Selecciona tus personajes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="personajes" id = "pjs">                
                    <input class="input-hidden" type="radio" name="personaje[]" id="harryPotter" >
                    <label class="form-check-label" for="harryPotter">
                    <img class="selectPersonaje" src="images/avatares/harryPotter.png" alt="">
                    </label>
                
                    <input class="input-hidden" type="radio" name="personaje[]" id="kemonito">
                    <label class="form-check-label" for="kemonito">
                    <img class="selectPersonaje" src="images/avatares/kemonito.png" alt="">
                    </label>
                
                    <input class="input-hidden" type="radio" name="personaje[]" id="perro" >
                    <label class="form-check-label" for="perro">
                    <img class="selectPersonaje" src="images/avatares/perro.png" alt="">
                    </label>
                
                    <input class="input-hidden" type="radio" name="personaje[]" id="pikachu" >
                    <label class="form-check-label" for="pikachu">
                    <img class="selectPersonaje" src="images/avatares/pikachu.png" alt="">
                    </label>
                
                    <input class="input-hidden" type="radio" name="personaje[]" id="robot" >
                    <label class="form-check-label" for="robot">
                    <img class="selectPersonaje" src="images/avatares/robot.png" alt="">
                    </label>
                
                    <input class="input-hidden" type="radio" name="personaje[]" id="tabla" >
                    <label class="form-check-label" for="tabla">
                    <img class="selectPersonaje" src="images/avatares/tabla.png" alt="">
                    </label>

                    <p class="pselect">Selecciona tu personaje </p>
                    <p class="pselect" id = "numPjSelect"></p>
            </div>
               <button id="mandarPj" class = "btnconfirmar">Confirmar</button> 
        </div>
    </div>
</div>