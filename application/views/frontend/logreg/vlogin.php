<div class="panel_menu">
    <div class="panel_menu_header_left" align="center">


    <?php echo form_open(); ?>
        <table>
            <tr>
                <td>
                    <?php echo form_label('Username','username'); ?>
                    &nbsp;&nbsp;&nbsp;
                </td>
                <td>
                    &nbsp;&nbsp;
                    <?php
                        $data = array(
                            'name'=>'username',
                            'class'=>'input_menu'
                            );
                        echo form_input($data);
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo form_label('Password','password'); ?>
                    &nbsp;&nbsp;&nbsp;
                </td>
                <td>
                    &nbsp;&nbsp;
                    <?php
                        $data = array(
                            'name'=>'password',
                            'class'=>'input_menu'
                        );
                        echo form_password($data);
                    ?>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td align="center">
                    &nbsp;&nbsp;
                    <?php
                        $data = array(
                            'id'=>'login',
                            'value'=>'Login',
                            'style'=>'cursor:pointer;margin-right: -50px',
                            'class'=>'btn'
                        );
                        echo form_submit($data);
                    ?>
                </td>
                <td align="center">
                    &nbsp;&nbsp;
                    <a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=reg"><button style="cursor: pointer;margin-right: -10px" class="btn-primary">Register</button></a>

                </td>
            </tr>
        </table>
    <?php echo form_close(); ?>
    </div>
</div>