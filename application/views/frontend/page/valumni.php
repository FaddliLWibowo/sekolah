<div class="content">

    <?php $this->load->view('frontend/element/vcontentleft'); ?>

    <div class="center">
        <div class="content_center">

            <div class="span8">
                <table class="table table-condensed">
                    <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Angkatan</th>
                        <th>Email</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1;
                    foreach($alumni_row as $row)
                    {?>

                    <tr>
                        <td><a href=""><i class="icon-file"></i><?php echo $row->nama_alumni; ?></a></td>
                        <td><?php echo $row->angkatan; ?></td>
                        <td><?php echo $row->email; ?></td>

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

