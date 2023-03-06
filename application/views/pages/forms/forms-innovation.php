

<main id="main" class="main">   
<?php 
session_start(); // เริ่มต้น session
if (isset( $_SESSION['success'])) { ?>
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
<div class="pagetitle">
        <h1>ข้อมูลนวัตกรรมการศึกษา</h1>
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
                        <h5 class="card-title">ข้อมูลนวัตกรรมการศึกษา</h5>

                        <!-- start Form ข้อมูลนวัตกรรมการศึกษา -->
                        <form action="<?php echo site_url('Forms_innovation/adding'); ?>" method="post">

                            <div class="row mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingName" placeholder="ปีการศึกษา" name="EDUCATION_YEAR">
                                    <label for="floatingName"><?php echo nbs(2); ?> ปีการศึกษา </label>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingName" placeholder="ปีการศึกษา" name="SEMESTER">
                                    <label for="floatingName"><?php echo nbs(2); ?> ภาคเรียน </label>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingName" placeholder="ปีการศึกษา" name="INNOVATION_NAME">
                                    <label for="floatingName"><?php echo nbs(2); ?> ชื่อนวัตกรรม </label>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example" name="INNOVATION_TYPE_CODE">
                                        <option selected>เลือก</option>
                                        <option value="3">นวัตกรรมด้านระบบ รูปแบบ ของการจัดการศึกษา</option>
                                        <option value="4">นวัตกรรมด้านหลักสูตร</option>
                                        <option value="5">นวัตกรรมด้านการเรียนการสอน</option>
                                        <option value="5">นวัตกรรมด้านสื่อและเทคโนโลยีการศึกษา
                                            ทั้งสื่อสิ่งพิมพ์และสื่ออิเล็กทรอนิกส์ รวมถึงแหล่งเรียนรู้ต่างๆ</option>
                                        <option value="5">นวัตกรรมด้านการจัดการชั้นเรียน</option>
                                        <option value="5">นวัตกรรมด้านการบริหารและบริการทางการศึกษา</option>
                                        <option value="5">นวัตกรรมด้านการวัดและประเมินผล</option>
                                        <option value="5">นวัตกรรมด้านการพัฒนาวิชาชีพ การพัฒนาการปฎิบัติงาน
                                            การพัฒนาองค์กร</option>
                                    </select>
                                    <label for="floatingSelect"><?php echo nbs(2); ?>ประเภทนวัตกรรม</label>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here"
                                        id="floatingTextarea2" style="height: 100px" name="ABSTRACT"></textarea>
                                    <label for="floatingTextarea2"><?php echo nbs(2); ?>บทคัดย่อ</label>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingName" placeholder="ปีการศึกษา" name="TEACHER_ID">
                                    <label for="floatingName"><?php echo nbs(2); ?> ครูผู้จัดทำ
                                    </label>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile01">เอกสารแนบ</label>
                                    <input type="file" class="form-control" id="inputGroupFile01" name="ATTACHMENT">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingName" placeholder="ปีการศึกษา" name="SOURCE">
                                    <label for="floatingName"><?php echo nbs(2); ?> แหล่งนวัตกรรม </label>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="Share" placeholder="Share" name="PUBLISH_DATE">
                                        <label for="Share">วันที่เผยแพร่</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingName" placeholder="ปีการศึกษา" name="SEARCH_KEYWORD">
                                    <label for="floatingName"><?php echo nbs(2); ?> คำค้นหา </label>
                                </div>

                            </div>
                            <button class="btn">save</button>
                        </form><!-- End Form ข้อมูลนวัตกรรมการศึกษา -->

                    </div>
                </div>

            </div>


        </div>
    </section>
  
</main><!-- End #main -->