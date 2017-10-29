<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title>Student Management</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link href='http://fonts.googleapis.com/css?family=Montserrat+Alternates' rel='stylesheet' type='text/css'>
        <style type="text/css">
            body,td,th {
                font-family: Verdana, Geneva, sans-serif;
                font-size: small;
            }
        </style>

        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">

    </head>
    <body>
        <div class="header-bg">
            <div class="wrap"> 
                <div class="total-box">
                    <div class="total">
                        <div class="header_top">
                            <div class="menu">
                               <?php include './_menu_admin.php';?>
                            </div>
                            <ul class="follow_icon">
                                <li><a href="#" style="opacity: 1;"><img src="images/fb.png" alt=""></a></li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                        <div class="header-bottom">
                            <div class="logo">
                                <h3><a href="index.html">Student Management System</a></h3>
                            </div>

                            <div class="clear"></div> 
                        </div>
                    </div>	
                </div>
            </div>
        </div>
        <div class="banner-box">
            <div class="wrap">
                <div class="main-top">
                    <div class="main">

                        <div class="section-top">


                            <div class="col_1_of_1 ">
                                <div class="title-img1">
                                    <div class="title"><img src="images/cup.png" alt=""/></div>
                                    <div class="title-desc"><p>Student</p></div>
                                    <div class="clear"></div> 
                                </div>					

                                <form class="pure-form pure-form-aligned">
                                    <table width="100%" cellspacing="3" cellpadding="3">
                                        <tr>
                                            <td> 
                                                <fieldset>
                                                    <div class="pure-control-group">
                                                        <label for="name">First Name</label>
                                                        <input id="name" type="text" placeholder="Username">
                                                        <span class="pure-form-message-inline">This is a required field.</span>
                                                    </div>

                                                    <div class="pure-control-group">
                                                        <label for="password">Last Name</label>
                                                        <input id="password" type="password" placeholder="Password">
                                                    </div>

                                                    <div class="pure-control-group">
                                                        <label for="email">Email Address</label>
                                                        <input id="email" type="email" placeholder="Email Address">
                                                    </div>
                                                </fieldset>
                                            </td>
                                            <td>
                                                <fieldset>
                                                  <div class="pure-control-group">
                                                        <label for="name">Gender</label>
                                                        <input type="radio" name="gender" value="Male" checked/> Male 
                                                        <input type="radio" name="gender" value="Female"/> Female
                                                        <span class="pure-form-message-inline">This is a required field.</span>
                                                    </div>
                                                    <div class="pure-control-group">
                                                        <label for="name">Address</label>
                                                        <textarea></textarea>
                                                        <span class="pure-form-message-inline">This is a required field.</span>
                                                    </div>
                                                 
                                                        <div class="pure-control-group">
                                                            <label for="name">Telephone</label>
                                                            <input id="name" type="text" placeholder="Username">
                                                            <span class="pure-form-message-inline">This is a required field.</span>
                                                        </div>
                                                        
                                                            <div class="pure-control-group">
                                                                <label for="name">Mobile</label>
                                                                <input id="name" type="text" placeholder="Username">
                                                                <span class="pure-form-message-inline">This is a required field.</span>
                                                            </div>
                                                    <div class="pure-controls">
                                                        

                                                        <button type="submit" class="pure-button pure-button-primary">Submit</button>
                                                    </div>
                                                        </fieldset>
                                                        </td>
                                                        </tr>
                                                        </table>


                                                        </form>



                                                        </div>

                                                        <div class="clear"></div> 
                                                        </div>
                                                        </div>
                                                        </div>
                
                
                                <div class="title-img2">
                                    <div class="title"><img src="images/cup.png" alt=""/></div>
                                    <div class="title-desc"><p>Student Details</p></div>
                                    <div class="clear"></div> 
                                </div>
                <table border="0" class="pure-table">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Student</th>
                            <th>email</th>
                            <th>address</th>
                            <th>Gender</th>
                            <th>TP</th>
                            <th>mobile</th>
                            <th>Date created</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ST1</td>
                            <td>Ravinath Fernando</td>
                            <td>ravinathdo@gmail.com</td>
                            <td>30 colombo, colombo 3</td>
                            <td>Male</td>
                            <td>0118899909</td>
                            <td>0718399387</td>
                            <td>2017-01-06</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>

                                    
                
                
                
                
                
                
                                                        </div>
                                                        <div class="wrap">
                                                            <div class="copy-right">
                                                                <p>Design by <a href="http://w3layouts.com/"> W3layouts</a></p>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        </body>
                                                        </html>



