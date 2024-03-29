<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="card mt-4 shadow">
        <div class="card-header">
            <a href="/product/new" class="btn btn-primary"> <i class="fas fa-plus"></i> Add new product</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>No.</td>
                        <td>Name</td>
                        <td>Stock</td>
                        <td>Price</td>
                        <td>Category</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>

                    <?php $no = 0; ?>
                    <?php foreach ($products as $item) : ?>
                        <tr>
                            <td><?= $no += 1; ?></td>
                            <td><?= $item['name'] ?></td>
                            <td><?= $item['stock'] ?></td>
                            <td><?= $item['price'] ?></td>
                            <td><?= $item['category'] ?></td>
                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-warning" style="height: 35px;margin-right:10px" href="/product/<?= $item['id'] ?>/edit"><i class="fas fa-edit"></i></a>
                                    <form action="/product/<?= $item['id'] ?>" method="post" onsubmit="return confirm(`Are you sure?`)">
                                        <input type="hidden" name="_method" value="delete" />
                                        <button type="submit" class="btn btn-danger" style="height: 35px;"><i class="fas fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="text-center p-3" ;">
    © by DAR.
  </div>
<?= $this->endSection() ?>