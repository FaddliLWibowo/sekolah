<div class="content">
    <?php $this->load->view('frontend/element/vcontentleft'); ?>
    <div class="center_all" style="width: 70%;min-height: 384px">
        <h2>Direktori Guru dan TU</h2>
        <form>
            <table style="margin-bottom: 10px">
                <tr>
                    <td>Pilih Data&nbsp;&nbsp;</td>
                    <td>
                        <select>
                            <option value="GURU">GURU</option>
                            <option value="TU">TU</option>
                        </select>
                        &nbsp;&nbsp;
                    </td>
                    <td>
                        Cari Nama&nbsp;&nbsp;
                    </td>
                    <td>
                        <input type="text"/>&nbsp;&nbsp;
                    </td>
                    <td>
                        <input type="submit" value="CARI" class="btn-info"/>
                    </td>
                </tr>
            </table>
        </form>


        <div class="span8">
            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Language</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>CSS</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>Javascript</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Stu</td>
                    <td>Dent</td>
                    <td>HTML</td>
                </tr>
                </tbody>
            </table>
        </div>



    </div>
</div>
