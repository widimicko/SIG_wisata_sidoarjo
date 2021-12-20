<?php include './template/header.php'; session_start(); ?>

<!-- CONTAINER -->
<div class="mb-3">
  <?php
    if (isset($_SESSION['status'])) {
        if ($_SESSION['status'] == 'success') {
          echo '<div class="alert alert-success" role="alert">'.$_SESSION['message'].'</div>';
        } else if ($_SESSION['status'] == 'failed') {
          echo '<div class="alert alert-danger" role="alert">'.$_SESSION['message'].'</div>';
        }
    }
    session_destroy();
  ?>
</div>

<!-- MAP CONTAINER -->
<div class="mb-3 card">
    <h5 class="card-header">
      <i class="bi bi-map"></i> Peta Persebaran Wisata Wilayah Kabupaten Sidoarjo
    </h5>
    <div class="card-body">
      <div class="d-flex justify-content-between">
        <select id="select-by-category" class="form-select w-25">
          <option value="">Semua Data</option>
          <?php
              $sql = "SELECT DISTINCT category FROM tourism";
              $query = mysqli_query($connection, $sql);
              while ($tourism = mysqli_fetch_array($query)) :  
          ?>
          <option value="<?= $tourism['category'] ?>"><?= $tourism['category'] ?></option>
          <?php endwhile ?>
        </select>
        <p id="data-message"></p>
        <input id="search" type="text" class="form-control w-25" placeholder="Pencarian">
      </div>
      
      <div class="mt-2" id="googleMap" style="width:100%; height:500px;">
        <div class="py-5 mt-5 text-center">
          <div class="spinner-grow text-primary" role="status"></div>
          <div class="spinner-grow text-secondary" role="status"></div>
          <div class="spinner-grow text-success" role="status"></div>
          <div class="spinner-grow text-danger" role="status"></div>
          <div class="spinner-grow text-warning" role="status"></div>
          <div class="spinner-grow text-info" role="status"></div>
          <div class="spinner-grow text-light" role="status"></div>
          <div class="spinner-grow text-dark" role="status"></div>
        </div>
      </div> 
    </div>
  </div>  
</div>

<!-- TABLE CONTAINER -->
<div class="container">
  <div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
      <h5 class="m-0 font-weight-bold text-primary">Tabel Data</h5>
      <a href="./add.php" class="btn btn-primary mr-3"><i class="bi bi-plus"></i> Tambah</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="tableData table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>        
              <th>Kategori</th>
              <th>Deskripsi</th>
              <th>Latitude</th>
              <th>Longitude</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $i = 1;
              $sql = "select * from tourism";
              $query = mysqli_query($connection, $sql);
              while ($tourism = mysqli_fetch_array($query)) :  
            ?>
              <tr>
                <td><?= $i++ ?></td>
                <td><?= $tourism['name'] ?></td>
                <td><?= $tourism['category'] ?></td> 
                <td><?= $tourism['description'] ?></td> 
                <td><?= $tourism['lat'] ?></td> 
                <td><?= $tourism['lng'] ?></td> 
                <td>
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuAction" data-bs-toggle="dropdown" aria-expanded="false">
                    Aksi
                  </button>
                  <ul class="p-1 dropdown-menu" aria-labelledby="dropdownMenuAction">
                    <li><a href="./edit.php?id=<?= $tourism['id'] ?>" class="w-100 btn btn-info"><i class="bi bi-pencil"></i> Edit</a></li>
                    <li><a href="../controller/delete.php?id=<?= $tourism['id'] ?>" class="mt-1 w-100 btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data <?= $tourism['name'] ?>?')"><i class="bi bi-trash"></i> Hapus</a></li>
                  </ul>
                </div> 
                </td> 
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<!-- CONTAINER -->

<?php include './template/footer.php' ?>