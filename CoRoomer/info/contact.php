<font size=6px color=#545454><b>Contact Us</b></font><br><hr><br>
    <form name="contact" method="post" action="contactform.php">
      <table align="left" width="45%" border="0"  cellpadding="6" cellspacing="0">
        <tr>
          <td><label for="email"><div align="right">Email:</div></label></td>
          <td><div align="left">
          <input name="email" type="text" id="email" size="35" maxlength="100">
          </div></td></tr>
        <tr>
          <td><label for="subject"><div align="right">Subject:</div></label></td>
          <td><div align="left">
          <input name="subject" type="text" id="subject" size="35" maxlength="100">
          </div></td></tr>
        <tr>
          <td><label for="name"><div align="right">Name:</div></label></td>
          <td><div align="left">
          <input name="name" type="text" id="name" size="35" maxlength="80">
          </div></td></tr>
        <tr>
          <td><div align="right"><label for="comments">Comments:</label></div></td>
          <td><div align="left"><textarea name="comments" id="comments" cols="45" rows="8"></textarea>
          </div></td></tr>
        <tr>
          <td></td>
          <td>
          <div align="right">
          <label for="submit"></label><input name="submit" type="submit" id="submit" onclick=		  "MM_validateForm('email','','RisEmail','subject','','R','name','','R','comments','','R');return document.MM_returnValue" value="Submit">
          </div></td></tr></table></form>