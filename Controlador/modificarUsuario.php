<?php

if(isset($_POST["btn"])){
        if(isset($_POST['nombre']) && isset($_POST['apellido'])
                && isset($_POST['usuario'])
                && isset($_POST['correo']) && isset($_POST['contra'])){
                $id = htmlspecialchars($_POST['id'], ENT_QUOTES,'UTF-8');
                $nombre = htmlspecialchars($_POST['nombre'], ENT_QUOTES,'UTF-8');
                $apellido = htmlspecialchars($_POST['apellido'], ENT_QUOTES,'UTF-8');
                $usuario = htmlspecialchars($_POST['usuario'], ENT_QUOTES,'UTF-8');
                $correo = htmlspecialchars($_POST['correo'], ENT_QUOTES,'UTF-8');
                $pass = htmlspecialchars($_POST['contra'], ENT_QUOTES,'UTF-8');

                $sql=$conexion->query("UPDATE usuario SET Nombre='$nombre',Apellido='$apellido',Usuario='$usuario',Correo='$correo',Contra='$pass',idTipoUsuario=3 WHERE idUsuario = $id");
                    if($sql==TRUE){
                        /*echo '<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <!-- <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Eliminado correctamente</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>-->
                            <div class="modal-body">
                              Usuario actualizado correctamente
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-success">Aceptar</button>
                            </div>
                          </div>
                        </div>
                      </div>';*/    
                      header("location: admin.php");
                      
                    }else{
                        
                      echo '<div class="alert alert-danger text-center">Hubo un error al actualizar</div>';
                    }
                }
        
}
