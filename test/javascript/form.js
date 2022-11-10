var Vemail =/^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,8}\b$/i;
var Vphone=/^\d{10}$/;
function validate() {

    var Fname=document.myform.name.value;
    var Femail=document.myform.email.value;
    var Fcontact=document.myform.contact.value;
    var Fadd=document.myform.address.value;
    var Fgender=  document.myform.gender.value;
    var Fprofile=  document.myform.profile.value;
    var Fdate=  document.myform.date.value;
    var Ftime=  document.myform.time.value;
    var option =document.myform.radio.value;

    


    if ( Fname == "") {
        document.getElementById("uname").innerHTML="Enter Valid Name*";
        document.getElementById("name").focus();
      
    }
    else{
        document.getElementById("uname").innerHTML=" ";
    }

    
    if ( Femail == "" || !Vemail.test(Femail)) {
        document.getElementById("uemail").innerHTML="Enter Valid Email*";
        document.getElementById("email").focus();
      
    }
    else{
        document.getElementById("uemail").innerHTML=" ";
    }

    if ( Fcontact == "" || !Vphone.test(Fcontact)) {
        document.getElementById("ucontact").innerHTML="Enter Valid Contact*";
        document.getElementById("contact").focus();
     
    }
    else{
        document.getElementById("ucontact").innerHTML=" ";
    }

    if (!option[0].checked || !option[1].checked) {
        document.getElementById("uage").innerHTML="Select Age*";
        document.getElementById("age").focus();
  
    }
    else{
        document.getElementById("uage").innerHTML=" ";
    }

    if ( Fadd == "" ) {
        document.getElementById("uaddress").innerHTML="Enter Valid Address*";
        document.getElementById("address").focus();

    }
    else{
        document.getElementById("uaddress").innerHTML=" ";
    }

    if ( Fgender == "" ) {
        document.getElementById("ugender").innerHTML="Select Gender*";
        document.getElementById("gender").focus();

    }
    else{
        document.getElementById("ugender").innerHTML=" ";
    }
    if ( Fprofile == "" ) {
        document.getElementById("uprofile").innerHTML="Enter Valid Profile Picture*";
        document.getElementById("profile").focus();

    }
    else{
        document.getElementById("uprofile").innerHTML=" ";
    }

    if ( Fdate == "" ) {
        document.getElementById("udate").innerHTML="Select Date*";
        document.getElementById("date").focus();
    }
    else{
        document.getElementById("udate").innerHTML=" ";
    }
    if ( Ftime == "" ) {
        document.getElementById("utime").innerHTML="Select Time*";
        document.getElementById("time").focus();
    }
    else{
        document.getElementById("utime").innerHTML=" ";
    }


    if(Fname == "" || Femail == "" || Fcontact == "" || Fadd == "" || Fgender =="" || Fprofile == ""  || Fdate =="" || Ftime=="" || !option[0].checked || !option[1].checked){

        return false

    }

  }
            