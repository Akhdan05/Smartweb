<div class="container-fluid">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">Notification</li>
        <li class="breadcrumb-item active">Index</li>
    </ol>

    <div class="row">
        <div class="col-lg-12 col-md-12">

            <?= $this->session->flashdata('msg') ?>

            <div class="card shadow">
                <div class="card-body">

                    <a href="<?= base_url('Notification/allmarkread') ?>" onclick="return confirm('Tandai semua sudah dibaca?')" class="btn btn-primary">
                    Tandai sudah dibaca semua</a>

                    <a href="<?= base_url('Notification/delete') ?>" onclick="return confirm('Hapus semua notif?')" class="btn btn-danger">
                    Hapus semua notif</a>

                    <br></br>

                    <table class="table table-bordered table-sm table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Pesan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead> 
                        <tbody>
                            <?php $index = 1 ?>
                            <?php foreach($data_notif as $data): ?>
                                <tr>
                                    <td><?= $index++ ?></td>
                                    <td><?= $data['judul'] ?></td>
                                    <td><?= $data['pesan'] ?></td>
                                    <td>
                                        <?php if($data['is_read'] == 0): ?>
                                        <a href="<?= base_url('Notification/markread/' . $data['id']) ?>"
                                        class="btn btn-sm btn-info"> tandai sudah dibaca </a>
                                        <?php else: ?>

                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>                       
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>