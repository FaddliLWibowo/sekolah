<div class="content">
    <?php $this->load->view('frontend/element/vcontentleft'); ?>

    <div class="center">
        <div class="content_center">








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
                            <?php $no = 1;
                            foreach($guru_row as $row)
                            {?>


                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $row->nip; ?></td>
                                <td><?php echo $row->nama; ?></td>
                                <td><?php echo $row->pelajaran; ?></td>
                                <th><?php echo $row->jabatan; ?></th>
                                <th><a href=""><i class="icon-user"></i></a></th>
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
