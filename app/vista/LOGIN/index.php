
  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              
              <div class="card mb-3">

                <div class="card-body">
                  

                  <div class="pt-4 pb-2">
                    <h5 class="text-center pb-0 fs-4"> <img src="public/assets/img/logosena.png" style="width: 50px; height:50px;">&nbsp; &nbsp; INICIAR SESION</h5>
                    
                  
                  </div>

                  <form  class="row g-3" id="FormularioLogin" method="POST" >

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Usuario</label>
                      <div class="input-group has-validation">

                        <input type="text" name="usuario" id="usuario" class="form-control"  required>
                        <div class="invalid-feedback">Por favor Ingrese Un usuario.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Contraseña</label>
                      <input type="password" name="password" class="form-control" id="password" required>
                      <div class="invalid-feedback">Por favor Ingrese una Contraseña</div>
                    </div>
                    <div class="col-12">
                      <!-- <b style="color:red;">Contraseña Incorrecta</b> -->
                    </div>
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                      
                        <label class="form-check-label" for="rememberMe">Recordarme</label>
                      </div>
                    </div>
                    <div class="col-12">
                     
                      <button class="button-5 w-100" type="submit">INICIAR SESION</button>
                      





                    </div>
              
                    <div class="col-12">
                      <p class="small mb-0"> <a href="pages-register.html">Olvido su Contraseña</a></p>
                    </div>
                    <?php
                          $login = new LoginControlador();
                          $login -> IniciarSesion();
                     ?>
                    
                  </form>

                </div>
              </div>
             
             


              
            

              

            </div>
          </div>
        </div>

      </section>

    </div>
  </main>

  