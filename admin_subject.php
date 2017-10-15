<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title>Free Guidance Website Template | Home :: w3layouts</title>
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



        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }

            tr:hover{background-color:#f5f5f5}
        </style>
    </head>
    <body>
        <div class="header-bg">
            <div class="wrap"> 
                <div class="total-box">
                    <div class="total">
                        <div class="header_top">
                            <div class="menu">
                                <?php include('_menu_admin.php') ?>
                            </div>
                            <ul class="follow_icon">
                                <li><a href="#" style="opacity: 1;"><img src="images/fb.png" alt=""></a></li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                        <div class="header-bottom">
                            <div class="logo">
                                <h3><a href="index.html">Student Management System</a></h3>
                                Subject Management
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

                            <div class="col_1_of_3 span_1_of_3">
                                <div class="title-img">
                                    <div class="title"><img src="images/book1.png" alt=""/></div>
                                    <div class="title-desc">
                                      <p>Add Subject</p></div>
                                    <div class="clear"></div> 
                                </div>
                                <form action="" method="get">
                                    <table width="100%" cellspacing="3" cellpadding="3">
                                        <tr>
                                            <td width="41%" align="right" valign="middle">Subject name</td>
                                            <td width="59%"><input type="text" name="course_name" id="course_name"></td>
                                        </tr>
                                        <tr>
                                            <td align="right" >Description</td>
                                            <td> <textarea></textarea></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td><input type="submit" name="Add" id="Add" value="Add"></td>
                                        </tr>
                                    </table>




                                </form>
                            </div>



                            <div class="col_1_of_3 span_1_of_3" style="width: 60%">
                                <div class="title-img1">
                                    <div class="title"><img src="images/cup.png" alt=""/></div>
                                    <div class="title-desc">
                                      <p>Available Subject</p></div>
                                    <div class="clear"></div> 
                                </div>		

                                <table id="sms-table" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Subject Name</th>
                                            <th>Description</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>Data Structured</td>
                                            <td>Description on IT</td>
                                            <td><a href="admin_course_subject.php">view course details</a></td>
                                            <td>Delete</td>
                                        </tr>

                                    </tbody>
                                </table>


                            </div>




                            <div class="clear"></div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap">
                <div class="copy-right">
                    <p>Design by <a href="http://w3layouts.com/"> W3layouts</a></p>
                </div>
            </div>
        </div>
    </body>
</html>



