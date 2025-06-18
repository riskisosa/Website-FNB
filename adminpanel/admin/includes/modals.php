<!-- Modal For Add Course -->
<div class="modal fade" id="modalForAddCourse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form class="refreshFrm" id="addCourseFrm" method="post">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan Mata Kuliah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group">
            <label>Mata Kuliah</label>
            <input type="" name="course_name" id="course_name" class="form-control" placeholder="Masukkan Mata Kuliah" required="" autocomplete="off">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Tambahkan</button>
      </div>
    </div>
   </form>
  </div>
</div>


<!-- Modal For Update Course -->
<div class="modal fade myModal" id="updateCourse-<?php echo $selCourseRow['cou_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
     <form class="refreshFrm" id="addCourseFrm" method="post" >
       <div class="modal-content myModal-content" >
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update ( <?php echo $selCourseRow['cou_name']; ?> )</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
            <div class="form-group">
              <label>Course</label>
              <input type="" name="course_name" id="course_name" class="form-control" value="<?php echo $selCourseRow['cou_name']; ?>">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update Now</button>
        </div>
      </div>
     </form>
    </div>
  </div>


<!-- Modal For Add Exam -->
<div class="modal fade" id="modalForExam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form class="refreshFrm" id="addExamFrm" method="post">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan Ujian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group">
            <label>Pilih Mata Kuliah</label>
            <select class="form-control" name="courseSelected">
              <option value="0">Pilih Matkul</option>
              <?php 
                $selCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id DESC");
                if($selCourse->rowCount() > 0)
                {
                  while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                     <option value="<?php echo $selCourseRow['cou_id']; ?>"><?php echo $selCourseRow['cou_name']; ?></option>
                  <?php }
                }
                else
                { ?>
                  <option value="0">Mata Kuliah Tidak Ditemukan</option>
                <?php }
               ?>
            </select>
          </div>

          <div class="form-group">
            <label>Batas Waktu Ujian</label>
            <select class="form-control" name="timeLimit" required="">
              <option value="0">Pilih Waktu</option>
              <option value="10">10 Menit</option> 
              <option value="20">20 Menit</option> 
              <option value="30">30 Menit</option> 
              <option value="40">40 Menit</option> 
              <option value="50">50 Menit</option> 
              <option value="60">60 Menit</option> 
            </select>
          </div>

          <div class="form-group">
            <label>Batas Pertanyaan Ditampilkan</label>
            <input type="number" name="examQuestDipLimit" id="" class="form-control" placeholder="Masukkan Batas Pertanyaan DItampilkan">
          </div>

          <div class="form-group">
            <label>Judul Ujian</label>
            <input type="" name="examTitle" class="form-control" placeholder="Masukkan Judul Ujian" required="">
          </div>

          <div class="form-group">
            <label>Deskripsi Ujian</label>
            <textarea name="examDesc" class="form-control" rows="4" placeholder="Masukkan Deskripsi Ujian" required=""></textarea>
          </div>


        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Tambahkan</button>
      </div>
    </div>
   </form>
  </div>
</div>


<!-- Modal For Add Examinee -->
<div class="modal fade" id="modalForAddExaminee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form class="refreshFrm" id="addExamineeFrm" method="post">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan Peserta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="" name="fullname" id="fullname" class="form-control" placeholder="Masukkan Nama Lengkap" autocomplete="off" required="">
          </div>
          <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="bdate" id="bdate" class="form-control" placeholder="Masukkan Tanggal Lahir" autocomplete="off" >
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label>
            <select class="form-control" name="gender" id="gender">
              <option value="0">Pilih Kelamin</option>
              <option value="male">Laki-Laki</option>
              <option value="female">Perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <label>Mata Kuliah</label>
            <select class="form-control" name="course" id="course">
              <option value="0">Pilih Mata Kuliah</option>
              <?php 
                $selCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id asc");
                while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                  <option value="<?php echo $selCourseRow['cou_id']; ?>"><?php echo $selCourseRow['cou_name']; ?></option>
                <?php }
               ?>
            </select>
          </div>
          <div class="form-group">
            <label>Gelar</label>
            <select class="form-control" name="year_level" id="year_level">
              <option value="0">Pilih Gelar</option>
              <option value="first year">D3</option>
              <option value="second year">S1</option>
              <option value="third year">S2</option>
              <option value="fourth year">S3</option>
            </select>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email" autocomplete="off" required="">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" autocomplete="off" required="">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Tambahkan</button>
      </div>
    </div>
   </form>
  </div>
</div>



<!-- Modal For Add Question -->
<div class="modal fade" id="modalForAddQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form class="refreshFrm" id="addQuestionFrm" method="post">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan Pertanyaan Untuk <br><?php echo $selExamRow['ex_title']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="refreshFrm" method="post" id="addQuestionFrm">
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group">
            <label>Pertanyaan</label>
            <input type="hidden" name="examId" value="<?php echo $exId; ?>">
            <input type="" name="question" id="course_name" class="form-control" placeholder="Masukkan Pertanyaan" autocomplete="off">
          </div>

          <fieldset>
            <legend>Masukkan Kalimat Pilihan Ganda</legend>
            <div class="form-group">
                <label>Jawaban A</label>
                <input type="" name="choice_A" id="choice_A" class="form-control" placeholder="Masukkan Jawaban A" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Jawaban B</label>
                <input type="" name="choice_B" id="choice_B" class="form-control" placeholder="Masukkan Jawaban B" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Jawaban C</label>
                <input type="" name="choice_C" id="choice_C" class="form-control" placeholder="Masukkan Jawaban C" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Jawaban D</label>
                <input type="" name="choice_D" id="choice_D" class="form-control" placeholder="Masukkan Jawaban D" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Jawaban Benar</label>
                <input type="" name="correctAnswer" id="" class="form-control" placeholder="Masukkan Jawaban Benar" autocomplete="off">
            </div>
          </fieldset>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Tambahkan</button>
      </div>
      </form>
    </div>
   </form>
  </div>
</div>