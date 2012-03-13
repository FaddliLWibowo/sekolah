<div class="center">
    <div class="content_center"></div>
        <?php $no = 1;
            foreach($posting_row as $row)
            {?>
                <h2>
                    <?php echo $row->title; ?>
                </h2>
                <p>
                    <?php echo $row->news; ?>
                </p>
                <?php
               $no++;
            }
        ?>
    <div class="ajaxurl"></div>
</div>