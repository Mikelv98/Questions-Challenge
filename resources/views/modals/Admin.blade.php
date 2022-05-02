{{-- Modal para aceptar el apoyo --}}
<div class="modal fade" id="Administrador" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div id="Aceptar" class="modal-content" style="background-color: #4b4d58">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: whitesmoke">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="modal-body"  action="{{route('Login')}}" method="post">
                {{-- @method('put') --}}
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" style="color: whitesmoke">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" style="color: whitesmoke">Contraseña</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>

                <hr style="background-color: white; width: 100%" />
                <div class="BotonFin">
                    <button type="button" class="izqbtn btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                    <input type="submit" class="derbtn btn btn-primary" value="iniciar sesion">
                </div>
            </form>
        </div>
    </div>
</div>
