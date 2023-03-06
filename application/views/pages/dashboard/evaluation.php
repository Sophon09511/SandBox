<?php $page = isset($_GET['page']) ? $_GET['page'] : '';  ?>
<main id="main" class="main">
    <?php
    session_start(); // เริ่มต้น session
    if (isset($_SESSION['success'])) { ?>
        <div style="position: relative;">
            <div class="alert alert-success" id="myAlert" style="position: absolute; top: 0; left: 0; right: 0; z-index: 1;">
                <strong>
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </strong>

            </div>
        </div>
    <?php  } ?>
    <!-- การประกันคุณภาพด้วยตัวชี้วัดของพื้นที่ -->

    <div class="pagetitle">
        <div class="row ">
            <?php switch ($page) {
                case 'sh1':
            ?> <h1>การประกันคุณภาพด้วยตัวชี้วัดของพื้นที่</h1>
                <?php break;
                case 'sh2':
                ?> <h1>ข้อมูลระดับตัวชี้วัด</h1>
                <?php
                    break;
                case 'sh3':
                ?> <h1>ข้อมูลองค์ประกอบตัวชี้วัด</h1>
                <?php
                    break;
                case 'sh4':
                ?> <h1>ข้อมูลองค์ประกอบตัวชี้วัดพื้นที่</h1>
                <?php
                    break;
                    case 'sh5':
                ?> <h1>ข้อมูลผลการประเมินโรงเรียน</h1>
                <?php
                    break;
                default:
                ?>
            <?php
                    break;
            }  ?>

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
                <a href="<?php echo site_url('Fm_evaluation') ?>" style="float: right;" class="btn btn-sm btn-light" data-mdb-ripple-color="dark">การประกันคุณภาพด้วยตัวชี้วัดของพื้นที่</a>
                <h5 style="float: right;"> | </h5>
                <a href="<?php echo site_url('Fm_evaluation/sh2?page=sh2') ?>" style="float: right;" class="btn btn-sm btn-light" data-mdb-ripple-color="dark">ข้อมูลระดับตัวชี้วัด
                </a>
                <h5 style="float: right;"> | </h5>
                <a href="<?php echo site_url('Fm_evaluation/sh3?page=sh3') ?>" style="float: right;" class="btn btn-sm btn-light" data-mdb-ripple-color="dark">ข้อมูลองค์ประกอบตัวชี้วัด
                </a>
                <h5 style="float: right;"> | </h5>
                <a href="<?php echo site_url('Fm_evaluation/sh4?page=sh4') ?>" style="float: right;" class="btn btn-sm btn-light" data-mdb-ripple-color="dark">ข้อมูลองค์ประกอบตัวชี้วัดพื้นที่
                </a>
                <h5 style="float: right;"> | </h5>
                <a href="<?php echo site_url('Fm_evaluation/sh5?page=sh5') ?>" style="float: right;" class="btn btn-sm btn-light" data-mdb-ripple-color="dark">ข้อมูลผลการประเมินโรงเรียน
                </a>
                <h5 style="float: right;"> | </h5>
                <a href="<?php echo site_url('Fm_evaluation/sh6?page=sh6') ?>" style="float: right;" class="btn btn-sm btn-light" data-mdb-ripple-color="dark">ข้อมูลผลการประเมินตามตัวชี้วัด
                </a>
            </div>
        </div>
    </div>

    </div><!-- End Page Title -->
    <?php

    if ($page == '') { ?>

        <div class="col-12">
            <div class="card recent-sales overflow-auto">

                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title">รายละเอียดข้อมูล <span>| Table Student</span></h5>
                        </div>
                        <div class="col">
                            <h5 style="float: right; padding: 15px;" class="card-title"><a href="<?php echo site_url('Fm_evaluation/forms?page=') ?>" class="btn btn-success">เพิ่มข้อมูลการประกันคุณภาพด้วยตัวชี้วัดของพื้นที่</a></h5>
                        </div>
                    </div>
                    <table class="table table-borderless datatable">
                        <thead>

                            <tr>
                                <th style="text-align: center;" scope="col">รหัส</th>
                                <th style="text-align: center;" scope="col">พื้นที่นวัตกรรม</th>
                                <th style="text-align: center;" scope="col">ชื่อเกณฑ์</th>
                                <th style="text-align: center;" scope="col">คำอธิบายเกณฑ์</th>
                                <th style="text-align: center;" scope="col">ดูรายละเอียด</th>
                            </tr>

                        </thead>
                        <tbody>


                            <?php foreach ($query as $s) { ?>
                                <tr>
                                    <th scope="row " style="text-align: center;"><?php echo $s->CRITERIA_ID;   ?></th>
                                    <th scope="row"><?php echo $s->INNOVATION_AREA_CODE;   ?></th>
                                    <td style="text-align: center;"><?php echo $s->CRITERIA_NAME;   ?></td>
                                    <td style="text-align: center;"><?php echo $s->CRITERIA_DESCRIPTION;   ?></td>

                                    <td style="text-align: center;"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal"><i class="bi bi-card-list"></i></button></td>

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>

            </div>
        </div><!-- End Recent Sales -->
    <?php } ?>
    <!-- ข้อมูลองค์ประกอบตัวชี้วัด -->

    </div><!-- End Page Title -->
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : '';
    if ($page == 'sh2') { ?>
        <div class="col-12">
            <div class="card recent-sales overflow-auto">

                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title">รายละเอียดข้อมูล <span>| Table Student</span></h5>
                        </div>
                        <div class="col">
                            <h5 style="float: right; padding: 15px;" class="card-title"><a href="<?php echo site_url('Fm_evaluation/forms?page=sh2') ?>" class="btn btn-success">เพิ่มข้อมูลระดับตัวชี้วัด</a></h5>
                        </div>
                    </div>
                    <table class="table table-borderless datatable">
                        <thead>

                            <tr>
                                <th style="text-align: center;" scope="col">คีย์หลัก</th>
                                <th style="text-align: center;" scope="col">คีย์อ้างอิงข้อมูลตัวขี้วัด</th>
                                <th style="text-align: center;" scope="col">ลำดับของระดับ</th>
                                <th style="text-align: center;" scope="col">หัวข้อระดับ</th>
                                <th style="text-align: center;" scope="col">ดูรายละเอียด</th>
                            </tr>

                        </thead>
                        <tbody>



                            <?php foreach ($query as $s) { ?>
                                <tr>
                                    <th scope="row " style="text-align: center;"><?php echo $s->CRITERIA_LEVEL_ID;   ?></th>
                                    <th scope="row"><?php echo $s->CRITERIA_ID;   ?></th>
                                    <td style="text-align: center;"><?php echo $s->LEVEL_INDEX;   ?></td>
                                    <td style="text-align: center;"><?php echo $s->LEVEL_NAME;   ?></td>

                                    <td style="text-align: center;"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal"><i class="bi bi-card-list"></i></button></td>

                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>

                </div>

            </div>
        </div><!-- End Recent Sales -->
    <?php } ?>
    <!-- ข้อมูลองค์ประกอบตัวชี้วัด -->

    </div><!-- End Page Title -->
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : '';
    if ($page == 'sh3') { ?>
        <div class="col-12">
            <div class="card recent-sales overflow-auto">

                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title">รายละเอียดข้อมูล <span>| Table Student</span></h5>
                        </div>
                        <div class="col">
                            <h5 style="float: right; padding: 15px;" class="card-title"><a href="<?php echo site_url('Fm_evaluation/forms?page=sh3') ?>" class="btn btn-success">เพิ่มข้อมูลข้อมูลองค์ประกอบตัวชี้วัด</a></h5>
                        </div>
                    </div>
                    <table class="table table-borderless datatable">
                        <thead>

                            <tr>
                                <th style="text-align: center;" scope="col">คีย์หลัก</th>
                                <th style="text-align: center;" scope="col">คีย์อ้างอิงข้อมูลตัวชี้วัด</th>
                                <th style="text-align: center;" scope="col">ลำดับองค์ประกอบ</th>
                                <th style="text-align: center;" scope="col">หัวข้อองคnประกอบ</th>
                                <th style="text-align: center;" scope="col">ค่าน้ำหนักการประเมิน</th>
                                <th style="text-align: center;" scope="col">หลักฐานประกอบการประเมิน</th>
                                <th style="text-align: center;" scope="col">ดูรายละเอียด</th>
                            </tr>

                        </thead>
                        <tbody>



                            <?php foreach ($query as $s) { ?>
                                <tr>
                                    <th scope="row " style="text-align: center;"><?php echo $s->CRITERIA_COMPOSITION_ID;   ?></th>
                                    <th scope="row" style="text-align: center;"><?php echo $s->CRITERIA_ID;   ?></th>
                                    <td style="text-align: center;"><?php echo $s->COMPOSITION_INDEX;   ?></td>
                                    <td style="text-align: center;"><?php echo $s->COMPOSITION_NAME;   ?></td>
                                    <td style="text-align: center;"><?php echo $s->COMPOSITION_WEIGHT_SCORE;   ?></td>
                                    <td style="text-align: center;"><?php echo $s->COMPOSITION_GUIDELIINE;   ?></td>

                                    <td style="text-align: center;"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal"><i class="bi bi-card-list"></i></button></td>

                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>

                </div>

            </div>
        </div><!-- End Recent Sales -->
    <?php } ?>
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : '';
    if ($page == 'sh4') { ?>
        <div class="col-12">
            <div class="card recent-sales overflow-auto">

                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title">รายละเอียดข้อมูล <span>| Table Student</span></h5>
                        </div>
                        <div class="col">
                            <h5 style="float: right; padding: 15px;" class="card-title"><a href="<?php echo site_url('Fm_evaluation/forms?page=sh4') ?>" class="btn btn-success">เพิ่มข้อมูลองค์ประกอบตัวชี้วัดพื้นที่</a></h5>
                        </div>
                    </div>
                    <table class="table table-borderless datatable">
                        <thead>

                            <tr>

                                <th style="text-align: center;" scope="col">คีย์อ้างอิงข้อมูสระดับตัวชี้วัต</th>
                                <th style="text-align: center;" scope="col">คีย์อ้างอิงข้อมูล</th>
                                <th style="text-align: center;" scope="col">คำอธิบาย</th>
                                <th style="text-align: center;" scope="col">ดูรายละเอียด</th>
                            </tr>

                        </thead>
                        <tbody>



                            <?php foreach ($query as $s) { ?>
                                <tr>
                                    <th scope="row " style="text-align: center;"><?php echo $s->CRITERIA_COMPOSITION_ID;   ?></th>
                                    <th scope="row" style="text-align: center;"><?php echo $s->CRITERIA_LEVEL_ID;   ?></th>
                                    <td style="text-align: center;"><?php echo $s->COMPOSITION_LEVEL_DESCRIPTION;   ?></td>
                                  

                                    <td style="text-align: center;"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal"><i class="bi bi-card-list"></i></button></td>

                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>

                </div>

            </div>
        </div><!-- End Recent Sales -->
    <?php } ?>
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : '';
    if ($page == 'sh5') { ?>
        <div class="col-12">
            <div class="card recent-sales overflow-auto">

                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title">รายละเอียดข้อมูล <span>| Table Student</span></h5>
                        </div>
                        <div class="col">
                            <h5 style="float: right; padding: 15px;" class="card-title"><a href="<?php echo site_url('Fm_evaluation/forms?page=sh5') ?>" class="btn btn-success">เพิ่มข้อมูลผลการประเมินโรงเรียน</a></h5>
                        </div>
                    </div>
                    <table class="table table-borderless datatable">
                        <thead>

                            <tr>

                                <th style="text-align: center;" scope="col">สถานศึกษา</th>
                                <th style="text-align: center;" scope="col">ชื่อการประเมิน</th>
                                <th style="text-align: center;" scope="col">คำอธิบาย</th>
                                <th style="text-align: center;" scope="col">ดูรายละเอียด</th>
                            </tr>

                        </thead>
                        <tbody>



                            <?php foreach ($query as $s) { ?>
                                <tr>
                                    <th scope="row " style="text-align: center;"><?php echo $s->SCHOOL_ID;   ?></th>
                                    <th scope="row" style="text-align: center;"><?php echo $s->EVALUATION_NAME;   ?></th>
                                    <td style="text-align: center;"><?php echo $s->EVALUATION_DESCRIPTION;   ?></td>
                                  

                                    <td style="text-align: center;"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal"><i class="bi bi-card-list"></i></button></td>

                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>

                </div>

            </div>
        </div><!-- End Recent Sales -->
    <?php } ?>
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : '';
    if ($page == 'sh6') { ?>
        <div class="col-12">
            <div class="card recent-sales overflow-auto">

                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title">รายละเอียดข้อมูล <span>| Table Student</span></h5>
                        </div>
                        <div class="col">
                            <h5 style="float: right; padding: 15px;" class="card-title"><a href="<?php echo site_url('Fm_evaluation/forms?page=sh6') ?>" class="btn btn-success">เพิ่มข้อมูลผลการประเมินตามตัวชี้วัด</a></h5>
                        </div>
                    </div>
                    <table class="table table-borderless datatable">
                        <thead>

                            <tr>

                                <th style="text-align: center;" scope="col">คีย์หลักสำหรับข้อมูลผลการประเมินโรงเรียน</th>
                                <th style="text-align: center;" scope="col">คีย์อ้างอิงข้อมูลตัวชี้วัด</th>
                                <th style="text-align: center;" scope="col">เป็นการประเมินตนเอง</th>
                                <th style="text-align: center;" scope="col">ชื่อผู้ประเมิน</th>
                                <th style="text-align: center;" scope="col">ผลการประเมิน</th>
                                <th style="text-align: center;" scope="col">คีย์อ้างอิงผลการประเมินตามตัวชี้วัด</th>
                                <th style="text-align: center;" scope="col">คีย์อ้างอิงองค์ประกอบตัวชี้วัด</th>
                                <th style="text-align: center;" scope="col">ระดับที่ได้</th>
                                <th style="text-align: center;" scope="col">ดูรายละเอียด</th>
                            </tr>

                        </thead>
                        <tbody>



                            <?php foreach ($query as $s) { ?>
                                <tr>
                                    <th scope="row " style="text-align: center;"><?php echo $s->SCHOOL_EVALUATION_ID;   ?></th>
                                    <th scope="row" style="text-align: center;"><?php echo $s->CRITERIA_ID;   ?></th>
                                    <td style="text-align: center;"><?php echo $s->SELF_EVALUATE_FLAG;   ?></td>
                                    <th scope="row " style="text-align: center;"><?php echo $s->EVALUATOR_NAME;   ?></th>
                                    <th scope="row" style="text-align: center;"><?php echo $s->SCHOOL_EVALUATION_CODE;   ?></th>
                                    <td style="text-align: center;"><?php echo $s->SCHOOL_EVALUATION_CRITERIA_ID;   ?></td>
                                    <th scope="row " style="text-align: center;"><?php echo $s->CRITERIA_COMPOSITION_ID;   ?></th>
                                    <th scope="row" style="text-align: center;"><?php echo $s->LEVEL_INDEX;   ?></th>
                                   
                                  

                                    <td style="text-align: center;"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal"><i class="bi bi-card-list"></i></button></td>

                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>

                </div>

            </div>
        </div><!-- End Recent Sales -->
    <?php } ?>
    <script>
        setTimeout(function() {
            document.getElementById('myAlert').remove();
        }, 5000); // นับถอยหลังให้แสดง 5 วินาที (5000 มิลลิวินาที)
    </script>
</main><!-- End #main -->