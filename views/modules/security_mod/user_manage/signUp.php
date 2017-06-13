 <div class="signIn-container">
        <div class="icons-container">
            <a href="home" class="icons-link">
            <i class="material-icons">keyboard_backspace</i>
            <span class="text-icon">VOLVER<span>
            </a>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-lg-6 offset-md-2 offset-lg-3">
                    <div class="form-text-container">
                        <h2 class="form-title">BIOMATIC</h2>
                    </div>
                    <div class="form-signIn">
                        <form method="post" id="signUp">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Nombre</label>
                                        <input type="text" name="data[]" class="form-control form-input" id="name" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="lastName" class="form-label">Apellido</label>
                                        <input type="text" name="data[]" class="form-control form-input" id="lastName" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="emailSignUp" class="form-label">Correo Electrónico</label>
                                <input type="email" name="data[]" class="form-control form-input email" id="emailSignUp" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="passSignUp" class="form-label">Contraseña</label>
                                <input type="password" name="data[]" class="form-control form-input" id="passSignUp" aria-describedby="passHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="passSignUpR" class="form-label">Repetir Contraseña</label>
                                <input type="password" name="data[]" class="form-control form-input" id="passSignUpR" required>

                            </div>
                            <div class="button-container">
                                <button class="form-button" id="butonSignUp">REGISTRARME</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
