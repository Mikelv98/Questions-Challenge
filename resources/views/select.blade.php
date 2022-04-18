<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css\headerStyle.css" rel="stylesheet">
        <link href="css\selectStyle.css" rel="stylesheet">
        <title>Questions Challenge</title>
    </head>
    <body class="antialiased">
        <header>
            <img class="logo" src="images\questionChallenge3.png" alt="Foto de logo" />
            <nav>
                <ul class="nav_links">
                    <li><a href="#" >Categorias</a></li>
                    <li><a href="#" >Como Jugar</a></li>
                    <li><a href="#" >Preguntas Frecuentes</a></li>
                </ul>
            </nav>
            <a class="cta" href="#" name ="adminHome"><button>Admin</button></a>
        </header>
        
        <h1>Questions Challenge</h1>

        <form class="tematicaF">
            <label>Seleccione una tematica</label>
            <select>
                <option value="uno">Tematica 1</option>
                <option value="dos">Tematica 2</option>
                <option value="tres">Tematica 3</option>
            </select>
        </form>
        <section class="container">
            <label>Seleccione el numero de jugadores</label>
            <button value="un jugador">1 jugador</button>
            <button value="dos jugadores">2 jugadores</button>
            <button value="tres jugadores">3 jugadores</button>
        </section>
        
        <h2>Escoja un personaje</h2>
        <section class="selectImg">
            <img class="selectPersonaje" src="images\questionChallenge3.png" alt="Personaje 1">
            <img class="selectPersonaje" src="images\questionChallenge3.png" alt="Personaje 2">
            <img class="selectPersonaje" src="images\questionChallenge3.png" alt="Personaje 3">
            <img class="selectPersonaje" src="images\questionChallenge3.png" alt="Personaje 4">
            <img class="selectPersonaje" src="images\questionChallenge3.png" alt="Personaje 5">
            <img class="selectPersonaje" src="images\questionChallenge3.png" alt="Personaje 6">
        </section>

        <a class="empezarTematica" href="" name ="Empezar"><button>Empezar</button></a>
    </body>
</html>