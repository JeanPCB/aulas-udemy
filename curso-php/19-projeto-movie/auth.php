<?php
    include_once "templates/header.php";
?>

<section id="main-container" class="container d-flex justify-content-center">
    <div class="row col-md-12 justify-content-center gap-5">
        <article id="login-container" class="col-md-3">
            <h2 class="mb-3">Entrar</h2>
            <form action="auth_process.php" method="POST" class="d-grid">
                <input type="hidden" name="type" value="login">
                <div>
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div>
                    <label for="password" class="form-label">Senha:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <input type="submit" class="btn text-white focus-ring w-100 login-register-btn" value="Entrar">
            </form>
        </article>
        <article id="register-container" class="col-md-4">
            <h2 class="mb-3">Registrar</h2>
            <form action="auth_process.php" method="POST" class="d-grid">
                <input type="hidden" name="type" value="register">
                <div>
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" id="email" class="form-control">    
                </div>
                <div>
                    <label for="name" class="form-label">Nome:</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div>
                    <label for="lastname" class="form-label">Sobrenome:</label>
                    <input type="text" name="lastname" id="lastname" class="form-control">
                </div>
                <div>
                    <label for="password" class="form-label">Senha:</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div>
                    <label for="confirmpass" class="form-label">Confirmar Senha:</label>
                    <input type="password" name="confirmpass" id="confirmpass" class="form-control">
                </div>
                <input type="submit" class="btn text-white focus-ring w-100 login-register-btn" value="Registrar">
            </form>
        </article>
    </div>
</section>

<?php
    include_once "templates/footer.php";
?>