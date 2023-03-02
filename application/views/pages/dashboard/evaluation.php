<main id="main" class="main">

    <div class="pagetitle">
        <div class="row ">
            <?php
            $page = isset($_GET['page']) ? $_GET['page'] : '';
            if ($page=='aec1') {?>
            <h1>การประกันคุณภาพด้วยตัวชี้วัดของพื้นที่</h1>
            <?php   }  ?>
            <?php  if ($page=='aecl1') { ?>
            <h1>ข้อมูลระดับตัวชี้วัด</h1>
            <?php } ?>
            <?php  if ($page=='aecc1') { ?>
            <h1>ข้อมูลองค์ประกอบตัวชี้วัด</h1>
            <?php } ?>
            <?php  if ($page=='aeccl1') { ?>
            <h1>ข้อมูลองค์ประกอบตัวชี้วัดพื้นที่</h1>
            <?php } ?>
            <?php  if ($page=='ase1') { ?>
            <h1>ข้อมูลผลการประเมินโรงเรียน</h1>
            <?php } ?>
            <?php  if ($page=='asec1') { ?>
            <h1>ข้อมูลผลการประเมินตามตัวชี้วัด</h1>
            <?php } ?>
            <div class="col-3">

                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="main">Home</a></li>
                        <li class="breadcrumb-item">Form</li>
                        <li class="breadcrumb-item active">Student</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-9" style="padding-right: 25px;">
                <a href="<?php echo site_url('Fm_evaluation/evaluation?page=aec1') ?>" style="float: right;"
                    class="btn btn-sm btn-light"
                    data-mdb-ripple-color="dark">การประกันคุณภาพด้วยตัวชี้วัดของพื้นที่</a>
                <h5 style="float: right;"> | </h5>
                <a href="<?php echo site_url('Fm_evaluation/member?page=aecl1') ?>" style="float: right;"
                    class="btn btn-sm btn-light" data-mdb-ripple-color="dark">ข้อมูลระดับตัวชี้วัด</a>
                    <h5 style="float: right;"> | </h5>
                    <a href="<?php echo site_url('Fm_evaluation/evaluation?page=aecc1') ?>" style="float: right;"
                    class="btn btn-sm btn-light"
                    data-mdb-ripple-color="dark">ข้อมูลองค์ประกอบตัวชี้วัด</a>
                    <h5 style="float: right;"> | </h5>
                    <a href="<?php echo site_url('Fm_evaluation/evaluation?page=aeccl1') ?>" style="float: right;"
                    class="btn btn-sm btn-light"
                    data-mdb-ripple-color="dark">ข้อมูลองค์ประกอบตัวชี้วัดพื้นที่</a>
                    <h5 style="float: right;"> | </h5>
                    <a href="<?php echo site_url('Fm_evaluation/evaluation?page=ase1') ?>" style="float: right;"
                    class="btn btn-sm btn-light"
                    data-mdb-ripple-color="dark">ข้อมูลผลการประเมินโรงเรียน</a>
                    <h5 style="float: right;"> | </h5>
                    <a href="<?php echo site_url('Fm_evaluation/evaluation?page=asec1') ?>" style="float: right;"
                    class="btn btn-sm btn-light"
                    data-mdb-ripple-color="dark">ข้อมูลผลการประเมินตามตัวชี้วัด</a>
            </div>
        </div>
    </div>

    </div><!-- End Page Title -->
<?php 


if ($page=='aecl1') {  ?>
    <div class="col-12">
        <div class="card recent-sales overflow-auto">

            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title">รายละเอียดข้อมูล <span>| การประกันคุณภาพด้วยตัวชี้วัดของพื้นที่</span></h5>
                    </div>
                    <div class="col">
                        <h5 style="float: right; padding: 15px;" class="card-title"><a href="<?php echo site_url('Fm_committee/form_page?page=231242') ?>"
                                class="btn btn-success">เพิ่มข้อมูลการประกันคุณภาพด้วยตัวชี้วัดของพื้นที่</a></h5>
                    </div>
                </div>
                <table class="table table-borderless datatable">
                    <thead>
                       
                        <tr>
                            <th style="text-align: center;" scope="col">คีย์หลักข้อมูล</th>
                            <th style="text-align: center;" scope="col">พื้นที่นวัตกรรม</th>
                            <th style="text-align: center;" scope="col">ซื่อเกณฑ์</th>
                            <th style="text-align: center;" scope="col">คำอธิบายเกณฑ์</th>

                        </tr>
                      
                    </thead>
                    <tbody>
                    <?php foreach ($query as $show ) {
                            # code...
                        ?>
                        <tr>
                            <th scope="row"><?php echo $show->CRITERIA_ID; ?></th>
                            <th scope="row"><?php echo $show->INNOVATION_AREA_CODE; ?></th>
                            <th scope="row"><?php echo $show->CRITERIA_NAME; ?></th>
                            <th scope="row"><?php echo $show->CRITERIA_DESCRIPTION; ?></th>

                            
                        </tr>
                        <?php  } ?>
                    </tbody>
                </table>

            </div>

        </div>
    </div><!-- End Recent Sales -->
<?php } ?>
<?php 
$page = isset($_GET['page']) ? $_GET['page'] : '';

if ($page =='aecc1') {  ?>
    <div class="col-12">
        <div class="card recent-sales overflow-auto">

            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title">รายละเอียดข้อมูล <span>| ข้อมูลระดับตัวชี้วัด</span></h5>
                    </div>
                    <div class="col">
                        <h5 style="float: right; padding: 15px;" class="card-title"><a href="<?php echo site_url('Fm_committee/form_page?page=231242') ?>"
                                class="btn btn-success">เพิ่มข้อมูลระดับตัวชี้วัด</a></h5>
                    </div>
                </div>
                <table class="table table-borderless datatable">
                    <thead>
                       
                        <tr>
                            <th style="text-align: center;" scope="col">คีย์หลัก</th>
                            <th style="text-align: center;" scope="col">คีย์อ้างอิงข้อมูลตัวขี้วัด</th>
                            <th style="text-align: center;" scope="col">ลำดับของระดับ</th>
                            <th style="text-align: center;" scope="col">หัวข้อระดับ</th>

                        </tr>
                      
                    </thead>
                    <tbody>
                    <?php foreach ($query as $show ) {
                            # code...
                        ?>
                        <tr>
                            <th scope="row"><?php echo $show->CRITERIA_LEVEL_ID; ?></th>
                            <th scope="row"><?php echo $show->CRITERIA_ID; ?></th>
                            <th scope="row"><?php echo $show->LEVEL_INDEX; ?></th>
                            <th scope="row"><?php echo $show->LEVEL_NAME; ?></th>

                            
                        </tr>
                        <?php  } ?>
                    </tbody>
                </table>

            </div>

        </div>
    </div><!-- End Recent Sales -->
<?php } ?>
<?php if ($page =='aecc1') { ?>
    <div class="col-12">
        <div class="card recent-sales overflow-auto">

            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title">รายละเอียดข้อมูล <span>| ข้อมูลองค์ประกอบตัวชี้วัด</span></h5>
                    </div>
                    <div class="col">
                        <h5 style="float: right; padding: 15px;" class="card-title"><a href="<?php echo site_url('Fm_committee/form_page?page=231242') ?>"
                                class="btn btn-success">เพิ่มข้อมูลองค์ประกอบตัวชี้วัด</a></h5>
                    </div>
                </div>
                <table class="table table-borderless datatable">
                    <thead>
                       
                        <tr>
                            <th style="text-align: center;" scope="col">คีย์หลัก</th>
                            <th style="text-align: center;" scope="col">คีย์อ้างอิงข้อมูลตัวชี้วัต</th>
                            <th style="text-align: center;" scope="col">ลำตับองค์ประกอบ</th>
                            <th style="text-align: center;" scope="col">หัวข้อองค์ประกอบ</th>
                            <th style="text-align: center;" scope="col">ค่าน้ำหนักการประเมิน</th>
                            <th style="text-align: center;" scope="col">หลักฐานประกอบการประเมิน</th>

                        </tr>
                      
                    </thead>
                    <tbody>
                    <?php foreach ($query as $show ) {
                            # code...
                        ?>
                        <tr>
                            <th scope="row"><?php echo $show->CRITERIA_COMPOSITION_ID; ?></th>
                            <th scope="row"><?php echo $show->CRITERIA_ID; ?></th>
                            <th scope="row"><?php echo $show->COMPOSITION_INDEX; ?></th>
                            <th scope="row"><?php echo $show->COMPOSITION_NAME; ?></th>
                            <th scope="row"><?php echo $show->COMPOSITION_WEIGHT_SCORE; ?></th>
                            <th scope="row"><?php echo $show->COMPOSITION_GUIDELIINE; ?></th>

                            
                        </tr>
                        <?php  } ?>
                    </tbody>
                </table>

            </div>

        </div>
    </div><!-- End Recent Sales -->
<?php } ?>
<?php if ($page =='aeccl1') { ?>
    <div class="col-12">
        <div class="card recent-sales overflow-auto">

            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title">รายละเอียดข้อมูล <span>| ข้อมูลองค์ประกอบตัวชี้วัดพื้นที่</span></h5>
                    </div>
                    <div class="col">
                        <h5 style="float: right; padding: 15px;" class="card-title"><a href="<?php echo site_url('Fm_committee/form_page?page=231242') ?>"
                                class="btn btn-success">เพิ่มข้อมูลองค์ประกอบตัวชี้วัดพื้นที่</a></h5>
                    </div>
                </div>
                <table class="table table-borderless datatable">
                    <thead>
                       
                        <tr>
                            <th style="text-align: center;" scope="col">คีย์อ้างอิงข้อมูสระดับตัวชี้วัต</th>
                            <th style="text-align: center;" scope="col">คีย์อ้างอิงข้อมูล</th>
                            <th style="text-align: center;" scope="col">คำอธิบาย</th>


                        </tr>
                      
                    </thead>
                    <tbody>
                    <?php foreach ($query as $show ) {
                            # code...
                        ?>
                        <tr>
                            <th scope="row"><?php echo $show->CRITERIA_COMPOSITION_ID; ?></th>
                            <th scope="row"><?php echo $show->CRITERIA_LEVEL_ID; ?></th>
                            <th scope="row"><?php echo $show->COMPOSITON_LEVEL_DESCRIPTION; ?></th>

                            
                        </tr>
                        <?php  } ?>
                    </tbody>
                </table>

            </div>

        </div>
    </div><!-- End Recent Sales -->
<?php } ?>
<?php if ($page =='ase1') { ?>
    <div class="col-12">
        <div class="card recent-sales overflow-auto">

            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title">รายละเอียดข้อมูล <span>| ข้อมูลผลการประเมินโรงเรียน</span></h5>
                    </div>
                    <div class="col">
                        <h5 style="float: right; padding: 15px;" class="card-title"><a href="<?php echo site_url('Fm_committee/form_page?page=231242') ?>"
                                class="btn btn-success">เพิ่มข้อมูลผลการประเมินโรงเรียน</a></h5>
                    </div>
                </div>
                <table class="table table-borderless datatable">
                    <thead>
                       
                        <tr>
                            <th style="text-align: center;" scope="col">คีย์หลักข้อมูล</th>
                            <th style="text-align: center;" scope="col">สถานศึกษา</th>
                            <th style="text-align: center;" scope="col">ชื่อการประเมิน</th>
                            <th style="text-align: center;" scope="col">คำอธิบาย</th>


                        </tr>
                      
                    </thead>
                    <tbody>
                    <?php foreach ($query as $show ) {
                            # code...
                        ?>
                        <tr>
                            <th scope="row"><?php echo $show->SCHOOL_EVALUATION_ID; ?></th>
                            <th scope="row"><?php echo $show->SCHOOL_ID; ?></th>
                            <th scope="row"><?php echo $show->EVALUATION_NAME; ?></th>
                            <th scope="row"><?php echo $show->EVALUATION_DESCRIPTION; ?></th>

                            
                        </tr>
                        <?php  } ?>
                    </tbody>
                </table>

            </div>

        </div>
    </div><!-- End Recent Sales -->
<?php } ?>
<?php if ($page =='asec1') { ?>
    <div class="col-12">
        <div class="card recent-sales overflow-auto">

            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title">รายละเอียดข้อมูล <span>| ข้อมูลผลการประเมินโรงเรียน</span></h5>
                    </div>
                    <div class="col">
                        <h5 style="float: right; padding: 15px;" class="card-title"><a href="<?php echo site_url('Fm_committee/form_page?page=231242') ?>"
                                class="btn btn-success">เพิ่มข้อมูลผลการประเมินโรงเรียน</a></h5>
                    </div>
                </div>
                <table class="table table-borderless datatable">
                    <thead>
                       
                        <tr>
                            <th style="text-align: center;" scope="col">คีย์หลักข้อมูล</th>
                            <th style="text-align: center;" scope="col">สถานศึกษา</th>
                            <th style="text-align: center;" scope="col">ชื่อการประเมิน</th>
                            <th style="text-align: center;" scope="col">คำอธิบาย</th>
                            <th style="text-align: center;" scope="col">ชื่อผู้ประเมิน</th>
                            <th style="text-align: center;" scope="col">ผลการประเมิน</th>
                            <th style="text-align: center;" scope="col">คีย์อ้างอิงผลการประเมินตามตัวชี้วัต</th>
                            <th style="text-align: center;" scope="col">คีย์อ้างอิงองค์ประกอบตัวชี้วัต</th>
                            <th style="text-align: center;" scope="col">ระดับที่ไต้</th>


                        </tr>
                      
                    </thead>
                    <tbody>
                    <?php foreach ($query as $show ) {
                            # code...
                        ?>
                        <tr>
                            <th scope="row"><?php echo $show->SCHOOL_EVALUATION_CRITERIA_ID; ?></th>
                            <th scope="row"><?php echo $show->SCHOOL_EVALUATION_ID; ?></th>
                            <th scope="row"><?php echo $show->CRITERIA_ID; ?></th>
                            <th scope="row"><?php echo $show->SELF_EVALUATE_FLAG; ?></th>
                            <th scope="row"><?php echo $show->EVALUATOR_NAME; ?></th>
                            <th scope="row"><?php echo $show->SCHOOL_EVALUATION_CODE; ?></th>
                            <th scope="row"><?php echo $show->SCHOOL_EVALUATION_CRITERIA_ID; ?></th>
                            <th scope="row"><?php echo $show->CRITERIA_COMPOSITION_ID; ?></th>
                            <th scope="row"><?php echo $show->LEVEL_INDEX; ?></th>

                            
                        </tr>
                        <?php  } ?>
                    </tbody>
                </table>

            </div>

        </div>
    </div><!-- End Recent Sales -->
<?php } ?>
</main><!-- End #main -->