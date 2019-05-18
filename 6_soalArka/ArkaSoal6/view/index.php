<?php require_once '../database/database.php';

      $db = new Database();
      $dataProgrammer = $db->findAll('dataskillprogramer');
?>

<?php include 'layout/header.php'; ?>

    <div class="container">

      <!-- Form Input User  -->
          <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                  <h2> Tambah User </h2>
                </div>
                <div class="card-body">
                    <form class="form" action="../proses/usersProses.php" method="post">
                      <div class="row">
                          <div class="col-md-8">
                            <input class="form-control" type="text" name="name" placeholder="Nama Programmer">
                          </div>
                          <div class="col-md-4">
                            <input class="btn btn-primary" type="submit" name="kirim" value="Simpan">
                          </div>
                      </div>
                    </form>
                </div>
            </div>
          </div>
          <br>

      <div class="card">
        <div class="card-header">
          <h3>List Programmer Skills</h3>
        </div>
        <div class="card-body">
          <?php foreach ($dataProgrammer as $item): ?>
            <div class="row">
              <div class="col">
                <p>Nama : <?= $item['name'] ?></p>
                <p>Skils : <?= $item['namaSkills'] ?></p>
              </div>
              <div class="col">
                <form class="form" action="../proses/skillsProses.php" method="post">
                  <div class="row">
                      <div class="col-md-8">
                        <input class="form-control" type="text" name="nameSkills" placeholder="Tambah Skills">
                        <input type="hidden" name="iduser" value="<?= $item['iduser'] ?>">
                      </div>
                      <div class="col-md-4">
                        <input class="btn btn-success" type="submit" name="kirim" value="Simpan">
                      </div>
                  </div>
                </form>
              </div>
          </div>
          <hr>
        <?php endforeach; ?>
        </div>
      </div>

    </div>

<?php include 'layout/footer.php'; ?>
