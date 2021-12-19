<?php include './template/header.php' ?>
<?php $id = $_GET['id']; ?>
<!-- CONTAINER -->

<div class="row g-3">
  <div class="col-lg-5 col-md-12">
    <div class="card shadow mb-4">
      <div class="card-header py-3 ">
        <h5 class="m-0 font-weight-bold text-primary">Form Edit Data</h5>
      </div>
      <div class="card-body">
        <?php
          $sql = "select * from tourism where id = '$id'";
          $query = mysqli_query($connection, $sql);
          while ($tourism = mysqli_fetch_array($query)) :  
        ?>
      <form action="../controller/update.php" method="POST">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="mb-3">
          <label class="form-label">Nama Lokasi</label>
          <input type="text" class="form-control" name="name" value="<?= $tourism['name'] ?>" required>
        </div>
        <div class="mb-3">
          <label class="form-label">kategori</label><br>
          <select class="select2 form-select w-100" name="category" required>
            <option value="Alam"
              <?= $tourism['category'] == 'Alam' ? 'selected' : '' ?>
            >Alam</option>
            <option value="Sejarah"
              <?= $tourism['category'] == 'Sejarah' ? 'selected' : '' ?>
            >Sejarah</option>
            <option value="Kuliner"
              <?= $tourism['category'] == 'Kuliner' ? 'selected' : '' ?>
            >Kuliner</option>
            <option value="Religi"
              <?= $tourism['category'] == 'Religi' ? 'selected' : '' ?>
            >Religi</option>
            <option value="Hiburan"
              <?= $tourism['category'] == 'Hiburan' ? 'selected' : '' ?>
            >Hiburan</option>
            <option value="Kerajinan"
              <?= $tourism['category'] == 'Kerajinan' ? 'selected' : '' ?>
            >Kerajinan</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Deskripsi</label>
          <textarea name="description" style="width: 100%;" cols="30" rows="10"><?= $tourism['description'] ?></textarea>
        </div>
        <p>Anda dapat memilih lokasi pada peta untuk mengisi data dibawah.</p>
        <div class="mb-3">
          <label class="form-label">Latitude</label>
          <input type="text" class="form-control" id="lat" name="lat" value="<?= $tourism['lat'] ?>" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Longitude</label>
          <input type="text" class="form-control" id="lng" name="lng" value="<?= $tourism['lng'] ?>" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
        <?php endwhile ?>
      </div>
    </div>
  </div>
  <div class="col-lg-7 col-md-12">
    <div class="mb-3 card shadow">
      <h5 class="card-header">
        <i class="bi bi-map"></i> Peta Wilayah Kabupaten Sidoarjo
      </h5>
      <div class="card-body">
        <div id="googleMap-edit" style="width:100%;height:500px;"></div> 
      </div>
    </div>  
  </div>
</div>


<!-- CONTAINER -->

<?php include './template/footer.php' ?>