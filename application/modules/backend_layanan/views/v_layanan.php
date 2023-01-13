<div class="content-wrapper ">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <!-- Isi Konten -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Layanan</h4>
                  <a href="<?= base_url('backend_layanan/tambah_layanan'); ?>" class="btn btn-inverse-primary btn-rounded float-right">Tambah Layanan</a>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Layanan</th>
                          <th>Deskripsi Layanan</th>
                          <th>Foto</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $no = 0; foreach ($data as $i) { $no++; ?>
                        <tr>
                          <td><?= $no; ?></td>
                          <td><?= $i->nama_layanan; ?></td>
                          <td><?= $i->deskripsi_layanan; ?></td>
                          <td><?= $i->foto; ?></td>
                          <td>
                        <a href="<?= base_url('backend_layanan/hapus_layanan/'.$i->kd_layanan); ?>" class="btn btn-inverse-danger btn-rounded btn-sm">Hapus</a></td>
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
        
