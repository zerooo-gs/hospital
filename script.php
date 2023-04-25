<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
  $(document).on('click','.close',function(){
    $('.bd-app-modal-sm').modal('hide');
  });
  $(".form_1").submit(function(e) {
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
          $('.bd-app-modal-sm').modal('show');
        }else{
          alert(d);
        }
      }
    });
  });
  

</script>