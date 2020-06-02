 <script type="text/javascript">
    <!--
     // Form validation code to check for empty form boxes.

    function validate() {
      if(document.regForm.FirstName.value == "") {
        alert("Please provide your first name!");
        document.regForm.FirstName.focus();
        return false;
      }
      if(document.regForm.LastName.value == "") {
        alert("Please provide your last name!");
        document.regForm.LastName.focus();
        return false;
      }
      if(document.regForm.Email.value == "") {
        alert("Please provide your Email!");
        document.regForm.Email.focus();
        return false;
      }
      if(document.regForm.PhoneNum.value == "") {
        alert("Please provide your phone number!");
        document.regForm.PhoneNum.focus();
        return false;
      }
      // EMAIL expression to check for valid email format
      var echeck = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      // PHONE validation fails if the input doesn't match XXX-XXX-XXXX
      if(!echeck.test(regForm.Email.value)) {
        alert("Error: Email must be in the right email format");
        regForm.Email.focus();
        return false;
      }
      // PHONE expression to match format of XXX-XXX-XXXX
      var ph2 = /^[2-9]\d{2}-\d{3}-\d{4}$/;
      // PHONE validation fails if the input doesn't match XXX-XXX-XXXX
      if(!ph2.test(regForm.PhoneNum.value)) {
        alert("Error: Phone number must be in the format of XXX-XXX-XXXX");
        regForm.PhoneNum.focus();
        return false;
      }
      return(true);
    }
     //-->
  </script>



 