<div class="content">
    <?php $this->load->view('frontend/element/vcontentleft'); ?>

    <div class="center">
        <div class="content_center">

            <div class="span8">
                <table class="table table-condensed">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Detail</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1;
                    foreach($siswa_row as $row)
                    { ?>

                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row->nis; ?></td>
                        <td><?php echo $row->nama; ?></td>
                        <td><?php echo $row->kelas; ?></td>
                        <td><a href=""><i class="icon-user"></i></a></td>
                    </tr>
                        <?php
                        $no++;
                    }
                    ?>
                    </tbody>
                </table>
            </div>


        </div>

    </div>

    <?php $this->load->view('frontend/element/vcontentright'); ?>
</div>
