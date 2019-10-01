<?php
include_once('includes/header.inc.php');
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Gestion des comptes utilisateurs</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>Login</th>
                        <th>Validité</th>
                        <th>Rôle</th>
                        <th>Modification</th>
                        <th>Suppression</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>Login</th>
                        <th>Validité</th>
                        <th>Rôle</th>
                        <th>Modification</th>
                        <th>Suppression</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php
include_once('includes/footer.inc.php');
?>