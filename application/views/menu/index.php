<div class="container">
 
<?php if ($this->session->flashdata('flash') ) : ?>
<div class="div mt-3">
    <div class="col-md-6">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Menu Makanan<strong> berhasil</strong> <?= $this->session->flashdata('flash');?>.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
    </div>
</div>
<?php endif; ?>


 <div class="row mt-4">
     <div class="col-md-6">
         <a href="<?= base_url();?>menu/tambah "class="btn btn-primary">Tambah Data Menu</a>

     </div>
 </div>

    <div class="row mt-4">
        <div class="col-md-6">
        <h3> Daftar Menu </h3>
        <ul class="list-group">
            <?php foreach ($menu as $menu) : ?>
                 <li class="list-group-item">
                 <?= $menu ['nama_makanan']?>
                 <a href="<?= base_url(); ?>menu/hapus/<?= $menu ['id_makanan']; ?>"  
                  class="d-grid gap-2 d-md-flex justify-content-md-end" class="btn- btndanger" > hapus</a></button>
   

                
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>