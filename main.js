  //Bind keypress event to textbox
        // This code will alert after enter press by user
        
        $(e1code).keypress(function(event){
            var keycode = (event.keyCode ? event.keyCode : event.which);
            if(keycode == '13'){
              alert('You pressed a "enter" key in textbox');  
            }
            event.stopPropagation();
          });
// This code is for hiding Employee two and three on Load of Form
      function hideEmpl() {
        $("#s_emp").remove();
        $("#t_emp").remove();
        }
        