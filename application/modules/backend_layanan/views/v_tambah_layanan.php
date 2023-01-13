<div class="content-wrapper ">
          <div class="row">
            <div class="col-md-12 grid-margin">
<!-- Isi Konten -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Layanan</h4>
                  <form class="forms-sample" action="<?php echo base_url('backend_layanan/tambah_aksi_layanan'); ?>" method="post">
                    <div class="form-group">
                      <label for="nama_layanan">Nama Layanan</label>
                      <input type="text" class="form-control" id="nama_layanan" name="nama_layanan" placeholder="Nama Layanan">
                    </div>
                    <div class="form-group">
                      <label for="deskripsi_layanan">Deskripsi Layanan</label>
                      <input type="text" class="form-control" id="deskripsi_layanan" name="deskripsi_layanan" placeholder="Deskripsi Layanan">
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
                    <a href="<?= base_url('backend_layanan'); ?>" class="btn btn-light">Cancel</a>
                    </div>
                  </form>
                </div>
              </div>
<!-- Akhir Isi Konten -->
            </div>
          </div>

          
