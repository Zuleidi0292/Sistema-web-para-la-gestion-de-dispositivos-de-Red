<?php

        if(!empty($_GET['id'])){
            $id = htmlentities($_GET['id']);
            $sql= $conexion->query("DELETE FROM usuario WHERE idUsuario=$id");
            if($sql==TRUE){
                echo '
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <!-- <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Eliminado correctamente</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>-->
                    <div class="modal-body">
                      Usuario eliminado correctamente
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success">Aceptar</button>
                    </div>
                  </div>
                </div>
              </div>
                ';
                
            }else{
                echo '<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <!-- <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Eliminado correctamente</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>-->
                    <div class="modal-body">
                      Hubo un arror al eliminar
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger">Aceptar</button>
                    </div>
                  </div>
                </div>
              </div>';
            }
        }
  
        ?>
