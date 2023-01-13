<div class="content-wrapper ">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <!-- Isi Konten -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Testimoni</h4>
                  <a href="<?= base_url('backend_testimoni/tambah_testimoni'); ?>" class="btn btn-inverse-primary btn-rounded float-right">Tambah Testimoni</a>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Client</th>
                          <th>Pekerjaan</th>
                          <th>Pernyataan</th>
                          <th>Foto</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $no = 0; foreach ($data as $i) { $no++; ?>
                        <tr>
                          <td><?= $no; ?></td>
                          <td><?= $i->nama_client; ?></td>
                          <td><?= $i->pekerjaan; ?></td>
                          <td><?= $i->pernyataan; ?></td>
                          <td><?= $i->foto; ?></td>
                          <td>
                        <a href="<?= base_url('backend_testimoni/hapus_testimoni/'.$i->kd_testimoni); ?>" class="btn btn-inverse-danger btn-rounded btn-sm">Hapus</a></td>
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
        
