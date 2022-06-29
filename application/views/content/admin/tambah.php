<div class="container">
    <div class="row-mt-3">
        <div class="col-md-6">
            <form action="<?= base_url('admin/tambah'); ?>" method="POST">
                <div class="form-group">
                    <label for="doctor">Dokter</label>
                    <select class="custom-select" name="doctor">
                        <?php foreach ($doctor as $doct) : ?>
                            <option value="<?= $doct['id']; ?>"><?= $doct['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="day">Hari</label>
                    <select class="custom-select" name="day">
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="shift-start">Shift Mulai</label>
                    <select class="custom-select" name="shift-start">
                        <option value="09:00">09:00</option>
                        <option value="10:00">10:00</option>
                        <option value="10:00">10:00</option>
                        <option value="11:00">11:00</option>
                        <option value="12:00">12:00</option>
                    </select>
                    <label for="shift-start">Shift Berakhir</label>
                    <select class="custom-select" name="shift-start">
                        <option value="11:00">11:00</option>
                        <option value="12:00">12:00</option>
                        <option value="13:00">13:00</option>
                        <option value="14:00">14:00</option>
                    </select>
                </div>
                <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
            </form>


        </div>
    </div>
</div>