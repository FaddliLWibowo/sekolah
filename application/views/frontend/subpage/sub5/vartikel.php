<div class="content">
    <?php $this->load->view('frontend/element/vcontentleft'); ?>
    <div class="center_all" style="width: 70%;min-height: 384px;word-wrap: break-word">
        <h2>Artikel</h2>


        <ol style="list-style: circle">
            <?php $n = 1;
            foreach($artikel_row as $row)
            {?>

            <li>
                <?php echo $row->title_artikel; ?>
                <br/>
                <?php echo $row->note_artikel; ?>
            </li>

                <?php
                $n++;
            }
            ?>
        </ol>

    </div>
</div>
