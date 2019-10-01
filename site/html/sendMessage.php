<?php
include_once('includes/header.inc.php');
?>



<div class="container-fluid">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Formulaire d'envoi</h1>
                        </div>
                        <form class="user">
                            <div class="form-group row">
                                <div class="col-sm-3 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="destinataire" placeholder="Destinataire">
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-user" id="sujet" placeholder="Sujet">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="message" placeholder="Message"></textarea>
                            </div>

                            <a href="#" class="btn btn-primary btn-user btn-block">
                                Envoyer
                            </a>

                        </form>

                    </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>



<?php
include_once('includes/footer.inc.php');
?>
