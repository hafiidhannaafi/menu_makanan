<div class="container">

    <div class="row mt-4">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Tambah Data Menu
            </div>
        
          
        <div class="card-body">
            <?php if( validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                 <?= validation_errors(); ?>
                </div>
           <?php endif;?>
        <form action="" method="post">
        <div class="col-md-16">
        <div class="form-group">
            <label for="id_makanan">Id makanan</label>
            <input type="number" class="form-control" name="id_makanan" id="id_makanan" >
        </div>
        <div class="row mt-2">
        <div class="col-md-16">
        <div class="form-group">
            <label for="nama_makanan">Nama makanan</label>
            <input type="text" class="form-control" name="nama_makanan" id="nama_makanan" >
        </div>
        <div class="row mt-2">
        <div class="col-md-16">
        <div class="form-group">
            <label for="ukuran_makanan">Ukuran makanan</label>
            <select class="form-control" id="ukuran_makanan" name="ukuran_makanan">
                <option value="kecil">kecil</option>
                <option value="sedang">sedang</option>
                <option value="besar">besar</option>
            </select>       
        </div>
        <div class="row mt-2">
        <div class="col-md-16">
        <div class="form-group">
            <label for="harga_makanan">Harga makanan</label>
            <input type="text" class="form-control" name="harga_makanan" id="harga_makanan" >
        </div>
        <div class="row mt-2">
        <div class="col-md-15">
        <div class="form-group">
            <label for="catatan">Catatan</label>
            <input type="text" class="form-control" name="catatan" id="catatan" >
        </div>
        <div class="row mt-3">
        <button type="submit" name="tambah" class="btn btn-primary" >Submit</button>
        </div> 
         </form>
        </div>
    </div>
</div>