<?= $this->extend('base') ?>

<?= $this->section('content') ?>

<div class="w3-container w3-black w3-center">
    <h2 class="w3-wide w3-center">TODO</h2>
    <table class="w3-content w3-center table table-dark table-hover table-borderless">
        <div class="w3-container">
            <form action="/todo/create" method="post">
                <div class="form-group">
                    <label for="tiket">Judul</label><br>
                    <small class="form-text text-muted">Kamu dapat menuliskan judul to-do pada kolom ini </small>
                    <input type="text" class="form-control" id="title" placeholder="Masukan Judul Acara" name="title"
                        required />
                </div>

                <div class="form-group">
                    <label for="description">Deskripsi</label><br>
                    <small class="form-text text-muted">Kamu dapat menuliskan deskripsi to-do secara detail pada kolom
                        ini</small>
                    <textarea rows="3" class="form-control" id="description" aria-describedby="emailHelp"
                        placeholder="Masukan Deskripsi pekerjaan" name="description" required></textarea>
                </div>

                <div class="form-group">
                    <label for="finished_at">Waktu</label><br>
                    <small class="form-text text-muted">Kamu dapat menuliskan waktu to-do pada kolom ini</small>
                    <input type="text" class="form-control" id="finished_at" placeholder="Masukan waktu pekerjaan"
                        name="finished_at" required />

                </div>
                <br>
                <br>
                <button type="submit" class="btn btn-dark">KUMPULKAN</button>
            </form>
        </div>
    </table>
</div>
<br>
<br>
<?= $this->endSection() ?>
<br>
<br>