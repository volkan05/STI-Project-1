<?php
include_once('includes/header.inc.php');
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <div class="form-group row">
                <div class="col-lg-6">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Login :</h6>
                        </div>
                        <div class="card-body"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Rôle :</h6>
                        </div>
                        <div class="card-body"></div>
                    </div>
                </div>
            </div>
            <form class="user">
                <div class="form-group row">
                    <div class="col-lg-9">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Changer de mot de passe :</h6>
                            </div>
                            <div class="card-body">
                                <input type="password" class="form-control form-control-user" placeholder="Mot de passe">
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-primary btn-user btn-block">
                    Envoyer
                </a>
            </form>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->


<?php
include_once('includes/footer.inc.php');
?>