
<div class="card mb-3">
  <div class="card-header">
    Masukkan Saldo
  </div>
  <div class="card-body">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <?php echo validation_errors(); ?>
    </div> 
    <?php echo form_open('news/create'); ?>
        <div class="form-group">
            <label for="saldo">Saldo</label>
            <input type="number" class="form-control" id="saldo" aria-describedby="saldoHelp" placeholder="100000" name="saldo">
            <small id="saldoHelp" class="form-text text-muted">Tidak boleh memasukkan simbol contoh ( . )</small>
        </div>
        <div class="form-group">
            <label for="ket">Keterangan</label>
            <textarea class="form-control" id="ket" name="ket" rows="3"></textarea>
        </div>
        <input type="submit" class="btn btn-success" value="Simpan" name="submit">
        <a class="btn btn-primary" href="<?= base_url()?>">Kembali</a>
    </form>
  </div>
</div>