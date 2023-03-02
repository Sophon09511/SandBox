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
    <h1>ข้อมูลเทคโนโลยี และสื่อการเรียนรู้</h1>
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
            <h5 class="card-title">ข้อมูลเทคโนโลยี และสื่อการเรียนรู้</h5>

            <!-- start Form ข้อมูลเทคโนโลยี และสื่อการเรียนรู้ -->
            <form action="<?php echo site_url('Fm_lear_tech_media/adding'); ?>" method="post">

              <div class="row mb-3">
                <div class="form-floating">
                  <input type="text" class="form-control" id="floatingName" placeholder="ปีการศึกษา" name="EDUCATION_YEAR">
                  <label for="floatingName"><?php echo nbs(2); ?> ปีการศึกษา</label>
                </div>
              </div>

              <div class="row mb-3">
                <div class="form-floating">
                  <input type="text" class="form-control" id="floatingName" placeholder="ภาคเรียน" name="SEMESTER">
                  <label for="floatingName"><?php echo nbs(2); ?> ภาคเรียน</label>
                </div>
              </div>

              <div class="row mb-3">
                <div class="form-floating">
                  <input type="text" class="form-control" id="floatingName" placeholder="ชื่อการเรียนรู้" name="NAME">
                  <label for="floatingName"><?php echo nbs(2); ?> ชื่อการเรียนรู้</label>
                </div>
              </div>

              <div class="row mb-3">
                <div class="form-floating">
                  <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="MEDIA_TYPE_CODE">
                    <option selected>เลือก</option>
                    <option value="01">สื่อประเภทวัสดุ</option>
                    <option value="02">สื่อประเภทอุปกรณ์</option>
                    <option value="03">สื่อประเภทเทคนิคหรือวิธีการ</option>
                    <option value="04">สื่อประเภทคอมพิวเตอร์</option>
                    <option value="05">สื่อกิจกรรม</option>
                    <option value="06">แหล่งเรียนรู้</option>
                    <option value="07">บุคคล</option>
                  </select>
                  <label for="floatingSelect"><?php echo nbs(2); ?>ประเภทสื่อการเรียนรู้</label>
                </div>
              </div>

              <div class="row mb-3">
                <div class="form-floating">
                  <input type="text" class="form-control" id="floatingName" placeholder="ผู้จัดทำ" name="ORGANIZER_NAME">
                  <label for="floatingName"><?php echo nbs(2); ?> ผู้จัดทำ</label>
                </div>
              </div>

              <div class="row mb-3">
                <div class="form-floating">
                  <input type="text" class="form-control" id="floatingName" placeholder="แหล่งที่มา" name="ORGANIZER_ORGANIZATION">
                  <label for="floatingName"><?php echo nbs(2); ?> แหล่งที่มา</label>
                </div>
              </div>

              <div class="row mb-3">
                <div class="form-floating">
                  <input type="text" class="form-control" id="floatingName" placeholder="ผู้เผยแพร่" name="TEACHER_ID">
                  <label for="floatingName"><?php echo nbs(2); ?> ผู้เผยแพร่</label>
                </div>
              </div>

              <div class="row mb-3">
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="ABSTRACT"></textarea>
                  <label for="floatingTextarea2"><?php echo nbs(2); ?>บทคัดย่อ</label>
                </div>
              </div>

              <div class="row mb-3">

                <div class="form-floating">
                  <input type="text" class="form-control" id="floatingName" placeholder="คำค้นหา" name="SEARCH_KEYBOARD">
                  <label for="floatingName"><?php echo nbs(2); ?> คำค้นหา </label>
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
                  <input type="text" class="form-control" id="floatingName" placeholder="แหล่งการเรียนรู้" name="SOURCE">
                  <label for="floatingName"><?php echo nbs(2); ?> แหล่งการเรียนรู้ </label>
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
            <button class="btn">save</button>
            </form><!-- End Form ข้อมูลเทคโนโลยี และสื่อการเรียนรู้ -->

          </div>
        </div>

      </div>


    </div>
  </section>
  <script>
  setTimeout(function() {
    document.getElementById('myAlert').remove();
  }, 2000); // นับถอยหลังให้แสดง 5 วินาที (5000 มิลลิวินาที)
</script>
</main><!-- End #main -->