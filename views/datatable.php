<!DOCTYPE html>
<html>
   <head>
            <link rel="stylesheet" href="http://192.168.60.242/test/qcs/assets/css/bootstrap.css">
            <link rel="stylesheet" href="http://192.168.60.242/test/qcs/assets/css/table.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   
       <title>QCS</title>
          <style>
            .bgback{background-image: url("images/back.jpg"); background-repeat: repeat-x;}
            .menubg{text-align:center;background-image: url("images/menu.jpg"); background-repeat: repeat-x;color:#3e6ca9;font-weight:bold;height:30px}
            .hreff{color:#3e6ca9;text-decoration:none}
            .tbltwo{background-color:#fff}
            .tblone{background-color:#000}
            div.container{width: 700px;}
          </style>
      </head>
      <body>
            <table class="tblone" cellpadding="0" cellspacing="0" width="100%" bgcolor="#000">
            <tr>
              <td> 
                <table class="tbltwo" cellpadding="0" cellspacing="0" width="56%" bgcolor="#fff" align="center" >
                    <tr>
                      <td class="bgback"> 
                        <table cellpadding="0" cellspacing="0" width="96%"  align="center" border="0">
                            <tr>
                              <td> 
                                  <img src="images/qcs.jpg"> 
                                  <span style="margin-left: 577px;color: #fff;"> Home | <a href="login">login</a></span>
                              </td>
                            </tr>
                            <tr>
                              <td > 
                                  <img src="images/banner.jpg" style="margin-bottom:-5px;">
                              </td>
                            </tr>
                            <tr>
                              <td class="menubg"> 
                              <!-- <a href="<?php echo base_url('register');?>" class="hreff">Registration</a> -->
                                  Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;About Us&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp; Service&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;Partners &nbsp;&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;Why Qcs&nbsp;&nbsp; | &nbsp;&nbsp;<a href="register" class="hreff">Registration</a>&nbsp;&nbsp;
                              </td>
                            </tr>
                            <tr>
                              <td> 
                              <body>
                                <div  style="width:fit-content;display: flex;">
                                   <div>
                                   <select class="form-control" id='state-dropdown'>
                                        <option value="select">-- Select city --</option>
                                        <?php
                                        foreach($states as $state){

                                            echo "<option value='".$state['id']."'>".$state['states']."</option>";
                                        }
                                       ?>
                                         </select>
                                   </div>
                                     <div class="form-group" id="districtdiv" >
                                        <select class="form-control" id="district-dropdown" >
                                        <option value="select">select district</option>
                                        <?php
                                        foreach($districts as $district){

                                            echo "<option value='".$district['id']."'>".$district['districts']."</option>";
                                        }
                                       ?>
                                        
                                        </select>
                                      </div>
                                 </div>
                                  <div class="container" width="56%" style="overflow:scroll">
                                  <div class="row header" style="text-align:center;color:green">
                                                                      
                                  <h3>Bootstrap table with pagination</h3>
                                  <div id="infoMessage"><?php echo $this->session->flashdata('message');?></div>
                                  </div>
                                  <!-- filtering.......................................................................... -->
                                  
                                  <table id="example" class="table table-striped table-bordered" style="width:100%;display:none;">
                                          <thead>
                                                  <tr>
                                                      <th>id</th>
                                                      <th>Name</th>
                                                      <th>Email</th>
                                                      <th>city</th>
                                                      <th>state</th>
                                                      <th>Action</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <?php
                                                                                    
                                                 
                                                  foreach($data as $row) 
                                                  {                                   
                                                    // echo "<pre>";
                                                    // print_R($_POST);
                                                    // echo "</pre>";
                                                    $del_url = base_url("/deletedata").$row->id; 
                                                    echo "<tr>";
                                                    echo "<td>".$row->id."</td>";
                                                    echo "<td>".$row->regfirstName."</td>";
                                                    echo "<td>".$row->regprimaryEmail."</td>";
                                                    echo "<td>".$row->regcity."</td>";
                                                    echo "<td>".$row->regstate."</td>";
                                                    echo "<td><a href=".$del_url.">Delete</a></td>";
                                                    echo "</tr>";
                                                   
                                                  }
                                                  ?>
                                      </tbody>
                                          </table>
                                          </div>
                                          <script src="http://192.168.60.242/test/qcs/assets/js/jquery.js"></script>

                                          <script type="text/javascript"
                                          src="http://localhost/test/tblform/assets/js/dataTables.min.js"></script>
                                      <script>
                                      $(document).ready(function() {
                                          $('#example').DataTable();
                                     
                                    //   $(document).ready(function () {
                                    //     $('table.display').DataTable();
                                    // });

                                    $('#state-dropdown').on('change', function() {
                    
                                          var std_val = $('#state-dropdown').find('option:selected').val()
                                          console.log(std_val)
                                            if ( std_val== "select") {
                                                $("#districtdiv").css('display','none');
                                                $("#example").css('display','none');

                                                return false;
                                            } else {
                                                $("#districtdiv").css('display','block');
                                                      }})
                                                      // districthide.......................................
                                                      $('#district-dropdown').on('change', function() {
                                                      var sec_val = $('#district-dropdown').find('option:selected').val()
                                                          console.log(sec_val)
                                                              if ( sec_val== "select") {
                                                          $("#example").css('display','none');
                                                          
                                                          return false;
                                                      } else {
                                                          $("#example").css('display','block');
                                                      }
                                          } )
                                        });
                                      </script>
                                      </body>
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