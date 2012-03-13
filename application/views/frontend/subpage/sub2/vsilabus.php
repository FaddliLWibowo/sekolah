<div class="content">
    <?php $this->load->view('frontend/element/vcontentleft'); ?>
    <div class="center_all" style="width: 70%;min-height: 384px">
        <h2>Silabus</h2>

        <table>
            <tr>
                <td>
                    Semester&nbsp;&nbsp;
                </td>
                <td>
                    <select>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </td>
            </tr>
        </table>

        <div class="span8">
            <ol>
                <?php $no = 1;
                foreach($silabus_row as $row)
                {?>

                <li style="width: 596px;word-wrap: break-word;height: auto;"><?php echo $no; ?></li>
                    <li style="width: 596px;word-wrap: break-word;height: auto;"><?php echo $row->note_silabus; ?></li>
                    <?php
                    $no++;
                }
                ?>
            </ol>
        </div>

    </div>
</div>
