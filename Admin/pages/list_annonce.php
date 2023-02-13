<?php
include('../db_operations/connect.php');
include('./components/variables.php');

$ReadSql = "SELECT * FROM $product_table";
$res = mysqli_query($con, $ReadSql);

?>
<style>
  ul li {
    list-style: none;
  }
</style>

<div class="container">
  <div class="row pt-4">
    <h3>Table d'annonce</h3>

    <table class="table table-striped mt-3">
      <thead>
        <tr>
          <th>id</th>
          <th>emplacement</th>
          <th>nbr_chambr</th>
          <th>description</th>
          <th>prix</th>
          <th>Propriétés</th>
          <th>Options</th>
        </tr>
      </thead>

      <tbody>
        <?php while ($product = mysqli_fetch_assoc($res)) {
        ?>

          <tr>
            <th scope="row"><?php echo $product['id']; ?></th>

            <td><?php echo $product['emplacement']; ?></td>
            <td><?php echo $product['nombre_chembre']; ?></td>
            <td><?php echo $product['description']; ?></td>
            <td><?php echo $product['prix']; ?></td>
            <td>
              <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $product['id'] ?>" aria-expanded="false" aria-controls="<?php echo $product['id'] ?>">
                Voir
              </button>
              <div class="collapse" id="<?php echo $product['id'] ?>">
                <div class="card card-body">
                  <ul>
                    <?php include('../db_operations/product/product_li.php') ?>
                  </ul>
                </div>
              </div>
            </td>

            <td class="d-flex gap-2">
              <a href="?page=update&id=<?php echo $product['id']; ?>" class="btn btn-success btn-sm  ">
                <i class="fa fa-edit fa-2x"></i>
              </a>
              <i class="fa fa-trash fa-2x red-icon btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $product['id']; ?>">
              </i>

            </td>
            
              <div class="modal fade" id="exampleModal<?php echo $product['id']; ?>" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                      <p>Êtes-vous sur de vouloir supprimer cette annonce ?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary " data-bs-dismiss="modal">
                        Annuler
                      </button>
                      <a href="?page=delete&id=<?php echo $product['id']; ?>">
                        <button class="btn btn-danger" type="button">
                          Confirmer
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>