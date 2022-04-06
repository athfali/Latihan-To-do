<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Update TO-DO <?= $data['title'] ?></h5>

            <form action="/todo/<?= $data['id'] ?>" method="post">
                <input type="hidden" name="_method" value="put" />

                <div class="form-group">
                    <label for="example-todo-title">Tuliskan judul to-do</label>
                    <input type="text" class="form-control" id="example-todo-title" aria-describedby="emailHelp" 
                        placeholder="Enter to-do title" required name="title" value="<?= $data['title'] ?>">
                    <small class="form-text text-muted">Judul to-do minimal berisi 5 karakter.</small>
                </div>

                <div class="form-group">
                    <label for="example-todo-description">description</label>
                    <input type="text" class="form-control" id="example-todo-description" aria-describedby="emailHelp" 
                        placeholder="Enter product stock" required name="description" value="<?= $data['description'] ?>">
                    <small class="form-text text-muted">masukan deskripsi to-donya.</small>
                </div>

                <div class="form-group">
                    <label for="example-todo-finished_at">Waktu</label>
                    <input type="text" class="form-control" id="example-todo-finished_at" aria-describedby="emailHelp" 
                        placeholder="Enter product price" required name="finished_at" value="<?= $data['finished_at'] ?>">
                    <small class="form-text text-muted">masukan deskripsi waktu nya.</small>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                    
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>