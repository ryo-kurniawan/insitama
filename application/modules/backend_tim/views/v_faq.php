<div class="content-wrapper ">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <!-- Isi Konten -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">FAQ</h4>
                  <a href="<?= base_url('backend_faq/tambah_faq'); ?>" class="btn btn-inverse-primary btn-rounded float-right">Tambah FAQ</a>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Pertanyaan</th>
                          <th>Jawaban</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $no = 0; foreach ($data as $i) { $no++; ?>
                        <tr>
                          <td><?= $no; ?></td>
                          <td><?= $i->pertanyaan; ?></td>
                          <td><?= $i->jawaban; ?></td>
                          <td>
                        <a href="<?= base_url('backend_faq/hapus_faq/'.$i->kd_faq); ?>" class="btn btn-inverse-danger btn-rounded btn-sm">Hapus</a></td>
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
        
