<html>
<head>
  <?php
    include ('../componentes/head.php')
    ?>
</head>
<body>
  <?php
      include ('../componentes/menu.php')
  ?>
  <div class="container margen">
     <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Lista de proyectos</h2>
                </div>
            </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content animated fadeInUp">

                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>All projects assigned to this account</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="row m-b-sm m-t-sm">
                                <div class="col-md-1">
                                    <button type="button" id="loading-example-btn" class="btn btn-white btn-sm" ><i class="fa fa-refresh"></i> Refresh</button>
                                </div>
                                <div class="col-md-11">
                                    <div class="input-group"><input type="text" placeholder="Search" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary"> Go!</button> </span></div>
                                </div>
                            </div>

                            <div class="project-list">

                                <table class="table table-hover">
                                    <tbody>
                                    <tr>
                                        <td class="project-status">
                                            <span class="label label-success">En produccion</span>
                                        </td>
                                        <td class="project-title">
                                            <a href="project_detail.html">Streaming-Cozcyt</a>
                                            <br/>
                                            <small>2013</small>
                                        </td>
                                        <td class="project-completion">
                                                <small>Completion with: 98%</small>
                                                <div class="progress progress-mini">
                                                    <div style="width: 98%;" class="progress-bar"></div>
                                                </div>
                                        </td>
                                        <td class="project-people">
                                            <a href=""><img alt="image" class="img-circle"  src="../assets/img/proyectos/streaming.png"></a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="project-status">
                                            <span class="label label-success">En produccion</span>
                                        </td>
                                        <td class="project-title">
                                            <a href="project_detail.html">GitLab Servidor de Repositorios</a>
                                            <br/>
                                            <small>2013</small>
                                        </td>
                                        <td class="project-completion">
                                            <small>Completion with: 98%</small>
                                            <div class="progress progress-mini">
                                                <div style="width: 98%;" class="progress-bar"></div>
                                            </div>
                                        </td>
                                        <td class="project-people">
                                            <a href=""><img alt="image" class="img-circle" src="../assets/img/proyectos/gitlab.png"></a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="project-status">
                                            <span class="label label-success">En produccion</span>
                                        </td>
                                        <td class="project-title">
                                            <a href="project_detail.html">Noosfero</a>
                                            <br/>
                                            <small>2013</small>
                                        </td>
                                        <td class="project-completion">
                                            <small>Completion with: 99%</small>
                                            <div class="progress progress-mini">
                                                <div style="width: 99%;" class="progress-bar"></div>
                                            </div>
                                        </td>
                                        <td class="project-people">
                                            <a href=""><img alt="image" class="img-circle" src="../assets/img/proyectos/noosfero.png"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="project-status">
                                            <span class="label label-success">En produccion</span>
                                        </td>
                                        <td class="project-title">
                                            <a href="project_detail.html">Elastix Comunicación Vo Ip</a>
                                            <br/>
                                            <small>2013</small>
                                        </td>
                                        <td class="project-completion">
                                            <small>Completion with: 100%</small>
                                            <div class="progress progress-mini">
                                                <div style="width: 100%;" class="progress-bar"></div>
                                            </div>
                                        </td>
                                        <td class="project-people">
                                            <a href=""><img alt="image" class="img-circle" src="img/a3.jpg"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="project-status">
                                            <span class="label label-info">En desarrollo</span>
                                        </td>
                                        <td class="project-title">
                                            <a href="project_detail.html">Open ERP</a>
                                            <br/>
                                            <small>2014</small>
                                        </td>
                                        <td class="project-completion">
                                            <small>Completion with: 73%</small>
                                            <div class="progress progress-mini">
                                                <div style="width: 73%;" class="progress-bar"></div>
                                            </div>
                                        </td>
                                        <td class="project-people">
                                            <a href=""><img alt="image" class="img-circle" src="../assets/img/proyectos/OpenERP.png"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="project-status">
                                            <span class="label label-info">En desarrollo</span>
                                        </td>
                                        <td class="project-title">
                                            <a href="project_detail.html">OwnCloud Servicios en la Nubes</a>
                                            <br/>
                                            <small>2014</small>
                                        </td>
                                        <td class="project-completion">
                                            <small>Completion with: 77%</small>
                                            <div class="progress progress-mini">
                                                <div style="width: 77%;" class="progress-bar"></div>
                                            </div>
                                        </td>
                                        <td class="project-people">
                                            <a href=""><img alt="image" class="img-circle" src="../assets/img/proyectos/owncloud.jpg"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="project-status">
                                            <span class="label label-info">En desarrollo</span>
                                        </td>
                                        <td class="project-title">
                                            <a href="project_detail.html">B-learning</a>
                                            <br/>
                                            <small>Created 11.08.2014</small>
                                        </td>
                                        <td class="project-completion">
                                            <small>Completion with: 89%</small>
                                            <div class="progress progress-mini">
                                                <div style="width: 89%;" class="progress-bar"></div>
                                            </div>
                                        </td>
                                        <td class="project-people">
                                            <a href=""><img alt="image" class="img-circle" src="img/a7.jpg"></a>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

  <footer>
    <?php
        include ('../componentes/footer.php')
    ?>
  </footer>

 <!-- Bootstrap core JavaScript -->

  </body>
</html>
