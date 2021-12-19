    </div>

    <footer class="mt-5 border-top bg-light text-center text-white">
      <div class="container">
        <section class="">
          <!-- Facebook -->
          <a
            class="btn btn-link btn-floating btn-lg m-1"
            href="#!"
            role="button"
            style="color: #3b5998;"
            ><i class="bi bi-facebook"></i
          ></a>

          <!-- Twitter -->
          <a
            class="btn btn-link btn-floating btn-lg m-1"
            href="#!"
            role="button"
            style="color: #1DA1F2;"
            ><i class="bi bi-twitter"></i
          ></a>

          <!-- Google -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="bi bi-google"></i
          ></a>

          <!-- Instagram -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="bi bi-instagram"></i
          ></a>

          <!-- Linkedin -->
          <a
            class="btn btn-link btn-floating btn-lg m-1"
            href="#!"
            role="button"
            style="color: #0077B5;"
            ><i class="bi bi-linkedin"></i
          ></a>
          <!-- Github -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="bi bi-github"></i
          ></a>
        </section>
      </div>

      <div class="text-center text-dark p-3">
        &copy; <?= date('Y') ?> created with <span style="color: red;"><i class="bi bi-heart-fill"></i></span> by Micko Widi
      </div>

    </footer>
    
    <!-- Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Data Table -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <!-- Google Maps API -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <!-- Select 2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- Library Init -->
    <script src="../assets/script/library.init.js"></script>
    <!-- Map Script -->
    <?php
      $activeFile = substr($_SERVER['SCRIPT_NAME'], 1);
      $serverDir = 'Kuliah/SIG/SIG_wisata_sidoarjo/view/'
    ?>
    <?php if ($activeFile == $serverDir.'index.php') : ?>
      <script src="../assets/script/map/map.js"></script>
    <?php else : ?>
      <script src="../assets/script/map/mapOnChange.js"></script>
    <?php endif ?>
  </body>
</html>