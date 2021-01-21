$(function() {
   
    $("form[name='registration']").validate({
     
      rules: {
       
        firstname: "required",
        email: {
          required: true,
          email: true
        },
      },
  
      messages: {
        firstname: "Te lutem sheno emrin",
        
        email: "Te lutem sheno email valide"
      },
     
      submitHandler: function(form) {
        form.submit();
      }
    });
  });


  $(function() {
   
    $("form[name='signup']").validate({
     
      rules: {
       
        username: "required",
        email: {
          required: true,
          email: true
        },
     

      },
  
      messages: {
        username: "Duhet ta plotesoni emrin",
        email: "Duhet te plotesohet Email",
      },
     
      submitHandler: function(form) {
        form.submit();
      }
    });
  });


  function validimiPasswordit() {
    
    var passwordi = document.getElementById('password').value,
        mesazhi = [];
    if (passwordi.length < 8) {
        mesazhi.push("Duhet te jete me i gjate se 8 karaktere"); 
    }
    if (passwordi.search(/[a-z]/i) < 0) {
      mesazhi.push("Duhet te permbaje min 1 shkronje.");
    }
    if (passwordi.search(/[0-9]/) < 0) {
      mesazhi.push("Duhet te permbaj min 1 numer."); 
    }
    if (mesazhi.length > 0) {
        alert(mesazhi.join("\n"));
        return false;
    }
    return true;
}