<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="poncho.min.css" />
    <title>Document</title>
  </head>

  <body>
    <div class="col-md-2 bg-primary p-y-2 p-x-1">
      <div class="row">
        <h1 class="h3 p-x-2"><i class="fa fa-inbox m-r-1"></i> Noti.mi</h1>
        <hr />
      </div>

      <ul class="nav">
        <li class="m-y-1">
          <a href="index.html"
            ><i class="icono-arg-casa-negativo m-r-1"></i
            ><strong>Dashboard</strong></a
          >
        </li>
        <li class="m-y-1">
          <a href="notificaciones.html"
            ><i class="icono-arg-alarma-negativo m-r-1"></i
            ><strong>Notificaciones</strong></a
          >
        </li>
        <li class="m-y-1">
          <a href="metricas.html"
            ><i class="fa fa-signal m-r-1"></i><strong>Métricas</strong></a
          >
        </li>
        <li class="m-y-1">
          <a href="configuracion.html"
            ><i class="fa fa-cog m-r-1"></i><strong>Configuración</strong></a
          >
        </li>
      </ul>
    </div>
    <main>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="h4">Configuración de usuarios</h1>
            <hr />
            <section>
              <table class="table table-responsive-poncho table-striped">
                <thead>
                  <tr>
                    <th><p class="text-muted">Usuario</p></th>
                    <th><p class="text-muted">Acción</p></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><strong>Usuario 1</strong></td>
                    <td>
                      <button
                        class="btn btn-primary btn-sm"
                        onclick="location.replace('usuarios/editarusuario.html')"
                      >
                        Editar
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td><strong>Usuario 2</strong></td>
                    <td>
                      <button class="btn btn-primary btn-sm">Editar</button>
                    </td>
                  </tr>
                  <tr>
                    <td><strong>Usuario 3</strong></td>
                    <td>
                      <button class="btn btn-primary btn-sm">Editar</button>
                    </td>
                  </tr>
                  <tr>
                    <td><strong>Usuario 4</strong></td>
                    <td>
                      <button class="btn btn-primary btn-sm">Editar</button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <button
                type="button"
                class="btn btn-default btn-tag"
                onclick="location.replace('notificaciones/index.html')"
              >
                Volver
              </button>
            </section>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
