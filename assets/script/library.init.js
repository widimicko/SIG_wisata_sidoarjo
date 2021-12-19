const dataTableIdLang = {
  "decimal":        "",
  "emptyTable":     "Tidak ada data yang tersedia",
  "info":           "Menampilkan _START_ ke _END_ dari _TOTAL_ data",
  "infoEmpty":      "Menampilkan 0 ke 0 dari 0 data",
  "infoFiltered":   "(Berhasil memfilter dari _MAX_ data)",
  "infoPostFix":    "",
  "thousands":      ",",
  "lengthMenu":     "Tampilkan _MENU_ data",
  "loadingRecords": "Memuat...",
  "processing":     "Memproses...",
  "search":         "Pencarian:",
  "zeroRecords":    "Tidak ditemukan data yang cocok",
  "paginate": {
    "first":      "Pertama",
    "last":       "Terakhir",
    "next":       "Selanjutnya",
    "previous":   "Sebelumnya",
  }
}

$(document).ready( function () {
  if (document.getElementById('dataTable') !== null) {
    $('#dataTable').DataTable({"language": dataTableIdLang});
  }
  if (document.querySelector('.select2') !== null) {
    $('.select2').select2();
  }
});