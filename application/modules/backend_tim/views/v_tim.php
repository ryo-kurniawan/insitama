<div class="content-wrapper ">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <!-- Isi Konten -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tim</h4>
                  <a href="<?= base_url('backend_tim/tambah_tim'); ?>" class="btn btn-inverse-primary btn-rounded float-right">Tambah Tim</a>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Lengkap</th>
                          <th>Jabatan</th>
                          <th>Foto</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $no = 0; foreach ($data as $i) { $no++; ?>
                        <tr>
                          <td><?= $no; ?></td>
                          <td><?= $i->nama_lengkap; ?></td>
                          <td><?= $i->jabatan; ?></td>
                          <td><?= $i->foto; ?></td>
                          <td>
                        <a href="<?= base_url('backend_tim/hapus_tim/'.$i->kd_tim); ?>" class="btn btn-inverse-danger btn-rounded btn-sm">Hapus</a></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- Akhir Isi Konten -->
            </div>
          </div>
        
