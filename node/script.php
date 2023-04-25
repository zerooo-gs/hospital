<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script>
  // alert();
  $(document).ready( function(){
    // $('.bd-app-modal-sm').modal('show');
    // $('.alert').alert()
    // fnnotify(200,'Text Copied to Clipboard','text');
    // tbl-app
    // $('#tbl-app').DataTable({
    //   "paginate": true,
    //   "sort": false
    // });
    function1();
  });

  $(document).on('click','.close',function(){
    $('.modal').modal('hide');
  });
  // $(document).on('click','.btnappoint',function(e){
  $(".btnappoint").click(function(e) {
    // alert();
    e.preventDefault();
    function1();
  });
  $(document).on('click','.btnedit',function(){
    var id=$(this).data('id');
    functionedit(id);
  });
  $(document).on('click','.backtohome',function(){
    window.location.replace('../');
  });
  $(".btndelete").click(function(){
    functiondelete();
  });
  function function1(){
    $.ajax({
      url: 'f2.php',
      type: 'POST',
      data: {i:1},
      success: function (d) {
        $('.card').html(d);
      }
    });
  }
  function functionedit(d1){
    $.ajax({
      url: 'f2.php',
      type: 'POST',
      data: {i:2,id:d1},
      success: function (d) {
        // $('.card').append(d);
        $('.modal').html(d);
        $('.modal').modal('show');
      }
    });
  }
  function functiondelete(){
    if(confirm('Are you sure to delete this record...?')){
      $.ajax({
        url: 'f2.php',
        type: 'POST',
        data: {i:3},
        success: function (d) {
          $('.card').html(d);
        }
      });
    }
  }
  // $(document).on('click','.submitapp',function(e){
  $(".addappointment").submit(function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      url: 'f1.php',
      type: 'POST',
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      success: function (d) {
        if(d==1){
          alert('Appointment added.');
        }else{
          alert(d);
        }
      }
    });
  });
  $(document).on('submit','.editappointment',function(e){
  // $(".editappointment").submit(function(e) {
    e.preventDefault();
    // var formData = new FormData(this);
    var ar1=[
      $('#form_edit_department').val(),
      $('#form_edit_doctor').val(),
      $('#form_edit_name').val(),
      $('#form_edit_mobile').val(),
      $('#form_edit_date').val(),
      $('#form_edit_time').val(),
      $('#form_edit_id').val()];
    $.ajax({
      url: 'f3.php',
      type: 'POST',
      data: {data:ar1},
      success: function (d) {
        if(d==1){
          $('.modal').modal('hide');
          alert('Appointment updated.');
          function1();
        }else{
          alert(d);
        }
      }
    });
  });
  
  function fnnotify(a1='',a2='',a3='',a4=''){
    var content = {};
    var z1='danger';
    content.title = a2;
    content.message = a3;
    content.icon = 'fa fa-exclamation';
    if(a1==200){  z1='success'; content.icon = 'fa fa-check'; }
    if(a1==201){  z1='info'; content.icon = 'fa fa-check'; }
    $.notify(content,{
      type: z1,
      placement: {  from: 'bottom',align: 'right'  },
      time: 10000,
      delay: 10000,
      animate:{enter: "animated fadeInDown",exit: "animated fadeOutDown"}
    });
  };

</script>