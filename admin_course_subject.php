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
                                Course Subject Management
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
                              <p> Course Info</p></div>
                                    <div class="clear"></div> 
                                </div>
                                   <form class="pure-form pure-form-aligned">
    <fieldset>
    <div class="pure-control-group">
            <label for="foo">course name</label>
           <select>
            <option> --select course-- </option>
            <option value="1" selected="">Information Technology</option>
            </select><span class="pure-form-message-inline">This is a required field.</span>
        </div>
    <div class="pure-control-group">
            <label for="foo">course year</label>
           <select>
            <option> --select subject-- </option>
            </select><span class="pure-form-message-inline">This is a required field.</span>
        </div>
        <div class="pure-control-group">
            <label for="foo">course semester</label>
            <select>
            <option> --select subject-- </option>
            </select><span class="pure-form-message-inline">This is a required field.</span>
        </div>
        <div class="pure-control-group">
            <label for="name">Subject Name</label>
            <select>
            <option> --select subject-- </option>
            </select>
            <span class="pure-form-message-inline">This is a required field.</span>
        </div>
        <div class="pure-control-group">
            <label for="name">Lecture Name</label>
            <select>
            <option> --select lecture-- </option>
            </select>
            <span class="pure-form-message-inline">This is a required field.</span>
        </div>

     

        <div class="pure-controls">
       
            <button type="submit" class="pure-button pure-button-primary">Submit</button>
        </div>
    </fieldset>
</form>
                            </div>



                            <div class="col_1_of_3 span_1_of_3" style="width: 60%">
                                <div class="title-img1">
                                    <div class="title"><img src="images/cup.png" alt=""/></div>
                                    <div class="title-desc">
                                      <p>  Subject Assign</p></div>
                                    <div class="clear"></div> 
                                </div>	
                                
                                
                                
                           
	

                                <table width="100%" class="pure-table">
                                    <thead>
                                        <tr>
                                            <th>Course Name</th>
                                            <th>Description</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                          <td>Info Technology</td>
                                          <td>Web Application</td>
                                          <td>year1-semester1</td>
                                          <td> Mr. Samantha Kumara </td>
                                          <td>Remove</td>
                                        </tr>
                                        <tr>
                                            <td>Info Technology</td>
                                            <td>Data Strucutred</td>
                                            <td>year1-semester1</td>
                                            <td>Ms Kumari</td>
                                            <td>Remove</td>
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



