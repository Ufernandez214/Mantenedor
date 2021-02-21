<?php headerAdmin($data); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i><?= $data['page_title'] ?></h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>/dashboard"> Dashboard</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="row d-flex justify-content-around">
                <div class="col-md-4">
                  <div class="card-body card-info p-2 text-center text-white" style="cursor: default!important;">
                    <i class="fas fa-users pt-3" style="font-size: 40px;"></i>
                    <h2>Total usuarios </h2>
                    <h4  id="total-registrados">0</h4>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card-body card-info p-2 text-center text-white" style="cursor: default!important;">
                    <i class="fas fa-user-check pt-3" style="font-size: 40px;"></i>
                    <h2>Usuarios activos</h2>
                    <h4 id="total-activos">0</h4>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card-body card-info p-2 text-center text-white" style="cursor: default!important;">
                    <i class="fas fa-user-slash pt-3" style="font-size: 40px;"></i>
                    <h2>Usuarios inactivos</h2>
                    <h4 id="total-inactivos">0</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
<?php footerAdmin($data); ?>
    