<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
    
    <script>
function validateForm() {
  let x = document.forms["myForm"]["username"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>
<style>
    .bgback {
        background-image: url("images/back.jpg");
        background-repeat: repeat-x;
    }

    .menubg {
        text-align: center;
        background-image: url("images/menu.jpg");
        background-repeat: repeat-x;
        color: #3e6ca9;
        font-weight: bold;
        height: 30px
    }

    .hreff {
        color: #3e6ca9;
        text-decoration: none
    }

    input[type=submit] {
        width: 50%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=text],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .reg {
        border-radius: 05px;
        background-color: #f2f2f2;
        padding: 20px;
    }
    </style>
</head>

<body>

    <table cellpadding="0" cellspacing="0" width="100%" bgcolor="#000">
        <tr>
            <td>
                <table cellpadding="0" cellspacing="0" width="56%" bgcolor="#fff" align="center">
                    <tr>
                        <td class="bgback">
                            <table cellpadding="0" cellspacing="0" width="96%" align="center" border="0">
                                <tr>
                                    <td>
                                        <img src="images/qcs.jpg">
                                        <span style="margin-left: 577px;color: #fff;"> Home | Mail us</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="images/banner.jpg"style="margin-bottom:-5px;">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="menubg" >
                                        Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;About
                                        Us&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp; Service&nbsp;&nbsp; |
                                        &nbsp;&nbsp;&nbsp;&nbsp;Partners &nbsp;&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;Why
                                        Qcs&nbsp;&nbsp; | &nbsp;&nbsp;<a href="register.php"
                                            class="hreff">Registration</a>&nbsp;&nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td align='center' style="font-size: xx-large;">
                                        <?Php if(!empty($success)) echo '<span style="color:green;">'.$success.'</span>';
                                              if(!empty($error)) echo '<span style="color:red;">'.$error.'</span>';
                                              if(!empty($errorsize)) echo '<span style="color:red;">'.$errorsize.'</span>';
                                            ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="<?php echo base_url('RegisterController/savedata'); ?>" name="registerfrm"  onsubmit="return validateForm()" method="post"
                                         enctype="multipart/form-data">
                                            <table class="reg" cellpadding="5" cellspacing="0" width="66%"
                                                align="center" border="1"
                                                style="border:1px solid blue;margin-top:10px;">
                                                <tr>
                                                    <td colspan="2" align="center">Registration Form</td>
                                                </tr>
                                                <tr>
                                                    <td align="center" width="50%">Name </td>
                                                    <td align="center"><input type="text" name="name" id="name"  maxlength="32" pattern="[A-Za-z]{1,20}" required >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center" width="50%">Photo</td>
                                                    <td align="center"><input type="file" name="photo" id="photo" alt="photo" width="48"
                                                     height="48" data-max-size="512" data-min-size="10"required>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center" width="50%">E-mail </td>
                                                    <td align="center"> <input type="text" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center" width="50%">Phone </td>
                                                    <td align="center"><input type="text" name="phone" id="phone" maxlength="10" size="10" pattern="98[0-9]{8}" required>
                                                </tr>
                                                <tr>
                                                    <td align="center" width="50%">address </td>
                                                    <td align="center"><input type="text" name="address" id="address" required>
                                                </tr>
                                                <tr>
                                                    <td align="center" width="50%">city </td>
                                                    <td align="center"><input type="text" name="city" id="city"required>
                                                </tr>
                                                <tr>
                                                    <td align="center" width="50%">state </td>
                                                    <td> <select name="state" id="state">
                                                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                            <option value="Assam">Assam</option>
                                                            <option value="Bihar">Bihar</option>
                                                            <option value="Chandigarh">Chandigarh</option>
                                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                                            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                                            <option value="Daman and Diu">Daman and Diu</option>
                                                            <option value="Delhi">Delhi</option>
                                                            <option value="Lakshadweep">Lakshadweep</option>
                                                            <option value="Puducherry">Puducherry</option>
                                                            <option value="Goa">Goa</option>
                                                            <option value="Gujarat">Gujarat</option>
                                                            <option value="Haryana">Haryana</option>
                                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                            <option value="Jharkhand">Jharkhand</option>
                                                            <option value="Karnataka">Karnataka</option>
                                                            <option value="Kerala">Kerala</option>
                                                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                            <option value="Maharashtra">Maharashtra</option>
                                                            <option value="Manipur">Manipur</option>
                                                            <option value="Meghalaya">Meghalaya</option>
                                                            <option value="Mizoram">Mizoram</option>
                                                            <option value="Nagaland">Nagaland</option>
                                                            <option value="Odisha">Odisha</option>
                                                            <option value="Punjab">Punjab</option>
                                                            <option value="Rajasthan">Rajasthan</option>
                                                            <option value="Sikkim">Sikkim</option>
                                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                                            <option value="Telangana">Telangana</option>
                                                            <option value="Tripura">Tripura</option>
                                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                            <option value="Uttarakhand">Uttarakhand</option>
                                                            <option value="West Bengal">West Bengal</option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" align="center">
                                                        <input type="submit" name="btnsubmit" value="Register">
                                                        <footer>Already a member? <a href="login">Login here</a>
                                                        </footer>
                                                    </td>
                                                </tr>

                                            </table>
                                        </form>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src="images/footerpic.jpg" width="100%">
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