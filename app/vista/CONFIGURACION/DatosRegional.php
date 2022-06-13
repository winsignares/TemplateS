<main id="main" class="main">
  <br>
  
     <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
               <h1 class="card-title" style="font-size:30px;">REGIONAL &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary" type="submit" style="height: 50px;" data-bs-toggle="modal" data-bs-target="#ModalRegistroRegional">AGREGAR</button></h1>
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
            <table class="table" id="tablaRegional" style="width:100%">
              <thead>
                <tr>
                <th scope="col">#</th>
                  <th scope="col">NOMBRE REGIONAL</th>
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

    <form action="" method="POST" id="RegistrarRegional">
      <div class="modal fade" id="ModalRegistroRegional" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><b>REGISTRAR REGIONAL</b></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             <div class="container">
               <div class="row">
                 <div class="col-12">
                    <b>NOMBRE DE LA REGIONAL:</b> <input type="text" name="nombre_regional" id="nombre_regional" class="form-control" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required>
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


    <form action="" method="POST" id="EditarRegional">
      <div class="modal fade" id="ModalEditRegional" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><b>EDITAR REGIONAL</b></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             <div class="container">
               <div class="row">
                 <div class="col-12">
                    <b>NOMBRE DE LA REGIONAL:</b> <input type="text" name="nombre_regionale" id="nombre_regionale" class="form-control" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required>
                     <input type="hidden" name="id_regional" id="id_regional">
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
      </div>
    </form>
  </section>

</main>