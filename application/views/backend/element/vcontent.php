<div class="container-fluid">
    <div class="row-fluid" style="height: 600px">
        <div class="span2">

            <ul class="nav nav-list">
                <li class="nav-header">
                    Dashboard
                </li>
            </ul>

            <div class="tabbable tabs-left">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#lA" data-toggle="tab"><i class="icon-envelope"></i>&nbsp;Post</a>
                    </li>
                    <li class="">
                        <a href="#lB" data-toggle="tab"><i class="icon-envelope"></i>&nbsp;List Post</a>
                    </li>
                    <li class="">
                        <a href="#lC" data-toggle="tab"><i class="icon-cog"></i>&nbsp;Setting</a>
                    </li>
                    <li class="">
                        <a href="#lD" data-toggle="tab"><i class="icon-user"></i>&nbsp;Users</a>
                    </li>
                </ul>

            </div>
        </div>
        <div class="span10">
            <div class="tab-content">
                <div class="tab-pane active" id="lA">

                    <ul id="tab" class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#home">Home</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#guru">Input Guru</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#siswa">Input Siswa</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#alumni">Input Alumni</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#infosekolah">Info Sekolah</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#materiajar">Materi ajar</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#artikel">Artikel</a>
                        </li>


                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div id="home" class="tab-pane fade active in">

                            <?php
                            $data = array(
                                'class'=>'well'
                            );
                            echo form_open('',$data);
                            ?>
                            <table>
                                <tr>
                                    <td>
                                        <?php
                                        echo form_label('Title','title');
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                        $data = array(
                                            'class'=>'span3',
                                            'style'=>'height: 25px'
                                        );
                                        echo form_input($data);
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php

                                        echo form_label('Note','note');
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <textarea rows="10" cols="40" style="width: 1057px"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <?php
                                        $data = array(
                                            'class'=>'btn',
                                            'value'=>'submit'
                                        );
                                        echo form_submit($data);
                                        ?>
                                        &nbsp;&nbsp;
                                        <?php
                                        $data = array(
                                            'class'=>'btn',
                                            'value'=>'cancel'
                                        );
                                        echo form_submit($data);
                                        ?>

                                    </td>

                                </tr>
                            </table>

                            <?php echo form_close(); ?>

                        </div>
                        <div id="guru" class="tab-pane fade">

                            <?php
                            $data = array(
                                'class'=>'well'
                            );
                            echo form_open('',$data);
                            ?>
                            <table>
                                <tr>
                                    <td>
                                        <?php
                                        echo form_label('Title','title');
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                        $data = array(
                                            'class'=>'span3',
                                            'style'=>'height: 25px'
                                        );
                                        echo form_input($data);
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php

                                        echo form_label('Note','note');
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <textarea rows="10" cols="40" style="width: 1057px"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <?php
                                        $data = array(
                                            'class'=>'btn',
                                            'value'=>'submit'
                                        );
                                        echo form_submit($data);
                                        ?>
                                        &nbsp;&nbsp;
                                        <?php
                                        $data = array(
                                            'class'=>'btn',
                                            'value'=>'cancel'
                                        );
                                        echo form_submit($data);
                                        ?>

                                    </td>

                                </tr>
                            </table>

                            <?php echo form_close(); ?>

                        </div>
                        <div id="siswa" class="tab-pane fade">
                            <p>aEtsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                        </div>
                        <div id="alumni" class="tab-pane fade">
                            <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                        </div>
                        <div id="infosekolah" class="tab-pane fade">
                            <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                        </div>
                        <div id="materiajar" class="tab-pane fade">
                            <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                        </div>
                        <div id="artikel" class="tab-pane fade">
                            <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                        </div>
                    </div>






                </div>
                <div class="tab-pane" id="lB">

                    <form class="well">
                        <label>Label name</label>
                        <input type="text" class="span3" placeholder="Type something…"/>
                        <span class="help-inline">Associated help text!</span>
                        <label class="checkbox">
                            <input type="checkbox"/>
                            Check me out
                        </label>
                        <button type="submit" class="btn">Submit</button>
                    </form>

                </div>
                <div class="tab-pane" id="lC">

                    <form class="well">
                        <label>Label name</label>
                        <input type="text" class="span3" placeholder="Type something…"/>
                        <span class="help-inline">Associated help text!</span>
                        <label class="checkbox">
                            <input type="checkbox"/>
                            Check me out
                        </label>
                        <button type="submit" class="btn">Submit</button>
                    </form>

                </div>
                <div class="tab-pane" id="lD">

                    <form class="well">
                        <label>Label name</label>
                        <input type="text" class="span3" placeholder="Type something…"/>
                        <span class="help-inline">Associated help text!</span>
                        <label class="checkbox">
                            <input type="checkbox"/>
                            Check me out
                        </label>
                        <button type="submit" class="btn">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
