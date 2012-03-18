<div class="center">
    <div class="content_center"></div>
        <h6>ARTIKEL TERBARU</h6>
        <?php $no = 1;
            foreach($posting_row as $row)
            {?>
                <h3>
                    <?php echo $row->title_posting; ?>
                </h3>
                <p style="text-indent: 20px">
                    <?php echo $row->note_posting; ?>...
                </p>
                    <br/>
                    <a href="<?php echo base_url(); ?>index.php/readmore/cread">baca selanjutnya</a>
                <hr/>
                <?php
               $no++;
            }
        ?>
<!--    <div>--><?php //echo $this->pagination->create_links(); ?><!--</div>-->
</div>