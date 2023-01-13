<div class="content-wrapper ">
          <div class="row">
            <div class="col-md-12 grid-margin">
<!-- Isi Konten -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Tim</h4>
                  <form class="forms-sample" action="<?php echo base_url('backend_tim/tambah_aksi_tim'); ?>" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Nama Lengkap</label>
                      <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Jabatan</label>
                      <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan">
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
                    <a href="<?= base_url('backend_tim'); ?>" class="btn btn-light">Cancel</a>
                    </div>
                  </form>
                </div>
              </div>
<!-- Akhir Isi Konten -->
            </div>
          </div>

          
