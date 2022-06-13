<main id="main" class="main">
  <br>
  
     <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
               <h1 class="card-title" style="font-size:30px;">BIENESTAR &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary" type="submit" style="height: 50px;" data-bs-toggle="modal" data-bs-target="#ModalRegistroBienestar">AGREGAR</button></h1>
             </div>
           </div>
         </div>
      </div>
     
    
  

  <section class="section">
    
     <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <br>
            <div class="table-responsive">
            <table class="table" id="tablaBienestar" style="width:100%">
              <thead>
                <tr>
                <th scope="col">#</th>
                  <th scope="col">CEDULA</th>
                  <th scope="col">NOMBRE</th>
                  <th scope="col">TELEFONO</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                
              </tbody>
            </table>
          </div>

          </div>
        </div>

      </div>
    </div>

    <!-- modal para registrar administrador -->
    <form action="" method="POST" id="RegistrarBienestar">
      <div class="modal fade" id="ModalRegistroBienestar" tabindex="-1">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><b>REGISTRAR BIENESTAR</b></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             <div class="container">
               <div class="row">
                 <div class="col-6">
                    <b>CEDULA:</b> <input type="number" name="cedula" id="cedula" class="form-control" required>
                  </div>
                  <div class="col-6">
                   <b>NOMBRES:</b> <input type="text" name="nombres" id="nombres" class="form-control" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required>
                  </div>
               </div>
               <div class="row">
                 <div class="col-6">
                    <b>PRIMER APELLIDO:</b> <input type="text" name="primer_apellido" id="primer_apellido" class="form-control" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required>
                  </div>
                  <div class="col-6">
                   <b>SEGUNDO APELLIDO:</b> <input type="text" name="segundo_apellido" id="segundo_apellido" class="form-control" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required>
                  </div>
               </div>
               <div class="row">
                 <div class="col-6">
                    <b>FECHA DE NAC:</b> <input type="date" name="fechaNac" id="fechaNac" class="form-control" required>
                  </div>
                  <div class="col-6">
                   <b>DIRECCION:</b> <input type="text" name="direccion" id="direccion" class="form-control" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required>
                  </div>
               </div>
               <div class="row">
                 <div class="col-6">
                    <b>TELEFONO:</b> <input type="number" name="telefono" id="telefono" class="form-control" required>
                  </div>
                  <div class="col-6">
                   <b>CORREO:</b> <input type="text" name="correo" id="correo" class="form-control" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required>
                  </div>
               </div>
               <div class="row">
                 
                  <div class="col-6">
                    <b>CONTRASEÑA:</b> <input type="text" name="contraseña" id="contraseña" class="form-control" required>
                  </div>
               </div>
               
             </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CERRAR</button>
              <button type="submit" class="btn btn-primary">GUARDAR</button>
            </div>
          </div>
        </div>
      </div>
    </form>

    <!-- modal para editar administrador -->

    <form action="" method="POST" id="EditarBienestar">
      <div class="modal fade" id="ModalEditBienestar" tabindex="-1">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><b>EDITAR BIENESTAR</b></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             <div class="container">
               <div class="row">
                 <div class="col-6">
                    <b>CEDULA:</b> <input type="number" name="cedulaE" id="cedulaE" class="form-control" required>
                  </div>
                  <div class="col-6">
                   <b>NOMBRES:</b> <input type="text" name="nombresE" id="nombresE" class="form-control" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required>
                  </div>
               </div>
               <div class="row">
                 <div class="col-6">
                    <b>PRIMER APELLIDO:</b> <input type="text" name="primer_apellidoE" id="primer_apellidoE" class="form-control" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required>
                  </div>
                  <div class="col-6">
                   <b>SEGUNDO APELLIDO:</b> <input type="text" name="segundo_apellidoE" id="segundo_apellidoE" class="form-control" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required>
                  </div>
               </div>
               <div class="row">
                 <div class="col-6">
                    <b>FECHA DE NAC:</b> <input type="date" name="fechaNacE" id="fechaNacE" class="form-control" required>
                  </div>
                  <div class="col-6">
                   <b>DIRECCION:</b> <input type="text" name="direccionE" id="direccionE" class="form-control" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required>
                  </div>
               </div>
               <div class="row">
                 <div class="col-6">
                    <b>TELEFONO:</b> <input type="number" name="telefonoE" id="telefonoE" class="form-control" required>
                  </div>
                  <div class="col-6">
                   <b>CORREO:</b> <input type="text" name="correoE" id="correoE" class="form-control" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required>
                  </div>
               </div>
               <div class="row">
                 
                 
                  <div class="col-6">
                    <b>CONTRASEÑA:</b> <input type="text" name="contraseñaE" id="contraseñaE" class="form-control" required>
                  </div>
               </div>
               
             </div>
            </div>
            <div class="modal-footer">
              <input type="hidden" id="id_persona" name="id_persona">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CERRAR</button>
              <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
            </div>
          </div>
        </div>
      </div><!-- End Basic Modal-->
    </form>
  </section>

</main>