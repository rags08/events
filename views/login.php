

<!DOCTYPE html>
<html>
<head>
<title>login</title>
<style>
    .bgback{background-image: url("images/back.jpg"); background-repeat: repeat-x;}
    .menubg{text-align:center;background-image: url("images/menu.jpg"); background-repeat: repeat-x;color:#3e6ca9;font-weight:bold;height:30px}
    .hreff{color:#3e6ca9;text-decoration:none}
</style>
</head>
<body>

<table cellpadding="0" cellspacing="0" width="100%" bgcolor="#000">
  <tr>
    <td> 
      <table cellpadding="0" cellspacing="0" width="56%" bgcolor="#fff" align="center" >
          <tr>
            <td class="bgback"> 
              <table cellpadding="0" cellspacing="0" width="96%"  align="center" border="0" margin-bottom:50px;>
                  <tr>
                    <td> 
                        <img src="images/qcs.jpg">
                        <span style="margin-left: 577px;color: #fff;"> Home | Mail us</span>
                    </td>
                  </tr>
                  <tr>
                    <td > 
                        <img src="images/banner.jpg">
                    </td>
                  </tr>
                  
                  <?php if(!empty($errmsg)){ ?>
                  <tr>
                      <td align="center "><br><?php echo $errmsg;?></td>
                  </tr>
                  <?php } ?>
                  <tr>
                    <td> <br>
                    <form action="" name="registerfrm" method="post">
                        <table class="reg" cellpadding="5" cellspacing="0" width="66%"  align="center" border="0" style="background-color:#1c5eb7;border:1px solid #1c5eb7; margin-bottom:100px" >
                            <tr>
                                <td colspan="2" align="center"  bgcolor="#1c5eb7" style="color:#fff">Login Form</td>
                            </tr>
                            <tr bgcolor="#fff">
                                <td align="center" width="50%">username </td>
                                <td align="center"><input type="text" name="username" id="username">
                             </tr>
                             <tr  bgcolor="#fff">
                                <td align="center" width="50%">password </td>
                                <td align="center"><input type="password" name="password" id="password">
                             </tr>
                             <tr  bgcolor="#fff">
                                <td colspan="2" align="center">
                                 <input type="submit" name="btnlogin" value="login">
                                 </td>
                             </tr>
                                
                            </table>
                             </form>
                    </td>
                  </tr>
                 
                  <tr>
                    <td> 
                        <img src="images/footerpic.jpg"  width="100%">
                    </td>
                  </tr>
              </table>
            </td>
          </tr>
      </table>
    </td>
  </tr>
</table>

</body>
</html>