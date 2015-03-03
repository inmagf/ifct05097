<?php include '_header.php' ?>
	<div class="well">login</div>
   <div class="row">
<form action="procesa_datos.php" method="post">
 <div class="col-md-offset-5 col-md-3">
            <div class="form-login">
            <h4>login.</h4>
            <input type="text" name="usuario" class="form-control input-sm chat-input" placeholder="usuario" />
            </br>
            <input type="password" name="password" class="form-control input-sm chat-input" placeholder="password" />
            </br>
            <div class="wrapper">
            <span class="group-btn">     
            <button type="submit" class="btn btn-primary">Enviar</button>
            </span>
            </div>
            </div><?php include '_footer.php' ?>

</form>
</div>

<br>
<div class="container">
       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <form action="procesa_datos.php" method="post">
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Inma</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Nombre de cliente :</td>
                        <td><input type="text" name="nombre" class="form-control input-sm chat-input" placeholder="nombre" /></td>
                      <tr>

                      <tr>
                        <td>D.N.I:</td>
                        <td><input type="text" name="d.n.i" class="form-control input-sm chat-input" placeholder="d.n.i" /></td> </td>
                      </tr>

                      <tr>
                        <td>Población:</td>
                        <td><input type="text" name="población" class="form-control input-sm chat-input" placeholder="población" /></td>  </td>
                      </tr>
                   
                      <tr>
                        <td>Provincia:</td>
                        <td><input type="text" name="provincia" class="form-control input-sm chat-input" placeholder="provincia" /></td>  </td>
                      </tr>

                      <tr>
                        <td>Teléfono:</td>
                        <td><input type="text" name="teléfono" class="form-control input-sm chat-input" placeholder="teléfono" /></td>   </td>
                      </tr>

                      <tr>
                        <td>Email:</td>
                        <td><input type="text" name="Email" class="form-control input-sm chat-input" placeholder="Email" /></td>   </td>
                      </tr>

                      <tr>
                        <td>Contraseña:</td>
                        <td> <input type="password" name="password" class="form-control input-sm chat-input" placeholder="password" />
                      </tr>
                        <tr>
                        <td></td>
                        <td> <input type="password" name="password" class="form-control input-sm chat-input" placeholder="confirmar contraseña" /></td> </td>
                        
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <br>
                  <div class="row">
                      <button type="submit" class="btn btn-warning">Nuevo Usuario </button>
                      <button type="submit" class="btn btn-primary">Guardar Usuario</button>
                  </div>
              </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                 </div>
            
          </div>
        </div>
      </div>
      </form>
    </div>
    </div>
    <?php include '_footer.php' ?>



