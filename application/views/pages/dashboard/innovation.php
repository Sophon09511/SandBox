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
    <div class="pagetitle">
        <div class="row ">
            
            <h1>ข้อมูลนวัตกรรมการศึกษา</h1>
            
            <div class="col-3">

                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="main">Home</a></li>
                        <li class="breadcrumb-item">Form</li>
                        <li class="breadcrumb-item active">Student</li>
                    </ol>
                </nav>
            </div>

        </div>
    </div>

    </div><!-- End Page Title -->




    <div class="col-12">
        <div class="card recent-sales overflow-auto">

            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title">รายละเอียดข้อมูล <span>| Table Student</span></h5>
                    </div>
                    <div class="col">
                        <h5 style="float: right; padding: 15px;" class="card-title"><a href="<?php echo site_url('Fm_innovation/forms') ?>"
                                class="btn btn-success">เพิ่มข้อมูลข้อมูลนวัตกรรมการศึกษา
</a></h5>
                    </div>
                </div>
                <table class="table table-borderless datatable">
                    <thead>
                       
                        <tr>
                        <th style="text-align: center;" scope="col">ปีการศึกษา</th>
                            <th style="text-align: center;" scope="col">ภาคเรียน</th>
                            <th style="text-align: center;" scope="col">ชื่อนวัตกรรม</th>
                            <th style="text-align: center;" scope="col">ประเภทนวัตกรรม</th>
                            <th style="text-align: center;" scope="col">บทคัดย่อ</th>
                            <th style="text-align: center;" scope="col">ครูผู้จัดทำ</th>
                            <th style="text-align: center;" scope="col">เอกสารแนบ</th>
                            <th style="text-align: center;" scope="col">แหล่งนวัตกรรม</th>
                            <th style="text-align: center;" scope="col">วันที่เผยแพร่</th>
                            <th style="text-align: center;" scope="col">คำค้นห้า</th>
                            <th style="text-align: center;" scope="col">ดูรายละเอียด</th>
                        </tr>
                      
                    </thead>
                    <tbody>
                    <?php foreach ($query as $show ) {
                            # code...
                        ?>
                        <tr>
                            <th scope="row " style="text-align: center;"><?php echo $show->EDUCATION_YEAR; ?></th>
                            <th scope="row"><?php echo $show->SEMESTER; ?></th>
                            <td style="text-align: center;"><?php echo $show->INNOVATION_NAME; ?>
                            <td style="text-align: center;"><?php echo $show->INNOVATION_TYPE_CODE; ?>
                            <th scope="row"><?php echo $show->ABSTRACT; ?></th>
                            <td style="text-align: center;"><?php echo $show->TEACHER_ID; ?>
                            <td style="text-align: center;"><?php echo $show->ATTACHMENT; ?>
                            <th scope="row"><?php echo $show->SOURCE; ?></th>
                            <td style="text-align: center;"><?php echo $show->PUBLISH_DATE; ?>
                            <td style="text-align: center;"><?php echo $show->SEARCH_KEYWORD; ?>

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


<script>
  setTimeout(function() {
    document.getElementById('myAlert').remove();
  }, 5000); // นับถอยหลังให้แสดง 5 วินาที (5000 มิลลิวินาที)
</script>
</main><!-- End #main -->