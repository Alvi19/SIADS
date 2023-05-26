<!-- Container Fluid-->
<div class="container-fluid min-vh-100" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $judul; ?></h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= $judul; ?></li>
    </ol>
  </div>

  <br>
  <br>
  <div class="card mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Detail Tagihan</h6>
    </div>
    <div class="table-responsive p-3">
      <table class="table align-items-center table-flush" id="dataTable">
        <thead class="thead-light">
          <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Kelas</th>
            <th>Setoran</th>
            <th>Sisa Pembayaran</th>
            <th>Status</th>
          </tr>
        </thead>

        <tbody>
            <?php
            $no = 0;

            foreach ($queryPembayar as $value) {
              $no++
            ?>
          <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $value->tanggal; ?></td>
              <td><?php echo $value->kelas; ?></td>
              <td><?php echo rupiah($value->setoran); ?></td>
              <td><?php echo rupiah($value->biaya); ?></td>
              <td><?= $value->status ? '<button class="btn btn-success">Berhasil</button>' : '<button class="btn btn-warning">Tunggu Konfirmasi</button>' ?></td>
          </tr>
        <?php
            }
        ?>
        </tbody>
      </table>
    </div>
  </div>
</div>













<!-- Page level plugins -->
<script src="<?= base_url() ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->

<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>

<script>
  function getYear(value) {

    var yearsend = parseInt(value) + 1;

    $("#YearEnd").val(yearsend);

  }
</script>