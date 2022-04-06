<?= $this->extend('base') ?>

<?= $this->section('content') ?>

<div class="w3-container w3-black w3-center">
    <h2 class="w3-wide w3-center">TODO</h2>
    <div class="card-body ">
        <table class="w3-content w3-center table table-dark table-hover table-borderless">
            <thead>
                <tr>
                    <td>No.</td>
                    <td>Title</td>
                    <td>Description</td>
                    <td>Waktu</td>
                    <td>Cek</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>

                <?php $no = 0; ?>
                <?php foreach ($todos as $item) : ?>
                <tr>
                    <td><?= $no += 1; ?></td>
                    <td><?= $item['title'] ?></td>
                    <td><?= $item['description'] ?></td>
                    <td><?= $item['finished_at'] ?></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </td>
                    <td>
                        <div class="btn-group " role="group " aria-label="Basic example ">
                            <form action="/todo/<?= $item['id'] ?>" method="POST"
                                onsubmit="return confirm(`Are you sure?`)">
                                <a href="/todo/<?= $item['id'] ?>/edit" class="btn btn-secondary text-white "><i
                                        class='bx bx-pencil'></i></a>
                                <input type="hidden" name="_method" value="DELETE" />
                                <button class="btn btn-light text-dark" type="submit">
                                    <i class='bx bx-trash'></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <a href="/todo/new" class="btn btn-dark"> Tambahkan To do baru</a>
    </div>
</div>
<br>
<br>
<!-- The Band Section -->
<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">DO Somenthing</h2>
    <p class="w3-opacity"><i>Way of success</i></p>
    <p class="w3-justify">Kita harus bisa melawan ego kita melawan kemalasan
        karena itu merupakan kesuksesan kecil yang akan membiasakan kita untuk meraih
        kesukesan lainya...</p>
</div>

<!-- End Page Content -->
<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">

</div>
</div>
<?= $this->endSection() ?>