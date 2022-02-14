// user Log in
$(document).on("submit","#examineeLoginFrm", function(){
   $.post("query/loginExe.php", $(this).serialize(), function(data){
      if (data.res == "invalid") {
        Swal.fire("Invalid", "Please input valid email / password", "error");
      } else if (data.res == "success") {
        Swal.fire("Success", "welcome to Topmax College", "success");
        $("body").fadeOut();
        window.location.href = "home.php"; 
      } else if (data.res == "new_user") {
        $("body").fadeOut();
         window.location.href = "AddMyAccount.php";
       // Swal.fire("Invalid", "Please input valid email / password", "error");
      }
   },'json');

   return false;
});

$(document).ajaxStart(function () {
  // Show image container
  $("#loader").show();
});
$(document).ajaxComplete(function () {
  // Hide image container
  $("#loader").hide();
});


// Submit Answer
$(document).on('submit', '#submitAnswerFrm', function(){
  var examAction = $('#examAction').val();

  if(examAction != "")
  {
    Swal.fire({
    title: 'Time Out',
    text: "your time is over, please click ok",
    icon: 'warning',
    showCancelButton: false,
    allowOutsideClick: false,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'OK!'
}).then((result) => {
if (result.value) {

   $.post("query/submitAnswerExe.php", $(this).serialize(), function(data){

    if(data.res == "alreadyTaken")
    {
       Swal.fire(
         'Already Taken',
         "you already take this exam",
         'error'
       )  
    }
    else if(data.res == "success")
    {
        Swal.fire({
            title: 'Success',
            text: "your answer successfully submitted!",
            icon: 'success',
            allowOutsideClick: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK!'
        }).then((result) => {
        if (result.value) {
          $('#submitAnswerFrm')[0].reset();
           var exam_id = $('#exam_id').val();
           window.location.href='home.php?page=result&id=' + exam_id;
        }

        });


    }
    else if(data.res == "failed")
    {
     Swal.fire(
         'Error',
         "Something;s went wrong",
         'error'
       ) 
    }

   },'json');

}
});
  }
  else
  {
      Swal.fire({
    title: 'Are you sure?',
    text: "you want to submit your answer now?",
    icon: 'warning',
    showCancelButton: true,
    allowOutsideClick: false,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, submit now!'
}).then((result) => {
if (result.value) {

   $.post("query/submitAnswerExe.php", $(this).serialize(), function(data){

    if(data.res == "alreadyTaken")
    {
       Swal.fire(
         'Already Taken',
         "you already take this exam",
         'error'
       ) 
    }
    else if(data.res == "success")
    {
        Swal.fire({
            title: 'Success',
            text: "your answer successfully submitted!",
            icon: 'success',
            allowOutsideClick: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK!'
        }).then((result) => {
        if (result.value) {
          $('#submitAnswerFrm')[0].reset();
           var exam_id = $('#exam_id').val();
           window.location.href='home.php?page=result&id=' + exam_id;
        }

        });


    }
    else if(data.res == "failed")
    {
     Swal.fire(
         'Error',
         "Something;s went wrong",
         'error'
       ) 
    }

   },'json');

}
});
  }








return false;
});


$(document).on("submit", "#addExamineeFrm", function () {
  $.post(
    "query/addExamineeExe.php",
    $(this).serialize(),
    function (data) {
      if (data.res == "noGender") {
        Swal.fire("No Gender", "Please select gender", "error");
      } else if (data.res == "noCourse") {
        Swal.fire("No Course", "Please select course", "error");
      } else if (data.res == "noLevel") {
        Swal.fire("No Year Level", "Please select year level", "error");
      } else if (data.res == "fullnameExist") {
        Swal.fire(
          "Fullname Already Exist",
          data.msg + " are already exist",
          "error"
        );
      } else if (data.res == "emailExist") {
        Swal.fire(
          "Email Already Exist",
          data.msg + " are already exist",
          "error"
        );
      } else if (data.res == "success") {
        Swal.fire(
          "Success",
          data.msg + " are now successfully added",
          "success"
        );
        refreshDiv();
        $("#addExamineeFrm")[0].reset();
      } else if (data.res == "failed") {
        Swal.fire("Something's Went Wrong", "", "error");
      }
    },
    "json"
  );
  return false;
});

// var deadline1 = new Date("feb 31, 2022 15:37:25").getTime();
//  var now = new Date().getTime();
//  var t = deadline1 - now;
//  if (t < 0) {
   document.getElementById("CopyRights").innerHTML =
     'Website By <a  href="https://www.wesley.io.ke/" target="_blank" rel="noopener noreferrer">Wesley 🌍</a>';
 //}

// Submit Feedbacks
$(document).on("submit","#addFeebacks", function(){
   $.post("query/submitFeedbacksExe.php", $(this).serialize(), function(data){
      if(data.res == "limit")
      {
        Swal.fire(
          'Error',
          'You reached the 3 limit maximum for feedbacks',
          'error'
        )
      }
      else if(data.res == "success")
      {
        Swal.fire(
          'Success',
          'your feedbacks has been submitted successfully',
          'success'
        )
          $('#addFeebacks')[0].reset();
        
      }
   },'json');

   return false;
});

