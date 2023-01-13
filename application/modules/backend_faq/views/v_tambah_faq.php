<div class="content-wrapper ">
          <div class="row">
            <div class="col-md-12 grid-margin">
<!-- Isi Konten -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah FAQ</h4>
                  <form class="forms-sample" action="<?php echo base_url('backend_faq/tambah_aksi_faq'); ?>" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Pertanyaan</label>
                      <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" placeholder="Pertanyaan">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Jawaban</label>
                      <input type="text" class="form-control" id="jawaban" name="jawaban" placeholder="Jawaban">
                    </div>
                    <div class="float-right">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="<?= base_url('backend_faq'); ?>" class="btn btn-light">Cancel</a>
                    </div>
                  </form>
                </div>
              </div>
<!-- Akhir Isi Konten -->
            </div>
          </div>
