<div class="content">
    <?php $this->load->view('frontend/element/vcontentleft'); ?>
    <div class="center_all" style="width: 70%;min-height: 384px">
        <h2>Direktori Guru dan TU</h2>
        <form>
            <table style="margin-bottom: 10px">
                <tr>
                    <td>Pilih Data&nbsp;&nbsp;</td>
                    <td>
                        <select>
                            <option value="GURU">GURU</option>
                            <option value="TU">TU</option>
                        </select>
                        &nbsp;&nbsp;
                    </td>
                    <td>
                        Cari Nama&nbsp;&nbsp;
                    </td>
                    <td>
                        <input type="text"/>&nbsp;&nbsp;
                    </td>
                    <td>
                        <input type="submit" value="CARI" class="btn-info"/>
                    </td>
                </tr>
            </table>
        </form>


        <div class="span8">
            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Pelajaran</th>
                    <th>Jabatan</th>
                    <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>-</td>
                    <td>Otto</td>
                    <td>javascript</td>
                    <th>-</th>
                    <th><a href=""><i class="icon-user"></i></a></th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>-</td>
                    <td>Otto</td>
                    <td>javascript</td>
                    <th>-</th>
                    <th><a href=""><i class="icon-user"></i></a></th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>-</td>
                    <td>Otto</td>
                    <td>javascript</td>
                    <th>-</th>
                    <th><a href=""><i class="icon-user"></i></a></th>
                </tr>
                </tbody>
            </table>
        </div>



    </div>
</div>
