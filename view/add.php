<?php include './template/header.php' ?>

<!-- CONTAINER -->

<!-- MAP CONTAINER -->
<div class="row g-3">
  <div class="col-lg-5 col-md-12">
    <div class="card shadow mb-4">
      <div class="card-header py-3 ">
        <h5 class="m-0 font-weight-bold text-primary">Form Tambah Data</h5>
      </div>
      <div class="card-body">
      <form action="../controller/create.php" method="POST">
        <div class="mb-3">
          <label class="form-label">Nama Lokasi</label>
          <input type="text" class="form-control" name="name" required>
        </div>
        <div class="mb-3">
          <label class="form-label">kategori</label><br>
          <select class="select2 form-select w-100" name="category" required>
            <option value="Alam">Alam</option>
            <option value="Sejarah">Sejarah</option>
            <option value="Kuliner">Kuliner</option>
            <option value="Religi">Religi</option>
            <option value="Hiburan">Hiburan</option>
            <option value="Kerajinan">Kerajinan</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Deskripsi</label>
          <textarea name="description" style="width: 100%;" cols="30" rows="10"></textarea>
        </div>
        <p>Anda dapat memilih lokasi pada peta untuk mengisi data dibawah.</p>
        <div class="mb-3">
          <label class="form-label">Latitude</label>
          <input type="text" class="form-control" id="lat" name="lat" placeholder="Contoh: -7.4471541" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Longitude</label>
          <input type="text" class="form-control" id="lng" name="lng" placeholder="Contoh: 112.6717158,13" required>
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary"><i class="bi bi-save"></i> Submit</button>
      </form>
      </div>
    </div>
  </div>
  <div class="col-lg-7 col-md-12">
    <div class="card shadow">
      <h5 class="card-header">
        <i class="bi bi-map"></i> Peta Wilayah Kabupaten Sidoarjo
      </h5>
      <div class="card-body">
        <div id="googleMap-edit" style="width:100%; height:500px;"></div> 
      </div>
    </div> 
  </div>
</div>


<!-- CONTAINER -->

<?php include './template/footer.php' ?>