<main id="main" class="main">

<div class="pagetitle">
        <div class="row "> <h1>ข้อมูลอำนาจและหน้าที่ของคณะกรรมการขับเคลื่อนพื้นที่นวัตกรรมการศึกษาด้านต่าง</h1>
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

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body col-lg-12">
        
            <?php

            $page = isset($_GET['page']) ? $_GET['page'] : '';
            
            if ($page == '231241') { 
             
              ?>

              <h5 class="card-title fs-5">ข้อมูลอำนาจและหน้าที่ของคณะกรรมการขับเคลื่อนพื้นที่นวัตกรรมการศึกษาด้านต่าง ๆ</h5>

              <!-- start Form ข้อมูลอำนาจและหน้าที่ของคณะกรรมการขับเคลื่อนพื้นที่นวัตกรรมการศึกษาด้านต่าง ๆ -->
              <form action="<?php echo site_url('Fm_committee/adding'); ?>" method="post">

                <div class="row mb-3">
                  <div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="PROVINCE_CODE">
                      <option selected>เลือก</option>
                      <option value="10">กรุงเทพมหานคร</option>
                      <option value="11">สมุทรปราการ</option>
                      <option value="12">นนทบุรี</option>
                      <option value="13">ปทุมธานี</option>
                      <option value="14">พระนครศรีอยุธยา</option>
                      <option value="15">อ่างทอง</option>
                      <option value="16">ลพบุรี</option>
                      <option value="17">สิงห์บุรี</option>
                      <option value="18">ชัยนาท</option>
                      <option value="19">สระบุรี</option>
                      <option value="20">ชลบุรี</option>
                      <option value="21">ระยอง</option>
                      <option value="22">จันทบุรี</option>
                      <option value="23">ตราด</option>
                      <option value="24">ฉะเชิงเทรา</option>
                      <option value="25">ปราจีนบุรี</option>
                      <option value="26">นครนายก</option>
                      <option value="27">สระแก้ว</option>
                      <option value="30">นครราชสีมา</option>
                      <option value="31">บุรีรัมย์</option>
                      <option value="32">สุรินทร์</option>
                      <option value="33">ศรีสะเกษ</option>
                      <option value="34">อุบลราชธานี</option>
                      <option value="35">ยโสธร</option>
                      <option value="36">ชัยภูมิ</option>
                      <option value="37">อำนาจเจริญ</option>
                      <option value="38">บึงกาฬ</option>
                      <option value="39">หนองบัวลำภู</option>
                      <option value="40">ขอนแก่น</option>
                      <option value="41">อุดรธานี</option>
                      <option value="42">เลย</option>
                      <option value="43">หนองคาย</option>
                      <option value="44">มหาสารคาม</option>
                      <option value="45">ร้อยเอ็ด</option>
                      <option value="46">กาฬสินธุ์</option>
                      <option value="47">สกลนคร</option>
                      <option value="48">นครพนม</option>
                      <option value="49">มุกดาหาร</option>
                      <option value="50">เชียงใหม่</option>
                      <option value="51">ลำพูน</option>
                      <option value="52">ลำปาง</option>
                      <option value="53">อุตรดิตถ์</option>
                      <option value="54">แพร่</option>
                      <option value="55">น่าน</option>
                      <option value="56">พะเยา</option>
                      <option value="57">เชียงราย</option>
                      <option value="58">แม่ฮ่องสอน</option>
                      <option value="60">นครสวรรค์</option>
                      <option value="61">อุทัยธานี</option>
                      <option value="62">กำแพงเพชร</option>
                      <option value="63">ตาก</option>
                      <option value="64">สุโขทัย</option>
                      <option value="65">พิษณุโลก</option>
                      <option value="66">พิจิตร</option>
                      <option value="67">เพชรบูรณ์</option>
                      <option value="70">ราชบุรี</option>
                      <option value="71">กาญจนบุรี</option>
                      <option value="72">สุพรรณบุรี</option>
                      <option value="73">นครปฐม</option>
                      <option value="74">สมุทรสาคร</option>
                      <option value="75">สมุทรสงคราม</option>
                      <option value="76">เพชรบุรี</option>
                      <option value="77">ประจวบคีรีขันธ์</option>
                      <option value="80">นครศรีธรรมราช</option>
                      <option value="81">กระบี่</option>
                      <option value="82">พังงา</option>
                      <option value="83">ภูเก็ต</option>
                      <option value="84">สุราษฎร์ธานี</option>
                      <option value="85">ระนอง</option>
                      <option value="86">ชุมพร</option>
                      <option value="90">สงขลา</option>
                      <option value="91">สตูล</option>
                      <option value="92">ตรัง</option>
                      <option value="93">พัทลุง</option>
                      <option value="94">ปัตตานี</option>
                      <option value="95">ยะลา</option>
                      <option value="96">นราธิวาส</option>
                    </select>
                    <label for="floatingSelect"><?php echo nbs(2); ?>จังหวัด</label>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="ปีการศึกษา" name="APPOINTMENT_NO">
                    <label for="floatingName"><?php echo nbs(2); ?> คำสั่ง </label>
                  </div>
                </div>

                <div class="row mb-2">
                  <div class="input-group mb-2">
                    <label class="input-group-text" for="inputGroupFile01">เอกสาร</label>
                    <input type="file" class="form-control" id="inputGroupFile01" name="APPOINTMENT_ATTACHMENT">
                  </div>
                </div>
                <button class="btn">save</button>
              </form> <!-- end Form ข้อมูลอำนาจและหน้าที่ของคณะกรรมการขับเคลื่อนพื้นที่นวัตกรรมการศึกษาด้านต่าง ๆ -->
            <?php
            } ?>
            <?php

            if ($page == '231242') { ?>
              <!-- start Form ข้อมูลรายชื่อคณะกรรมการ -->
              <form action="<?php echo site_url('Fm_committee/adding_member'); ?>" method="post">
              <h5 class="card-title ">ข้อมูลรายชื่อคณะกรรมการ</h5>
              <div class="row mb-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="คีย์อ้างอิงคณะกรรมการ" name="COMMITTEE_ID">
                    <label for="floatingName"><?php echo nbs(2); ?> คีย์อ้างอิงคณะกรรมการ </label>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="PREFIX_CODE">
                      <option selected>เลือก</option>
                      <option value="3">นาย</option>
                      <option value="4">นางสาว</option>
                      <option value="5">นาง</option>
                    </select>
                    <label for="floatingSelect"><?php echo nbs(2); ?>คำนำหน้าชื่อ</label>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="ชื่อ" name="NAME_TH">
                    <label for="floatingName"><?php echo nbs(2); ?> ชื่อ </label>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="ชื่อกลาง" name="MIDDLE_NAME_TH">
                    <label for="floatingName"><?php echo nbs(2); ?> ชื่อกลาง </label>
                  </div>
                </div> 
                 <div class="row mb-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="นามสกุล" name="LAST_NAME_TH">
                    <label for="floatingName"><?php echo nbs(2); ?> นามสกุล </label>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="ชื่อ(ภาษาอังกฤษ)" name="NAME_EN">
                    <label for="floatingName"><?php echo nbs(2); ?> ชื่อ(ภาษาอังกฤษ) </label>
                  </div>
                </div>
                
                <div class="row mb-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="ชื่อกลาง(ภาษาอังกฤษ)" name="MIDDLE_NAME_EN">
                    <label for="floatingName"><?php echo nbs(2); ?> ชื่อกลาง(ภาษาอังกฤษ) </label>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="นามสกุล(ภาษาอังกฤษ)" name="LAST_NAME_EN">
                    <label for="floatingName"><?php echo nbs(2); ?>นามสกุล(ภาษาอังกฤษ) </label>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="INNOVATION_COMMITTEE_POSITION_CODE">
                      <option selected>เลือก</option>
                      <option value="01">ประธาน</option>
                      <option value="02">รองประธาน</option>
                      <option value="03">เลขนุการ</option>
                      <option value="04">ผู้ช่วยเลขานุการ</option>
                      <option value="11">ประธานกรรมการ</option>
                      <option value="12">รองประธานกรรการ</option>
                      <option value="13">กรรมการ</option>
                      <option value="14">กรรมการและเลขานุการคณะอนุกรรมการ</option>
                      <option value="21">ประธานอนุกรรมการ</option>
                      <option value="22">รองประธานอนุกรรมการ</option>
                      <option value="23">อนุกรรมการ</option>
                      <option value="24">อนุกรรมการและเลขานุการ</option>
                      <option value="25">อนุกรรมการและผู้ช่วยเลขานุการ</option>
                    </select>
                    <label for="floatingSelect"><?php echo nbs(2); ?>ประเภทนวัตกรรม</label>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-md-12">
                    <div class="form-floating">
                      <input type="date" class="form-control" id="Share" placeholder="Share" name="TERM_START_DATE">
                      <label for="Share">เริ่มวาระการดำรงตำแหน่ง</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-md-12">
                    <div class="form-floating">
                      <input type="date" class="form-control" id="Share" placeholder="Share" name="TERM_END_DATE">
                      <label for="Share">สิ้นสุดวาระการดำรงตำแหน่ง</label>
                    </div>
                  </div>
                </div>
                <button class="btn">save</button>
              </form><!-- end Form ข้อมูลรายชื่อคณะกรรมการ -->


            
<?php
           } ?>
              
           
          </div> <!--สุดขอบการ์ด -->
        </div>

      </div>


    </div>
  </section>

</main><!-- End #main -->