<main id="main" class="main">

    <div class="pagetitle">
        <div class="row ">
            <?php
            $page = isset($_GET['page']) ? $_GET['page'] : '';
            if ($page=='231241') {?>
            <h1>ข้อมูลอำนาจและหน้าที่ของคณะกรรมการขับเคลื่อนพื้นที่นวัตกรรมการศึกษาด้านต่าง</h1>
            <?php   }if ($page=='231242') { ?>
            <h1>ข้อมูลรายชื่อคณะกรรมการ</h1>
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
                <a href="<?php echo site_url('Fm_committee/committee?page=231241') ?>" style="float: right;"
                    class="btn btn-sm btn-light"
                    data-mdb-ripple-color="dark">ข้อมูลอำนาจและหน้าที่ของคณะกรรมการขับเคลื่อน</a>
                <h5 style="float: right;"> | </h5>
                <a href="<?php echo site_url('Fm_committee/member?page=231242') ?>" style="float: right;"
                    class="btn btn-sm btn-light" data-mdb-ripple-color="dark">ข้อมูลรายชื่อคณะกรรมการ</a>
            </div>
        </div>
    </div>

    </div><!-- End Page Title -->
<?php 


if ($page=='231241') {  ?>
    <div class="col-12">
        <div class="card recent-sales overflow-auto">

            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title">รายละเอียดข้อมูล <span>| Table Student</span></h5>
                    </div>
                    <div class="col">
                        <h5 style="float: right; padding: 15px;" class="card-title"><a href="<?php echo site_url('Fm_committee/form_page?page=231241') ?>"
                                class="btn btn-success">เพิ่มข้อมูลอำนาจและหน้าที่ของคณะกรรมการขับเคลื่อนพื้นที่นวัตกรรมการศึกษาด้านต่าง</a></h5>
                    </div>
                </div>
                <table class="table table-borderless datatable">
                    <thead>
                       
                        <tr>
                        <th style="text-align: center;" scope="col">รหัส</th>
                            <th style="text-align: center;" scope="col">จังหวัด</th>
                            <th style="text-align: center;" scope="col">คำสั่ง</th>
                            <th style="text-align: center;" scope="col">เอกสาร</th>
                            <th style="text-align: center;" scope="col">ดูรายละเอียด</th>
                        </tr>
                      
                    </thead>
                    <tbody>
                    <?php foreach ($q_committee as $show ) {
                            # code...
                        ?>
                        <tr>
                            <th scope="row " style="text-align: center;"><?php echo $show->COMMITTEE_ID; ?></th>
                            <th scope="row"><?php echo $show->PROVINCE_CODE; ?></th>
                            <td style="text-align: center;"><?php echo $show->APPOINTMENT_NO; ?>
                            <td style="text-align: center;"><?php echo $show->APPOINTMENT_ATTACHMENT; ?>

                           <td style="text-align: center;"><button type="button" class="btn btn-primary"
                                    data-bs-toggle="modal" data-bs-target="#Modal"><i
                                        class="bi bi-card-list"></i></button></td>
                            
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

if ($page =='231242') {  ?>
    <div class="col-12">
        <div class="card recent-sales overflow-auto">

            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title">รายละเอียดข้อมูล <span>| Table Student</span></h5>
                    </div>
                    <div class="col">
                        <h5 style="float: right; padding: 15px;" class="card-title"><a href="<?php echo site_url('Fm_committee/form_page?page=231242') ?>"
                                class="btn btn-success">เพิ่มข้อมูลรายชื่อคณะกรรมการ</a></h5>
                    </div>
                </div>
                <table class="table table-borderless datatable">
                    <thead>
                       
                        <tr>
                            <th style="text-align: center;" scope="col">คีย์หลักข้อมูล</th>
                            <th style="text-align: center;" scope="col">คีย์อ้างอิงข้อมูลคณะกรรมการ</th>
                            <th style="text-align: center;" scope="col">คำนำหน้าชื่อ</th>
                            <th style="text-align: center;" scope="col">ชื่อ (ภาษาไทย)</th>
                            <th style="text-align: center;" scope="col">ชื่อ (ภาษาอังกฤษ)</th>
                            <th style="text-align: center;" scope="col">ชื่อกลาง (ภาษาอังกฤษ)</th>
                            <th style="text-align: center;" scope="col">ชื่อกลาง (ภาษาไทย)</th>
                            <th style="text-align: center;" scope="col">นามสกุล (ภาษาอังกฤษ)</th>
                            <th style="text-align: center;" scope="col">นามสกุล (ภาษาไทย)</th>
                            <th style="text-align: center;" scope="col">ตำแหน่ง (กรรมการ)</th>
                            <th style="text-align: center;" scope="col">เริ่มวาระการดำรงตำแหน่ง</th>
                            <th style="text-align: center;" scope="col">สิ้นสุดวาระการดำรงตำแหน่ง</th>
                        </tr>
                      
                    </thead>
                    <tbody>
                    <?php foreach ($q_member as $show_member ) {
                            # code...
                        ?>
                        <tr>
                            <th scope="row"><?php echo $show_member->COMMITTEE_MEMBER_ID; ?></th>
                            <th scope="row"><?php echo $show_member->COMMITTEE_ID; ?></th>
                            <th scope="row"><?php echo $show_member->PREFIX_CODE; ?></th>
                            <th scope="row"><?php echo $show_member->NAME_TH; ?></th>
                            <th scope="row"><?php echo $show_member->NAME_EN; ?></th>
                            <th scope="row"><?php echo $show_member->MIDDLE_NAME_TH; ?></th>
                            <th scope="row"><?php echo $show_member->MIDDLE_NAME_EN; ?></th>
                            <th scope="row"><?php echo $show_member->LAST_NAME_TH; ?></th>
                            <th scope="row"><?php echo $show_member->LAST_NAME_EN; ?></th>
                            <th scope="row"><?php echo $show_member->INNOVATION_COMMITTEE_POSITION_CODE; ?></th>
                            <th scope="row"><?php echo $show_member->TERM_START_DATE; ?></th>
                            <th scope="row"><?php echo $show_member->TERM_END_DATE; ?></th>
                            
                        </tr>
                        <?php  } ?>
                    </tbody>
                </table>

            </div>

        </div>
    </div><!-- End Recent Sales -->
<?php } ?>
</main><!-- End #main -->