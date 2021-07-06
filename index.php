<?php require_once './includes/header.php'; ?>
    <!-- MENU -->
    <div class="container">
        <!-- CAJA PRINCIPAL -->
        <div class="principal">
            <div class="contenido-principal">
                <h1>Últimas entradas</h1>
                <article class="entrada">
                    <a href="">
                        <h2>Título de mi entrada</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet maxime numquam perspiciatis, in doloremque laudantium vitae voluptate, quaerat libero voluptatibus facere amet omnis aut possimus minus commodi corporis alias. Quisquam.</p>
                    </a>
                </article>
                <article class="entrada">
                    <a href="">
                        <h2>Título de mi entrada</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet maxime numquam perspiciatis, in doloremque laudantium vitae voluptate, quaerat libero voluptatibus facere amet omnis aut possimus minus commodi corporis alias. Quisquam.</p>
                    </a>
                </article>
                <article class="entrada">
                    <a href="">
                        <h2>Título de mi entrada</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet maxime numquam perspiciatis, in doloremque laudantium vitae voluptate, quaerat libero voluptatibus facere amet omnis aut possimus minus commodi corporis alias. Quisquam.</p>
                    </a>
                </article>
                <article class="entrada">
                    <a href="">
                        <h2>Título de mi entrada</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet maxime numquam perspiciatis, in doloremque laudantium vitae voluptate, quaerat libero voluptatibus facere amet omnis aut possimus minus commodi corporis alias. Quisquam.</p>
                    </a>
                </article>
                <div class="ver-todas">
                    <a href="">Ver Todas</a>
                </div>
            </div>
        </div>
        <!-- BARRA LATERAL -->
        <aside id="sidebar">
            <div id="login" class="block-aside">
                <h3>Identificate</h3>
                <form action="login.php" method="POST">
                    <div class="campo">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email">
                    </div>
                    <div class="campo">
                        <label for="password">Contraseña:</label>
                        <input type="password" name="password">
                    </div>
                    <div class="campo">
                        <input type="submit" value="Entrar">
                    </div>
                </form>
            </div>
            <div id="register" class="block-aside">
                <h3>Registrate</h3>
                <form action="registro.php" method="POST">
                    <div class="campo">
                        <label for="name">Nombre:</label>
                        <input type="text" name="name">
                    </div>
                    <div class="campo">
                        <label for="last-name">Apellidos:</label>
                        <input type="text" name="last-name">
                    </div>
                    <div class="campo">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email">
                    </div>
                    <div class="campo">
                        <label for="password">Contraseña:</label>
                        <input type="password" name="password">
                    </div>
                    <div class="campo">
                        <input type="submit" value="Registrar">
                    </div>
                </form>
            </div>
        </aside>
    </div>
    <!-- PIE DE PÁGINA -->
    <footer id="pie">
        <p>Desarrollado por Cervantes Jaramillo Luis Eduardo &copy; 2021</p>
    </footer>
</body>
</html>