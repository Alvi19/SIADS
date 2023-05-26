
<div class="col-lg-12">
             
                <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Rekening Pembayaran</h6>
                </div>
                <div class="card-body">
                  <div class="alert alert-success" role="alert">
                  <?php echo form_open_multipart('pembayaran/bayar');?>
                    <h4 class="alert-heading">Rekening Pembayaran</h4>
                    <p>
                     A.N Ahmad<br>
                     0129282737236278 (BANK BRI)
                    </p>
                    <hr>
                    <p class="mb-0">
                    Silahkan lakukan pembayaran terlebih dahulu. lalu kirimkan bukti pembayaran ditombol bawah
                    </p>
                    <form action="">
                    <div class="form-group">
                      <div class="custom-file">
                      <label class="form-label" for="bukti">Pilih File</label>
                        <input type="file" class="form-control" id="bukti" name="bukti">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-info" value="simpan">Kirim Bukti</button>
                    <?php echo form_close();?> 
                </div>
                </div>
             
</div>
</div>
 