<?php
  include 'element.php';
  $i=0;
  $oot=$ot='';
  if(isset($_POST['i']))$i=$_POST['i'];
  if($i==1){
    $s1=$conn->prepare('SELECT * FROM appointments WHERE status=:d1 AND active=:d2 ORDER BY id DESC');
    $s1->execute(['d1'=>1,'d2'=>1]);
    while($r1=$s1->fetch()){
      $ot.='
        <tr>
          <td>'.$r1['department'].'</td>
          <td>'.$r1['doctor'].'</td>
          <td>'.$r1['name'].'</td>
          <td>'.$r1['mobile'].'</td>
          <td>'.$r1['date'].'</td>
          <td>'.$r1['time'].'</td>
          <td>
            <div class="form-button-action">
              <button type="button" data-toggle="tooltip" data-id="'.$r1['id'].'" class="btnedit btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                <i class="fa fa-edit"></i>
              </button>
              <button type="button" data-toggle="tooltip" data-id="'.$r1['id'].'" class="d-none btndelete btn btn-link btn-danger" data-original-title="Remove">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </td>
        </tr>
      ';
    }
    $oot='
      <div class="card-header">
        <div class="d-flex align-items-center">
          <h4 class="card-title">Appointments</h4>
          <button class="d-none btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
            <i class="fa fa-plus"></i>
            Add an Appointment
          </button>
        </div>
      </div>
      <div class="card-body">
        <!-- Modal -->
        <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header no-bd">
                <h5 class="modal-title">
                  <span class="fw-mediumbold">
                  New</span> 
                  <span class="fw-light">
                    Appointment
                  </span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form class="addappointment">
              <div class="modal-body">
                <p class="small">Create a new appointment using this form, make sure you fill them all.</p>
                  <div class="row">
                    <div class="col-sm-6 pr-0">
                      <div class="form-group form-group-default">
                        <label>Department</label>
                        <select class="form-control form-control-sm" name="department">
                          <option selected>Choose Department</option>
                          <option value="General">General</option>
                          <option value="Dental">Dental</option>
                          <option value="Cardiologist">Cardiologist</option>
                          <option value="Psycologist">Psycologist</option>
                          <option value="Other">Other</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group form-group-default">
                        <label for="smallSelect">Doctor</label>
                        <select class="form-control form-control-sm" name="doctor">
                          <option selected>Select Doctor</option>
                          <option value="Dr. Palitha">Dr. Palitha</option>
                          <option value="Dr. Bandara">Dr. Bandara</option>
                          <option value="Dr. Kalam">Dr. Kalam</option>
                          <option value="Dr. Amila">Dr. Amila</option>
                          <option value="Dr. Gayan">Dr. Gayan</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 pr-0">
                      <div class="form-group form-group-default">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="fill name" name="name">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group form-group-default">
                        <label>Mobile</label>
                        <input type="number" class="form-control" placeholder="fill mobile" name="mobile">
                      </div>
                    </div>
                    <div class="col-md-6 pr-0">
                      <div class="form-group form-group-default">
                        <label>Date</label>
                        <input type="date" class="form-control" value="'.date('Y-m-d').'" name="date">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group form-group-default">
                        <label>Time</label>
                        <input type="time" class="form-control" value="'.date('H:i').'" name="time">
                      </div>
                    </div>
                  </div>
                <!-- </form> -->
                </div>
                <div class="modal-footer no-bd">
                  <button type="submit" class="submitapp btn btn-primary">Add</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table id="tbl-app" class="display table table-striped table-hover" >
            <thead>
              <tr>
                <th>Department</th>
                <th>Doctor</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Date</th>
                <th>Time</th>
                <th style="width: 10%">Action</th>
              </tr>
            </thead>
            <tbody>
              '.$ot.'
            </tbody>
          </table>
        </div>
      </div>
    ';
  }elseif($i==2){
    $id=$_POST['id'];
    $s1=$conn->prepare('SELECT * FROM appointments WHERE id=:d1');
    $s1->execute(['d1'=>$id]);
    while($r1=$s1->fetch()){
      $ot.='
        <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header no-bd">
                <h5 class="modal-title">
                  <span class="fw-mediumbold">
                  New</span> 
                  <span class="fw-light">
                    Appointment
                  </span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form class="editappointment">
              <div class="modal-body">
                <p class="small">Create a new appointment using this form, make sure you fill them all.</p>
                  <div class="row">
                    <div class="col-sm-6 pr-0">
                      <div class="form-group form-group-default">
                        <label>Department</label>
                        <select class="form-control form-control-sm" id="form_edit_department" name="department">
                          <option selected>Choose Department</option>
                          <option value="General">General</option>
                          <option value="Dental">Dental</option>
                          <option value="Cardiologist">Cardiologist</option>
                          <option value="Psycologist">Psycologist</option>
                          <option value="Other">Other</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group form-group-default">
                        <label for="smallSelect">Doctor</label>
                        <select class="form-control form-control-sm" id="form_edit_doctor" name="doctor">
                          <option selected>Select Doctor</option>
                          <option value="Dr. Palitha">Dr. Palitha</option>
                          <option value="Dr. Bandara">Dr. Bandara</option>
                          <option value="Dr. Kalam">Dr. Kalam</option>
                          <option value="Dr. Amila">Dr. Amila</option>
                          <option value="Dr. Gayan">Dr. Gayan</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 pr-0">
                      <div class="form-group form-group-default">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="fill name" id="form_edit_name" name="name" value="'.$r1['name'].'">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group form-group-default">
                        <label>Mobile</label>
                        <input type="number" class="form-control" placeholder="fill mobile" id="form_edit_mobile" name="mobile" value="'.$r1['mobile'].'">
                      </div>
                    </div>
                    <div class="col-md-6 pr-0">
                      <div class="form-group form-group-default">
                        <label>Date</label>
                        <input type="date" class="form-control" value="'.date('Y-m-d').'" id="form_edit_date" name="date">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group form-group-default">
                        <label>Time</label>
                        <input type="time" class="form-control" value="'.date('H:i').'" id="form_edit_time" name="time">
                        <input type="text" class="form-control d-none" id="form_edit_id" name="id" value="'.$r1['id'].'">
                      </div>
                    </div>
                  </div>
                <!-- </form> -->
                </div>
                <div class="modal-footer no-bd">
                  <button type="submit" class="submitapp btn btn-primary">Add</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      ';
    }
    $oot=$ot;
  }elseif($i==3){}

  print $oot;

  $s1=$conn=null;

?>