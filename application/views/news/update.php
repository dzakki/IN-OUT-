
<div class="card mb-3">
  <div class="card-header">
    Masukkan Saldo
  </div>
  <div class="card-body">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <?php echo validation_errors(); ?>
    </div> 
    <?php echo form_open('news/update/'.$news_item['id_masukan']); ?>
        <div class="form-group">
            <label for="saldo">Saldo</label>
            <input type="number" class="form-control" id="saldo" aria-describedby="saldoHelp" placeholder="100000" name="saldo" value="<?= $news_item['saldo']?>">
            <small id="saldoHelp" class="form-text text-muted">Tidak boleh memasukkan simbol contoh ( . )</small>
        </div>
        <div class="form-group">
            <label for="ket">Keterangan</label>
            <textarea class="form-control" id="ket" name="ket" rows="3"><?= $news_item['ket']?></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Simpan" name="submit">
        <a class="btn btn-primary" href="<?= base_url()?>">Batal</a>
    </form>
  </div>
</div>