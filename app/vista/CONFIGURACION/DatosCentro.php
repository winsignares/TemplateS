<main id="main" class="main">
  <br>
  
     <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
               <h1 class="card-title" style="font-size:30px;">CENTRO &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary" type="submit" style="height: 50px;" data-bs-toggle="modal" data-bs-target="#ModalRegistroCentro">AGREGAR</button></h1>
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
            <table class="table" id="tablaCentro" style="width:100%">
              <thead>
                <tr>
                <th scope="col">#</th>
                  <th scope="col">REGIONAL</th>
                  <th scope="col">CENTRO</th>
                  <th scope="col">TELEFONO</th>
                  <th scope="col">SUBDIRECTOR</th>
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

    <form action="" method="POST" id="RegistrarCentro">
      <div class="modal fade" id="ModalRegistroCentro" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><b>REGISTRAR CENTRO</b></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             <div class="container">
               <div class="row">
                 <div class="col-12">
                    <b>SELECCIONE UNA REGIONAL:</b> 
                    <select class="selectpicker form-control" data-live-search="true" data-size="3" name="regional" id="regional"  >                      
                    </select>



                  </div>
                </div>
                <br>
                <div class="row">
                 <div class="col-12">
                    <b>NOMBRE DEL CENTRO:</b> 
                    <input type="text" name="nombre_centro" id="nombre_centro" class="form-control" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required>
                  </div>
                </div>
                <br>
                <div class="row">
                 <div class="col-12">
                    <b>SUBDIRECTOR:</b> 
                    <input type="text" name="subdirector_centro" id="subdirector_centro" class="form-control" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required>
                  </div>
                </div>
                <br>
                <div class="row">
                 <div class="col-12">
                    <b>TELEFONO:</b> 
                    <input type="number" name="telefono_centro" id="telefono_centro" class="form-control" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required>
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


    <form action="" method="POST" id="EditarCentro">
      <div class="modal fade" id="ModalEditCentro" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><b>EDITAR CENTRO</b></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             <div class="container">
               <div class="row">
                 <div class="col-12">
                    <b>SELECCIONE UNA REGIONAL:</b> 
                    <select class="form-control" data-live-search="true" data-size="3" name="regionale" id="regionale"  >                      
                    </select>
                  </div>
                </div>
                <br>
                <div class="row">
                 <div class="col-12">
                    <b>NOMBRE DEL CENTRO:</b> 
                    <input type="text" name="nombre_centroe" id="nombre_centroe" class="form-control" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required>
                  </div>
                </div>
                <br>
                <div class="row">
                 <div class="col-12">
                    <b>SUBDIRECTOR:</b> 
                    <input type="text" name="subdirector_centroe" id="subdirector_centroe" class="form-control" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required>
                  </div>
                </div>
                <br>
                <div class="row">
                 <div class="col-12">
                    <b>TELEFONO:</b> 
                    <input type="number" name="telefono_centroe" id="telefono_centroe" class="form-control" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required>
                    <input type="hidden" name="id_centro" id="id_centro">
                  </div>
                </div>
             </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CERRAR</button>
              <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>

</main>