
<?php include("./includes/check.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E nursery 🌱  | Users Queries</title>

  <?php include("./includes/links.php") ?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>  
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>  
</head>
<body>

	

 <?php include("./includes/navbar.php") ?>
<div class="container">

<div style="text-align: center; padding: 30px 0px">
  <h1>Users Queries 🌱</h1>
</div>

 <div class="container">
          <div class="row">
       <div class="col-lg-12 col-md-12 ml-auto mr-auto">
        <div class="table-responsive">
                <table class="table table-borderless" style="border: 1px solid #f2f2f2">
                    <thead>
                        <tr style="border: 1px solid #f2f2f2">
                            <th class="text-center">#</th>
                            <th>Name</th>
                            <th>Question</th>
                            <th class="text-right">Reply</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php 
                       include './includes/connection.php';
                       $p_selectquery = "select * from questions where answer=''";
                       $p_query = mysqli_query($con, $p_selectquery);
                         $i = 0;
                       while($p_res = mysqli_fetch_array($p_query)){
                        $i = $i+1;

                      ?>
                        <tr style="border: 1px solid #f2f2f2">
                            <td class="text-center"><?php echo $i; ?></td>
                            <td><?php echo $p_res['username'] ?></td>
                            <td><?php echo $p_res['question']; ?></td>
                           
                            <td class="td-actions text-right">
                                <a href="replyq.php?id=<?php echo $p_res['id']; ?>" ><button type="button" class="btn btn-success" >
                                    Reply
                                </button></a>
                                
                            </td>
                        </tr>
                      
                      <?php } ?>
                        
                    </tbody>
                </table>
                </div>
    
          
            
    
        </div>
    </div>
</div>
</div>



<!-- Modal -->
<div style="position: fixed; top: 0px; width:  100%; padding-top: 150px;margin: auto; background: rgb(0, 0, 0, 0.5); height: 100vh; display: none;" id="popup">
  <div class="modal-dialog" role="document" style="transform: translateX(10px); transition: 5s ease;">
    <div class="modal-content">
      <div class="modal-header">
 
        <button type="button" onclick="hide()" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="./scripts/delete-user-script.php">
      <div class="modal-body">
        <h5>Do Want to Delete This User ?</h5>
        
            <input type="hidden" name="delete_id" id="delete_id"> 
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" onclick="hide()" data-dismiss="modal">Close</button>
        <button type="submit" name="deletedata" class="btn btn-danger">Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>
 <?php include("./includes/footer.php") ?>

<!-- <script type="text/javascript">

function dis(){
    document.getElementById('popup').style.display = "block";
   var user_id = $(this).val();
   console.log(user_id);

}



function hide(){
    document.getElementById('popup').style.display = "none";
}
    $(document).ready(function(){
        $('.deletebtn').on('click', function(){
            $('#deleteModel').modal('show');
  

        })
    })
</script> -->

<script type="text/javascript">
    
    function dos(){
swal({  
  title: " Confirm?",  
  text: "Imaginary file!",  
  type: "warning message",  
  showCancelButton: true,  
  confirmButtonClass: "btn-danger",  
  confirmButtonText: " Confirm, remove it!",  
  cancelButtonText: "No, cancel plx!",  
  closeOnConfirm: false,  
  closeOnCancel: false  
},  
function(isConfirm) {  
  if (isConfirm) {  
    swal("remove it!", "Imaginary file remove!", "Confirm");  
  } else {  
    swal("Cancelled", "Imaginary file safe!)", "something is worng");  
  }  
}); 
    }
</script>
</body>
</html>