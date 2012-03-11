<div class="panel_menu">
    <div class="panel_menu_header_right">
        <h2>pencarian</h2>
        <div style="height: 40px">
            <?php echo form_open(); ?>
            <table>
                <tr>
                    <td>
                        <?php
                        $data = array(
                            'class'=>'input_menu'
                        );
                        echo form_input($data);
                        ?>
                    </td>
                    <td>
                        <?php
                        $data = array(
                            'value'=>'Cari'
                        );
                        echo form_submit($data);
                        ?>
                    </td>
                </tr>
            </table>

            <?php echo form_close(); ?>
        </div>

    </div>
</div>