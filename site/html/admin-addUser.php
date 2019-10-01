<?php
include_once('includes/header.inc.php');
?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Ajout d'utilisateur</h1>
                    </div>
                    <form class="user">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" placeholder="Login">
                            </div>
                            <div class="col-sm-2">
                                <label class="text-lg"> choisir un rôle :</label>
                            </div>
                            <div class="col-sm-4">
                                <select name="Role" class="form-control form-control-user">
                                    <option selected=selected> Colaborateur</option>
                                    <option> Administrateur</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox small col-sm-1">
                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                <label class="custom-control-label text-lg" for="customCheck">Activer</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user" placeholder="Mot de passe">
                            </div>
                        </div>

                        <a href="#" class="btn btn-primary btn-user btn-block">
                            Envoyer
                        </a>

                    </form>

                </div>
            </div>


        </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
include_once('includes/footer.inc.php');
?>



