$(document).ready(function(){

  $("#register").click(function(){
    var firstname = $("#firstname").val();
    var name = $("#name").val();
    var birthdate = $("#birthdate").val();
    var email = $("#email").val();

    var data = "name=" + name + "&firstname=" + firstname + "&birthdate=" + birthdate + "&email=" + email;

      $.ajax({
        method: "post",
        url: "register.php?",
        data: data,

        // If success or error > display message
        complete: function(jqxhr, errorCode)
        {
        $("#register_output").html(jqxhr.responseText);
        },
        // If success > clear fields
        success: function(data)
        {
          var tag = document.getElementsByTagName("input");
          for (i = 0; i < tag.length; i++)
          {
            tag[i].value = '';
          }
        }
      });
  });
});
