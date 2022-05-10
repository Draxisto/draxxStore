<?php include_once("./include/head.php"); ?>

<?php include_once("./include/aside.php"); ?>
  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?php include_once("./include/nav.php"); ?>
    
    <div class="container-fluid py-4">
    <!-- Content HERE  -->

      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
              <h4>Liste des clients</h4>
              <div>
                <a href="newClient.php" class="btn btn-primary">
                  Ajouter Client
                  <span>
                    <i class="fa-plus-circle"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Author</th>
                      <th>Fonction</th>
                      <th>Status</th>
                      <th>Date</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        Geraud
                      </td>
                      <td>
                        CEO
                      </td>
                     <td>
                        Retraité
                      </td>
                      <td>
                        01/05/1980
                      </td>
                      <td>
                        <a href="#" class="link link-warning">
                          Modifier
                        </a>
                        <a href="#" class="link link-danger">
                          Supprimer
                        </a>
                        
                      </td>
                      
                      
                    </tr>
                      
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php include_once("./include/footer.php"); ?>