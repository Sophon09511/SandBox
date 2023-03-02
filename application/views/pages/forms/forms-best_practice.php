<main id="main" class="main">

  <div class="pagetitle">
    <h1>ข้อมูลแนวปฏิบัติที่เป็นเลิศในการจัดการศึกษา</h1>
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
            <h5 class="card-title">ข้อมูลแนวปฏิบัติที่เป็นเลิศในการจักดการศึกษา</h5>

            <!-- start Form ข้อมูลแนวปฏิบัติที่เป็นเลิศในการจัดการศึกษา -->
            <form action="<?php echo site_url('Fm_best_practice/adding'); ?>" method="post">

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
                  <input type="text" class="form-control" id="floatingName" placeholder="ชื่อแนวทางปฎิบัติ" name="NAME">
                  <label for="floatingName"><?php echo nbs(2); ?> ชื่อแนวทางปฎิบัติ</label>
                </div>
              </div>
              <div class="row mb-3">
                <div class="form-floating">
                  <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="BEST_PRATICE_TYPE_CODE">
                    <option selected>เลือก</option>
                    <option value="01">แผนการสอน</option>
                    <option value="02">สื่อการสอน</option>
                    <option value="03">นวัตกรรม</option>
                    <option value="04">การศึกษา/อบรม</option>
                    <option value="05">กิจกรรม</option>
                    <option value="06">แนวคิด</option>
                    <option value="07">วิธีการ</option>
                    <option value="08">กระบวนการ</option>
                  </select>
                  <label for="floatingSelect"><?php echo nbs(2); ?>ประเภทแนวทางปฎิบัติ</label>
                </div>
              </div>

              <div class="row mb-3">
                <div class="form-floating">
                  <input type="text" class="form-control" id="floatingName" placeholder="ครูผู้จัดทำ" name="TEACHER_ID">
                  <label for="floatingName"><?php echo nbs(2); ?> ครูผู้จัดทำ</label>
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
                  <input type="text" class="form-control" id="floatingName" placeholder="คำค้นหา" name="SEARCH_KEYWORD">
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
                  <input type="text" class="form-control" id="floatingName" placeholder="วิธีการปฏิบัติ" name="PRACTICE_PROCESS">
                  <label for="floatingName"><?php echo nbs(2); ?> วิธีการปฏิบัติ</label>
                </div>
              </div>

              <div class="row mb-3">
                <div class="form-floating">
                  <input type="text" class="form-control" id="floatingName" placeholder="แหล่งการเรียนรู้" name="SOURCE">
                  <label for="floatingName"><?php echo nbs(2); ?> แหล่งการเรียนรู้</label>
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
            </form><!-- ข้อมูลแนวปฏิบัติที่เป็นเลิศในการจัดการศึกษา -->

          </div>
        </div>

      </div>

    </div>
  </section>

</main><!-- End #main -->