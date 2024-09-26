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
    <link
      href="/poncho/node_modules/font-awesome/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/gh/argob/poncho@release-1.x/dist/css/icono-arg.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
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
          <a href="#"
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

    <div class="container">
      <div class="row">
        <div class="row">
          <div class="col-md-12 m-t-2">
            <h1 class="h4 p-x-1 m-b-0">Notificaciones</h1>
            <div class="col-md-12">
              <hr />
            </div>
            <button
              onclick="location.replace('notificaciones/index.html')"
              class="btn btn-success btn-sm pull-right m-y-1"
            >
              + Nueva notificación
            </button>
          </div>
        </div>
        <div class="row m-b-4">
          <div class="col-md-12">
            <div class="col-md-12">
              <h2 class="h5 m-b-2">Envíos en curso</h2>
              <!-- <table class="table table-responsive-poncho table-striped">
                        <thead>
                          <tr>
                            <th><p class="text-muted">Nombre</p></th>
                            <th><p class="text-muted">Campaña</p></th>
                            <th><p class="text-muted">Fecha</p></th>
                            <th><p class="text-muted">Accion</p></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><strong>Prevení el Dengue</strong></td>
                            <td><strong>Dengue</strong></td>
                            <td><strong>AAAA/MM/DD</strong></td>
                            <td>
                              <button
                                class="btn btn-primary btn-sm"
                                onclick="location.replace('./editar.html')"
                              >
                                Editar
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td><strong>Notificación 6</strong></td>
                            <td><strong>-</strong></td>
                            <td><strong>AAAA/MM/DD</strong></td>
                            <td>
                              <button class="btn btn-primary btn-sm">
                                Editar
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td><strong>Notificación 7</strong></td>
                            <td><strong>Campaña C</strong></td>
                            <td><strong>AAAA/MM/DD</strong></td>
                            <td>
                              <button class="btn btn-primary btn-sm">
                                Editar
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td><strong>Notificación 8</strong></td>
                            <td><strong>Campaña B</strong></td>
                            <td><strong>AAAA/MM/DD</strong></td>
                            <td>
                              <button class="btn btn-primary btn-sm">
                                Editar
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td><strong>Notificación 1</strong></td>
                            <td><strong>Campaña A</strong></td>
                            <td><strong>AAAA/MM/DD</strong></td>
                            <td>
                              <button
                                class="btn btn-primary btn-sm"
                                onclick="location.replace('./ver.html')"
                              >
                                Editar
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td><strong>Notificación 2</strong></td>
                            <td><strong>Campaña B</strong></td>
                            <td><strong>AAAA/MM/DD</strong></td>
                            <td>
                              <button class="btn btn-primary btn-sm">
                                Editar
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td><strong>Notificación 3</strong></td>
                            <td><strong>Campaña C</strong></td>
                            <td><strong>AAAA/MM/DD</strong></td>
                            <td>
                              <button class="btn btn-primary btn-sm">
                                Editar
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table> -->
              <table class="table dataTables table-bordered table-striped">
                <thead>
                  <tr>
                    <th><i class="fa fa-sort-amount-desc"></i> Nombre</th>
                    <th><i class="fa fa-sort-amount-desc"></i> Tipo</th>
                    <th><i class="fa fa-sort-amount-desc"></i> Campaña</th>
                    <th><i class="fa fa-sort-amount-desc"></i> Estado</th>
                    <th><i class="fa fa-sort-amount-desc"></i> Fecha</th>
                    <th>Accion</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Prevení el Dengue</td>
                    <td>PUSH</td>
                    <td>Dengue</td>
                    <td>En proceso</td>
                    <td>AAAA/MM/DD</td>
                    <td>
                      <button class="btn btn-primary btn-sm">Editar</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Notificación 6</td>
                    <td>SPLASH</td>
                    <td>-</td>
                    <td>Creado</td>
                    <td>AAAA/MM/DD</td>
                    <td>
                      <button
                        class="btn btn-primary btn-sm"
                        onclick="location.replace('../notificaciones/editar.html')"
                      >
                        Editar
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Notificación 7</td>
                    <td>NOVEDAD</td>
                    <td>Campaña C</td>
                    <td>En proceso</td>
                    <td>AAAA/MM/DD</td>
                    <td>
                      <button class="btn btn-primary btn-sm">Editar</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Notificación 8</td>
                    <td>PUSH</td>
                    <td>Campaña B</td>
                    <td>Creado</td>
                    <td>AAAA/MM/DD</td>
                    <td>
                      <button class="btn btn-primary btn-sm">Editar</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- <section>
                      <h2 class="h4">Notificaciones realizadas</h2>
                      <table class="table table-responsive-poncho table-striped">
                        <thead>
                          <tr>
                            <th><p class="text-muted">Nombre</p></th>
                            <th><p class="text-muted">Campaña</p></th>
                            <th><p class="text-muted">Fecha</p></th>
                            <th><p class="text-muted">Accion</p></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><strong>Notificación 1</strong></td>
                            <td><strong>Campaña A</strong></td>
                            <td><strong>AAAA/MM/DD</strong></td>
                            <td>
                              <button
                                class="btn btn-primary btn-sm"
                                onclick="location.replace('./ver.html')"
                              >
                                Ver
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td><strong>Notificación 2</strong></td>
                            <td><strong>Campaña B</strong></td>
                            <td><strong>AAAA/MM/DD</strong></td>
                            <td>
                              <button class="btn btn-primary btn-sm">Ver</button>
                            </td>
                          </tr>
                          <tr>
                            <td><strong>Notificación 3</strong></td>
                            <td><strong>Campaña C</strong></td>
                            <td><strong>AAAA/MM/DD</strong></td>
                            <td>
                              <button class="btn btn-primary btn-sm">Ver</button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </section> -->
          </div>
        </div>
      </div>
      <div class="text-center">
        <ul class="pagination">
          <li class="active">
            <span>1</span>
          </li>
          <li>
            <a href="#">2</a>
          </li>
          <li><a>3</a></li>
          <li><a>4</a></li>
          <li><a>5</a></li>
          <li><a>6</a></li>
          <li><a>7</a></li>
          <li><a>8</a></li>
          <li><a>9</a></li>
          <li class="pager-ellipsis disabled">
            <span>..</span>
          </li>
          <li class="next">
            <a>></a>
          </li>
          <li class="pager-last">
            <a>>></a>
          </li>
        </ul>
      </div>
    </div>
  </body>
</html>
