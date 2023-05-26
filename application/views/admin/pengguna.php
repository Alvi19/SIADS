
       <!-- Container Fluid-->
       <div class="container-fluid min-vh-100" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?= $judul;?></h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>             
              <li class="breadcrumb-item active" aria-current="page"><?= $judul;?></li>
            </ol>
          </div>
          <button type="button"  class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal"
                    id="#myBtn">
                    <i class="fas fa-plus"></i>
                     Tambah 
                  </button>
              <br> 
              <br>
          <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Detail Data Managemen Akun Siswa</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                      <?php
                        $no = 0;

                        foreach ($queryPengguna as $value) {
                            $no++
                        
                        ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $value->nisn; ?></td>
                        <td><?php echo $value->nama; ?></td>
                        <td><?php echo $value->kelas; ?></td>
                        <td><?php echo $value->status; ?></td>
                        <td>
                        <button href="" class="btn btn-success btn-sm"><i class="fas fa-check"></i></button>
                         <button type="button"  class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal3"
                            id="#myBtn4">
                            <i class="fas fa-eye"></i>
                           
                        </button>
                        <button type="button"  class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal3"
                            id="#myBtn3">
                            <i class="fas fa-trash"></i>
                           
                        </button>
                       
                       
                        </td>
                    </tr>
                    <?php
                     }
                ?>
                        </tbody>
                  </table>
                    </div>
                    </div>
</div>
                  
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambahkan Data Pengguna</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="<?php echo base_url() . 'Pengguna/tambah_aksi'; ?>" method="post">
                <div class="modal-body">
                
                <div class="form-group">
							<label>Tahun Ajaran *</label>
							<div class="row">
								<div class="col-sm-12 col-md-12">
									<input type="year" name="tahun_ajaran" id="tahun_ajaran"   class="form-control years"  placeholder="Contoh : 202x/202x">
								</div>
								
							</div>
						</div>
                
						<div class="form-group">
							<label>Keterangan</label>
							<select class="form-control form-control-sm mb-3" required name="status" id="status"">
                    <option value="">Pilih Salah Satu</option>
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                  
                </select>  
						</div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </div>
              </form>
                    </div> 
                    </div>
                    </div>
           
                    
                    
           
                   
      
                   
                  
                    
       <!-- Page level plugins -->
  <script src="<?= base_url()?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url()?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <!-- Page level custom scripts -->
 
<script>
  $(document).ready( function () {
    $('#dataTable').DataTable();
} );
</script>

<script>
	function getYear(value) {

		var yearsend = parseInt(value) + 1;

		$("#YearEnd").val(yearsend);

	}

</script>