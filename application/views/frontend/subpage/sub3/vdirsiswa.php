<div class="content">
    <?php $this->load->view('frontend/element/vcontentleft'); ?>
    <div class="center_all" style="width: 70%;min-height: 384px">
        <h2>Direktori Siswa</h2>
        <form>
            <table style="margin-bottom: 10px">
                <tr>
                    <td>Jurusan/Program&nbsp;&nbsp;</td>
                    <td>
                        <select style="width: 100px">
                            <option value="IPA">IPA</option>
                            <option value="IPS">IPS</option>
                            <option value="BAHASA">BAHASA</option>
                        </select>
                        &nbsp;&nbsp;
                    </td>
                    <td>
                        <input type="submit" value="PILIH" class="btn-info"/>&nbsp;&nbsp;
                    </td>
                    <td>
                        Cari Siswa&nbsp;&nbsp;
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
