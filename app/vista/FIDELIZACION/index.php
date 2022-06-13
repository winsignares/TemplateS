<main id="main" class="main">
  <br>
  <div class="pagetitle">
    <h1>FIDELIZACION</h1>
  </div>

  <section class="section">
    <br>
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <br>
            <div class="table-responsive">
            <table class="table" id="tablaFidelizacion" style="width:100%">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">N° Documento</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Telefono</th>
                  <th scope="col"></th>
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

     <!-- modal para ver los datos de los aprendices -->
      <div class="modal fade" id="ModalDatosAprendiz" tabindex="-1">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><b>DATOS APRENDIZ</b></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             <div class="container">
               
                <div class="row">
                   <div class="col-6">
                     <label><b>TIPO DE DOCUMENTO :</b></label>
                    </div>
                    <div class="col-6">
                      <label id="tipo_documento_fidelizacion"></label>
                    </div>
                </div>  
               
               <div class="row">
                 <div class="col-6">
                 <label><b>Nº DOCUMENTO :</b></label>
                  </div>
                  <div class="col-6">
                  <label id="numero_documento_fidelizacion"></label>
                  </div>
               </div>

               <div class="row">
                 <div class="col-6">
                 <label><b>NOMBRES :</b></label>
                  </div>
                  <div class="col-6">
                  <label id="nombres_fidelizacion"></label>
                  </div>
               </div>

               <div class="row">
                 <div class="col-6">
                 <label><b>APELLIDOS :</b></label>
                  </div>
                  <div class="col-6">
                  <label id="apellidos_fidelizacion"></label>
                  </div>
               </div>

               <div class="row">
                 <div class="col-6">
                 <label><b>DIRECCION :</b></label>
                  </div>
                  <div class="col-6">
                  <label id="direccion_fidelizacion"></label>
                  </div>
               </div>
               
               <div class="row">
                 <div class="col-6">
                 <label><b>TELEFONO :</b></label>
                  </div>
                  <div class="col-6">
                  <label id="telefono_fidelizacion"></label>
                  </div>
               </div>

               <div class="row">
                 <div class="col-6">
                 <label><b>CORREO :</b></label>
                  </div>
                  <div class="col-6">
                  <label id="correo_fidelizacion"></label>
                  </div>
               </div>

               <div class="row">
                 <div class="col-6">
                 <label><b>PROGRAMA :</b></label>
                  </div>
                  <div class="col-6">
                  <label id="programa_fidelizacion"></label>
                  </div>
               </div>

               <div class="row">
                 <div class="col-6">
                 <label><b>FICHA :</b></label>
                  </div>
                  <div class="col-6">
                  <label id="ficha_fidelizacion"></label>
                  </div>
               </div>

               <div class="row">
                 <div class="col-6">
                 <label><b>GÉNERO :</b></label>
                  </div>
                  <div class="col-6">
                  <label id="genero"></label>
                  </div>
               </div>
             
             </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CERRAR</button>
             </div>
          </div>
        </div>
      </div>

    <form action="" id="RegistrarProcesoFidelizacion">
      <div class="modal fade" id="ModalRegistrarProcesoFidelizacion" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><b>REGISTRAR PROCESO</b></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             <div class="container">
               
                <div class="row">
                   <div class="col-12">
                   <textarea name="" id="" cols="30" rows="10" class="form-control" required></textarea>
                    </div>
                 </div>  
             
             </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CERRAR</button>
              <button type="submit" class="btn btn-primary" >GUARDAR</button>
             </div>
          </div>
        </div>
      </div>
      </form>

      <form action="" id="AbrirProcesoFidelizacion">
      <div class="modal fade" id="ModalAbrirProcesoFidelizacion" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><b>CASO EN PROCESO</b></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             <div class="container">
               
                <div class="row">
                   <div class="col-12">
                   <select class="form-select" aria-label="Default select example">
                      <option selected>TIPO DE FALTA</option>
                      <option value="1">EXCUSA</option>
                      <option value="2">INASISTENCIA</option>
                </select>
                     <br>
                     <input type="text" class="form-control" placeholder ="url">
                     <br>
                      <textarea name="" id="" cols="30" rows="10" class="form-control" required></textarea>
                   </div>
                 </div>  
             
             </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CERRAR</button>
              <button type="submit" class="btn btn-primary" >GUARDAR</button>
             </div>
          </div>
        </div>
      </div>
      </form>



   </section>

</main>