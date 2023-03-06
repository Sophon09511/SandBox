<main id="main" class="main">
    <?php $page = isset($_GET['page']) ? $_GET['page'] : '';  ?>
    <div class="pagetitle">
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
                    case 'sh6':
                    ?> <h1>ข้อมูลผลการประเมินตามตัวชี้วัด</h1>
                    <?php
                        break;
                    default:
                    ?>
                <?php
                        break;
                }  ?>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Form</li>
                        <li class="breadcrumb-item active">Student</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->

            <section class="section">
                <div class="row">
                    <div class="col-lg-9">

                        <div class="card">
                            <div class="card-body">

                                <?php if ($page == '') { ?>


                                    <!-- start Form การประกันคุณภาพด้วยตัวชี้วัดของพื้นที่ -->
                                    <form action="<?php echo site_url('Fm_evaluation/insert_evaluation_criteria'); ?>" method="post">
                                        <h5 class="card-title">การประกันคุณภาพด้วยตัวชี้วัดของพื้นที่</h5>
                                        <div class="row mb-3">
                                            <div class="form-floating">
                                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="INNOVATION_AREA_CODE">
                                                    <option selected>เลือก</option>
                                                    <option value="21">ระยอง</option>
                                                    <option value="33">ศรีสะเกษ</option>
                                                    <option value="50">เชียงใหม่</option>
                                                    <option value="71">กาญจนบุรี</option>
                                                    <option value="91">สตูล</option>
                                                    <option value="94">ปัตตานี</option>
                                                    <option value="95">ยะลา</option>
                                                    <option value="96">นราธิวาส</option>
                                                </select>
                                                <label for="floatingSelect"><?php echo nbs(2); ?>พื้นที่นวัตกรรม</label>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingName" placeholder="ชื่อเกณฑ์" name="CRITERIA_NAME">
                                                <label for="floatingName"><?php echo nbs(2); ?> ชื่อเกณฑ์ </label>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingName" placeholder="คำอธิบายเกณฑ์" name="CRITERIA_DESCRIPTION">
                                                <label for="floatingName"><?php echo nbs(2); ?> คำอธิบายเกณฑ์ </label>
                                            </div>
                                        </div>
                                        <button class="btn">บันทึก</button>
                                    </form><!-- end Form การประกันคุณภาพด้วยตัวชี้วัดของพื้นที่ -->
                                <?php } ?>
                                <?php if ($page == 'sh2') { ?>
                                    <!-- start Form ข้อมูลระดับตัวชี้วัด -->
                                    <form action="<?php echo site_url('Fm_evaluation/insert_evaluation_criteria_level'); ?>" method="post">
                                        <h5 class="card-title">ข้อมูลระดับตัวชี้วัด</h5>


                                        <div class="row mb-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingName" placeholder="คีย์อ้างอิงข้อมูลตัวชี้วัด" name="CRITERIA_ID">
                                                <label for="floatingName"><?php echo nbs(2); ?> คีย์อ้างอิงข้อมูลตัวชี้วัด </label>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingName" placeholder="ลำดับของระดับ" name="LEVEL_INDEX">
                                                <label for="floatingName"><?php echo nbs(2); ?> ลำดับของระดับ </label>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingName" placeholder="หัวข้อระดับ" name="LEVEL_NAME">
                                                <label for="floatingName"><?php echo nbs(2); ?> หัวข้อระดับ </label>
                                            </div>
                                        </div>
                                        <button class="btn">บันทึก</button>
                                    </form><!-- end Form ข้อมูลระดับตัวชี้วัด -->
                                <?php } ?>
                                <?php if ($page == 'sh3') { ?>
                                    <!-- start Form ข้อมูลองค์ประกอบตัวชี้วัด -->
                                    <form action="<?php echo site_url('Fm_evaluation/insert_evaluation_criteria_composition'); ?>" method="post">
                                        <h5 class="card-title">ข้อมูลองค์ประกอบตัวชี้วัด</h5>


                                        <div class="row mb-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingName" placeholder="คีย์อ้างอิงข้อมูลตัวชี้วัด" name="CRITERIA_ID">
                                                <label for="floatingName"><?php echo nbs(2); ?> คีย์อ้างอิงข้อมูลตัวชี้วัด </label>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingName" placeholder="ลำดับองค์ประกอบ" name="COMPOSITION_INDEX">
                                                <label for="floatingName"><?php echo nbs(2); ?> ลำดับองค์ประกอบ </label>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingName" placeholder="หัวข้อองคnประกอบ" name="COMPOSITION_NAME">
                                                <label for="floatingName"><?php echo nbs(2); ?> หัวข้อองคnประกอบ </label>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingName" placeholder="ค่าน้ำหนักการประเมิน" name="COMPOSITION_WEIGHT_SCORE">
                                                <label for="floatingName"><?php echo nbs(2); ?> ค่าน้ำหนักการประเมิน </label>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingName" placeholder="หลักฐานประกอบการประเมิน" name="COMPOSITION_GUIDELIINE">
                                                <label for="floatingName"><?php echo nbs(2); ?> หลักฐานประกอบการประเมิน </label>
                                            </div>
                                        </div>
                                        <button class="btn">บันทึก</button>
                                    </form><!-- end Form ข้อมูลองค์ประกอบตัวชี้วัด -->
                                <?php } ?>
                                <?php if ($page == 'sh4') { ?>
                                    <!-- start Form ข้อมูลองค์ประกอบตัวชี้วัดพื้นที่ -->
                                    <form action="<?php echo site_url('Fm_evaluation/insert_evaluation_criteria_composition_level'); ?>" method="post">
                                        <h5 class="card-title">ข้อมูลองค์ประกอบตัวชี้วัดพื้นที่</h5>

                                        <div class="row mb-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingName" placeholder="คีย์อ้างอิงข้อมูลตัวชี้วัด" name="CRITERIA_COMPOSITION_ID">
                                                <label for="floatingName"><?php echo nbs(2); ?> คีย์อ้างอิงข้อมูลตัวชี้วัด </label>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingName" placeholder="คีย์อ้างอิงข้อมูล" name="CRITERIA_LEVEL_ID">
                                                <label for="floatingName"><?php echo nbs(2); ?> คีย์อ้างอิงข้อมูล </label>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingName" placeholder="คำอธิบาย" name="COMPOSITION_LEVEL_DESCRIPTION">
                                                <label for="floatingName"><?php echo nbs(2); ?> คำอธิบาย </label>
                                            </div>
                                        </div>
                                        <button class="btn">บันทึก</button>
                                    </form><!-- end Form ข้อมูลองค์ประกอบตัวชี้วัดพื้นที่ -->
                                <?php } ?>
                                <?php if ($page == 'sh5') { ?>
                                    <!-- start Form ข้อมูลผลการประเมินโรงเรียน -->
                                    <form action="<?php echo site_url('Fm_evaluation/insert_school_evaluation'); ?>" method="post">
                                        <h5 class="card-title">ข้อมูลผลการประเมินโรงเรียน</h5>

                                        <div class="row mb-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingName" placeholder="สถานศึกษา" name="SCHOOL_ID">
                                                <label for="floatingName"><?php echo nbs(2); ?> สถานศึกษา </label>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingName" placeholder="ชื่อการประเมิน" name="EVALUATION_NAME">
                                                <label for="floatingName"><?php echo nbs(2); ?> ชื่อการประเมิน </label>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingName" placeholder="คำอธิบาย" name="EVALUATION_DESCRIPTION">
                                                <label for="floatingName"><?php echo nbs(2); ?> คำอธิบาย </label>
                                            </div>
                                        </div>
                                        <button class="btn">บันทึก</button>
                                    </form><!-- end Form ข้อมูลผลการประเมินโรงเรียน -->
                                <?php } ?>
                                <?php if ($page == 'sh6') { ?>
                                    <!-- start Form ข้อมูลผลการประเมินตามตัวชี้วัด -->
                                    <form action="<?php echo site_url('Fm_evaluation/insert_sec_and_secl'); ?>" method="post">
                                        <h5 class="card-title">ข้อมูลผลการประเมินตามตัวชี้วัด</h5>

                                        <div class="row mb-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingName" placeholder="คีย์หลักสำหรับข้อมูลผลการประเมินโรงเรียน" name="SCHOOL_EVALUATION_ID">
                                                <label for="floatingName"><?php echo nbs(2); ?>
                                                    คีย์หลักสำหรับข้อมูลผลการประเมินโรงเรียน </label>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingName" placeholder="คีย์อ้างอิงข้อมูลตัวชี้วัด" name="CRITERIA_ID">
                                                <label for="floatingName"><?php echo nbs(2); ?> คีย์อ้างอิงข้อมูลตัวชี้วัด </label>
                                            </div>
                                        </div>

                                        <fieldset class="row mb-3" name="SELF_EVALUATE_FLAG">
                                            <legend class="col-form-label ">เป็นการประเมินตนเอง</legend>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="SELF_EVALUATE_FLAG" id="gridRadios1" value="0">
                                                    <label class="form-check-label" for="gridRadios1">
                                                        เป็นการประเมินโดยกรรมการ
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="SELF_EVALUATE_FLAG" id="gridRadios2" value="1">
                                                    <label class="form-check-label" for="gridRadios2">
                                                        เป็นการประเมินตนเองโดยสถานศึกษา
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <div class="row mb-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingName" placeholder="ชื่อผู้ประเมิน" name="EVALUATOR_NAME">
                                                <label for="floatingName"><?php echo nbs(2); ?> ชื่อผู้ประเมิน </label>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="form-floating">
                                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="SCHOOL_EVALUATION_CODE">
                                                    <option selected>เลือก</option>
                                                    <option value="1">ต้องปรับปรุง</option>
                                                    <option value="2">พอใช้</option>
                                                    <option value="3">ดี</option>
                                                    <option value="4">ดีมาก</option>
                                                    <option value="5">ดีเด่น</option>
                                                </select>
                                                <label for="floatingSelect"><?php echo nbs(2); ?>ผลการประเมิน</label>
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingName" placeholder="คีย์อ้างอิงผลการประเมินตามตัวชี้วัด" name="SCHOOL_EVALUATION_CRITERIA_ID">
                                                <label for="floatingName"><?php echo nbs(2); ?> คีย์อ้างอิงผลการประเมินตามตัวชี้วัด
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingName" placeholder="คีย์อ้างอิงองค์ประกอบตัวชี้วัด" name="CRITERIA_COMPOSITION_ID">
                                                <label for="floatingName"><?php echo nbs(2); ?> คีย์อ้างอิงองค์ประกอบตัวชี้วัด
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingName" placeholder="ระดับที่ได้" name="LEVEL_INDEX">
                                                <label for="floatingName"><?php echo nbs(2); ?> ระดับที่ได้ </label>
                                            </div>
                                        </div>
                                        <button class="btn">บันทึก</button>
                                    </form><!-- end Form ข้อมูลผลการประเมินตามตัวชี้วัด -->
                                <?php } ?>
                            </div>
                        </div>

                    </div>


                </div>
            </section>

</main><!-- End #main -->