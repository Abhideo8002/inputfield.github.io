<html>
   <head>
   	 <link rel="stylesheet" href="css/bootstrap.css">
       <script type="text/javascript">
	      function call()
		  {
			  var n=document.forms.f.t1.value;
			  var e=document.forms.f.t2.value;
			  var p=document.forms.f.t3.value;
			  var m=document.forms.f.t4.value;
			  
			  if(n=="")
			  {
				  alert("plz enter name");
				  document.forms.f.t1.focus();
				  return false;
			  }
             
            
			  var em=e.indexOf('@');
			  if(em==-1)
			  {
				  alert("plz enter a valid email");
				  document.forms.f.t2.focus();
				  return false;
			  }
			  var ph=p.length;
			
			if(ph!=10)
			{
				alert("plz enter a valid no");
				document.forms.f.t3.focus();
				return false;
			}
			if(m=="")
			  {
				  alert("plz enter message here");
				  document.forms.f.t4.focus();
				  return false;
			  }
		  }
       </script>
   </head>
   <body>
   	<marquee onmouseover="this.stop()" 
     onmouseout="this.start()" scrollamount="11"><h1>Fill your form here</h1></marquee>
   
    <form name="f">
      	<table border="3" align="center">
         <tr>
          <td>Enter name</td>
         	  <td><input type="text" name="t1" placeholder="enter your name"></td>
         </tr>
         <tr>
              <td> Enter email</td>
              <td><input type="text" name="t2" placeholder="enter your email"></td>
         </tr>
        <tr> 
           <td>Enter phone no</td>
           <td><input type="text" name="t3" placeholder="enter your phone no"></td>
         </tr>
         <tr>
            <td>Enter massage</td>
            <td><input type="text" name="t4" placeholder="enter message here"></td>
         </tr>
         <tr>
             <td align="center"> <input type="button"  onClick="call()" value="submit" class="btn btn-success"></td>
             <td align="center"> <input type="button"  onClick="call()" value="reset" class="btn btn-danger"></td>
         </tr> 
            </table>
      </form>
      <img src="Chrysanthemum.jpg" class="img-circle">
   </body>
</html>