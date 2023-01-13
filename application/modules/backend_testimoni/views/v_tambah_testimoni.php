<div class="content-wrapper ">
          <div class="row">
            <div class="col-md-12 grid-margin">
<!-- Isi Konten -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Testimoni</h4>
                  <form class="forms-sample" action="<?php echo base_url('backend_testimoni/tambah_aksi_testimoni'); ?>" method="post">
                    <div class="form-group">
                      <label for="nama_client">Nama Client</label>
                      <input type="text" class="form-control" id="nama_client" name="nama_client" placeholder="Nama Client">
                    </div>
                    <div class="form-group">
                      <label for="pekerjaan">Pekerjaan</label>
                      <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan">
                    </div>
                    <div class="form-group">
                      <label for="pernyataan">Pernyataan</label>
                      <input type="text" class="form-control" id="pernyataan" name="pernyataan" placeholder="Pernyataan">
                    </div>
                    <div class="form-group">
                      <label>File upload</label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div>
                    <div class="float-right">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="<?= base_url('backend_testimoni'); ?>" class="btn btn-light">Cancel</a>
                    </div>
                  </form>
                </div>
              </div>
<!-- Akhir Isi Konten -->
            </div>
          </div>

          
