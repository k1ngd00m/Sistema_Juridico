<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->


<!-- Mirrored from demo.geekslabs.com/materialize/v3.1/ by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 07 Oct 2016 13:31:13 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description"
          content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords"
          content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Materialize - Material Design Admin Template</title>

    <!-- Favicons-->
    <link rel="icon" href="dist/images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->
    <link href="dist/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="dist/css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="dist/css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="dist/dist/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet"
          media="screen,projection">
    <link href="dist/dist/js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet"
          media="screen,projection">
    <link href="dist/dist/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet"
          media="screen,projection">


</head>

<body>
<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Page Loading -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START HEADER -->
<?php include "../pages/general/header.php" ?>
<!-- END HEADER -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

        <!-- START LEFT SIDEBAR NAV-->
        <?php include "../pages/general/menu.php" ?>
        <!-- END LEFT SIDEBAR NAV-->

        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <!-- START CONTENT -->
        <section id="content">

            <!--start container-->
            <div class="container">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card-panel">
                            <h4 class="header2">Form Advance</h4>
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input id="first_name" type="text">
                                            <label for="first_name">First Name</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <input id="last_name" type="text">
                                            <label for="last_name">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="email5" type="email">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="password6" type="password">
                                            <label for="password">Password</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <div class="select-wrapper initialized"><span class="caret">▼</span><input
                                                    type="text" class="select-dropdown" readonly="true"
                                                    data-activates="select-options-2e12ec07-0376-73a7-6cd2-7206285a81f5"
                                                    value="Choose your profile">
                                                <ul id="select-options-2e12ec07-0376-73a7-6cd2-7206285a81f5"
                                                    class="dropdown-content select-dropdown ">
                                                    <li class="disabled"><span>Choose your profile</span></li>
                                                    <li class=""><span>Manager</span></li>
                                                    <li class=""><span>Developer</span></li>
                                                    <li class=""><span>Business</span></li>
                                                </ul>
                                                <select class="initialized">
                                                    <option value="" disabled="" selected="">Choose your profile
                                                    </option>
                                                    <option value="1">Manager</option>
                                                    <option value="2">Developer</option>
                                                    <option value="3">Business</option>
                                                </select></div>
                                            <label>Select Profile</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input type="text" class="datepicker picker__input" readonly=""
                                                   id="P1736094344" tabindex="-1" aria-haspopup="true"
                                                   aria-expanded="false" aria-readonly="false"
                                                   aria-owns="P1736094344_root">
                                            <div class="picker" id="P1736094344_root" tabindex="0" aria-hidden="true">
                                                <div class="picker__holder">
                                                    <div class="picker__frame">
                                                        <div class="picker__wrap">
                                                            <div class="picker__box">
                                                                <div class="picker__date-display">
                                                                    <div class="picker__weekday-display">Saturday</div>
                                                                    <div class="picker__month-display">
                                                                        <div>Nov</div>
                                                                    </div>
                                                                    <div class="picker__day-display">
                                                                        <div>5</div>
                                                                    </div>
                                                                    <div class="picker__year-display">
                                                                        <div>2016</div>
                                                                    </div>
                                                                </div>
                                                                <div class="picker__calendar-container">
                                                                    <div class="picker__header"><select
                                                                            class="picker__select--month browser-default"
                                                                            disabled=""
                                                                            aria-controls="P1736094344_table"
                                                                            title="Select a month">
                                                                            <option value="0">January</option>
                                                                            <option value="1">February</option>
                                                                            <option value="2">March</option>
                                                                            <option value="3">April</option>
                                                                            <option value="4">May</option>
                                                                            <option value="5">June</option>
                                                                            <option value="6">July</option>
                                                                            <option value="7">August</option>
                                                                            <option value="8">September</option>
                                                                            <option value="9">October</option>
                                                                            <option value="10" selected="">November
                                                                            </option>
                                                                            <option value="11">December</option>
                                                                        </select><select
                                                                            class="picker__select--year browser-default"
                                                                            disabled=""
                                                                            aria-controls="P1736094344_table"
                                                                            title="Select a year">
                                                                            <option value="2009">2009</option>
                                                                            <option value="2010">2010</option>
                                                                            <option value="2011">2011</option>
                                                                            <option value="2012">2012</option>
                                                                            <option value="2013">2013</option>
                                                                            <option value="2014">2014</option>
                                                                            <option value="2015">2015</option>
                                                                            <option value="2016" selected="">2016
                                                                            </option>
                                                                            <option value="2017">2017</option>
                                                                            <option value="2018">2018</option>
                                                                            <option value="2019">2019</option>
                                                                            <option value="2020">2020</option>
                                                                            <option value="2021">2021</option>
                                                                            <option value="2022">2022</option>
                                                                            <option value="2023">2023</option>
                                                                        </select>
                                                                        <div class="picker__nav--prev" data-nav="-1"
                                                                             role="button"
                                                                             aria-controls="P1736094344_table"
                                                                             title="Previous month"></div>
                                                                        <div class="picker__nav--next" data-nav="1"
                                                                             role="button"
                                                                             aria-controls="P1736094344_table"
                                                                             title="Next month"></div>
                                                                    </div>
                                                                    <table class="picker__table" id="P1736094344_table"
                                                                           role="grid" aria-controls="P1736094344"
                                                                           aria-readonly="true">
                                                                        <thead>
                                                                        <tr>
                                                                            <th class="picker__weekday" scope="col"
                                                                                title="Sunday">S
                                                                            </th>
                                                                            <th class="picker__weekday" scope="col"
                                                                                title="Monday">M
                                                                            </th>
                                                                            <th class="picker__weekday" scope="col"
                                                                                title="Tuesday">T
                                                                            </th>
                                                                            <th class="picker__weekday" scope="col"
                                                                                title="Wednesday">W
                                                                            </th>
                                                                            <th class="picker__weekday" scope="col"
                                                                                title="Thursday">T
                                                                            </th>
                                                                            <th class="picker__weekday" scope="col"
                                                                                title="Friday">F
                                                                            </th>
                                                                            <th class="picker__weekday" scope="col"
                                                                                title="Saturday">S
                                                                            </th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--outfocus"
                                                                                    data-pick="1477803600000"
                                                                                    role="gridcell"
                                                                                    aria-label="30 October, 2016">30
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--outfocus"
                                                                                    data-pick="1477893600000"
                                                                                    role="gridcell"
                                                                                    aria-label="31 October, 2016">31
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--infocus"
                                                                                    data-pick="1477980000000"
                                                                                    role="gridcell"
                                                                                    aria-label="1 November, 2016">1
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--infocus"
                                                                                    data-pick="1478066400000"
                                                                                    role="gridcell"
                                                                                    aria-label="2 November, 2016">2
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--infocus"
                                                                                    data-pick="1478152800000"
                                                                                    role="gridcell"
                                                                                    aria-label="3 November, 2016">3
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--infocus"
                                                                                    data-pick="1478239200000"
                                                                                    role="gridcell"
                                                                                    aria-label="4 November, 2016">4
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--infocus picker__day--today picker__day--highlighted"
                                                                                    data-pick="1478325600000"
                                                                                    role="gridcell"
                                                                                    aria-label="5 November, 2016"
                                                                                    aria-activedescendant="true">5
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--infocus"
                                                                                    data-pick="1478412000000"
                                                                                    role="gridcell"
                                                                                    aria-label="6 November, 2016">6
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--infocus"
                                                                                    data-pick="1478498400000"
                                                                                    role="gridcell"
                                                                                    aria-label="7 November, 2016">7
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--infocus"
                                                                                    data-pick="1478584800000"
                                                                                    role="gridcell"
                                                                                    aria-label="8 November, 2016">8
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--infocus"
                                                                                    data-pick="1478671200000"
                                                                                    role="gridcell"
                                                                                    aria-label="9 November, 2016">9
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--infocus"
                                                                                    data-pick="1478757600000"
                                                                                    role="gridcell"
                                                                                    aria-label="10 November, 2016">10
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--infocus"
                                                                                    data-pick="1478844000000"
                                                                                    role="gridcell"
                                                                                    aria-label="11 November, 2016">11
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--infocus"
                                                                                    data-pick="1478930400000"
                                                                                    role="gridcell"
                                                                                    aria-label="12 November, 2016">12
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--infocus"
                                                                                    data-pick="1479016800000"
                                                                                    role="gridcell"
                                                                                    aria-label="13 November, 2016">13
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--infocus"
                                                                                    data-pick="1479103200000"
                                                                                    role="gridcell"
                                                                                    aria-label="14 November, 2016">14
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--infocus"
                                                                                    data-pick="1479189600000"
                                                                                    role="gridcell"
                                                                                    aria-label="15 November, 2016">15
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--infocus"
                                                                                    data-pick="1479276000000"
                                                                                    role="gridcell"
                                                                                    aria-label="16 November, 2016">16
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--infocus"
                                                                                    data-pick="1479362400000"
                                                                                    role="gridcell"
                                                                                    aria-label="17 November, 2016">17
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--infocus"
                                                                                    data-pick="1479448800000"
                                                                                    role="gridcell"
                                                                                    aria-label="18 November, 2016">18
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--infocus"
                                                                                    data-pick="1479535200000"
                                                                                    role="gridcell"
                                                                                    aria-label="19 November, 2016">19
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--infocus"
                                                                                    data-pick="1479621600000"
                                                                                    role="gridcell"
                                                                                    aria-label="20 November, 2016">20
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--infocus"
                                                                                    data-pick="1479708000000"
                                                                                    role="gridcell"
                                                                                    aria-label="21 November, 2016">21
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--infocus"
                                                                                    data-pick="1479794400000"
                                                                                    role="gridcell"
                                                                                    aria-label="22 November, 2016">22
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--infocus"
                                                                                    data-pick="1479880800000"
                                                                                    role="gridcell"
                                                                                    aria-label="23 November, 2016">23
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--infocus"
                                                                                    data-pick="1479967200000"
                                                                                    role="gridcell"
                                                                                    aria-label="24 November, 2016">24
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--infocus"
                                                                                    data-pick="1480053600000"
                                                                                    role="gridcell"
                                                                                    aria-label="25 November, 2016">25
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--infocus"
                                                                                    data-pick="1480140000000"
                                                                                    role="gridcell"
                                                                                    aria-label="26 November, 2016">26
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--infocus"
                                                                                    data-pick="1480226400000"
                                                                                    role="gridcell"
                                                                                    aria-label="27 November, 2016">27
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--infocus"
                                                                                    data-pick="1480312800000"
                                                                                    role="gridcell"
                                                                                    aria-label="28 November, 2016">28
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--infocus"
                                                                                    data-pick="1480399200000"
                                                                                    role="gridcell"
                                                                                    aria-label="29 November, 2016">29
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--infocus"
                                                                                    data-pick="1480485600000"
                                                                                    role="gridcell"
                                                                                    aria-label="30 November, 2016">30
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--outfocus"
                                                                                    data-pick="1480572000000"
                                                                                    role="gridcell"
                                                                                    aria-label="1 December, 2016">1
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--outfocus"
                                                                                    data-pick="1480658400000"
                                                                                    role="gridcell"
                                                                                    aria-label="2 December, 2016">2
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--outfocus"
                                                                                    data-pick="1480744800000"
                                                                                    role="gridcell"
                                                                                    aria-label="3 December, 2016">3
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--outfocus"
                                                                                    data-pick="1480831200000"
                                                                                    role="gridcell"
                                                                                    aria-label="4 December, 2016">4
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--outfocus"
                                                                                    data-pick="1480917600000"
                                                                                    role="gridcell"
                                                                                    aria-label="5 December, 2016">5
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--outfocus"
                                                                                    data-pick="1481004000000"
                                                                                    role="gridcell"
                                                                                    aria-label="6 December, 2016">6
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--outfocus"
                                                                                    data-pick="1481090400000"
                                                                                    role="gridcell"
                                                                                    aria-label="7 December, 2016">7
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--outfocus"
                                                                                    data-pick="1481176800000"
                                                                                    role="gridcell"
                                                                                    aria-label="8 December, 2016">8
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--outfocus"
                                                                                    data-pick="1481263200000"
                                                                                    role="gridcell"
                                                                                    aria-label="9 December, 2016">9
                                                                                </div>
                                                                            </td>
                                                                            <td role="presentation">
                                                                                <div
                                                                                    class="picker__day picker__day--outfocus"
                                                                                    data-pick="1481349600000"
                                                                                    role="gridcell"
                                                                                    aria-label="10 December, 2016">10
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="picker__footer">
                                                                    <button class="btn-flat picker__today" type="button"
                                                                            data-pick="1478325600000" disabled=""
                                                                            aria-controls="P1736094344">Today
                                                                    </button>
                                                                    <button class="btn-flat picker__clear" type="button"
                                                                            data-clear="1" disabled=""
                                                                            aria-controls="P1736094344">Clear
                                                                    </button>
                                                                    <button class="btn-flat picker__close" type="button"
                                                                            data-close="true" disabled=""
                                                                            aria-controls="P1736094344">Close
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <label for="dob">DOB</label>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="file-field input-field col s6">
                                            <input class="file-path validate" type="text">
                                            <div class="btn">
                                                <span>Age</span>
                                                <input type="file">
                                            </div>
                                        </div>
                                        <div class="input-field col s6">
                                            <span>Image</span>
                                            <p class="range-field">
                                                <input type="range" id="test5" min="0" max="100"><span
                                                    class="thumb"><span class="value"></span></span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="message5" class="materialize-textarea"
                                                      length="120"></textarea>
                                            <label for="message">Message</label>
                                            <span class="character-counter"
                                                  style="float: right; font-size: 12px; height: 1px;"></span></div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <button class="btn cyan waves-effect waves-light right" type="submit"
                                                        name="action">Submit
                                                    <i class="mdi-content-send right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end container-->
        </section>
        <!-- END CONTENT -->

        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START RIGHT SIDEBAR NAV-->
        <aside id="right-sidebar-nav">
            <ul id="chat-out" class="side-nav rightside-navigation">
                <li class="li-hover">
                    <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i
                            class="mdi-navigation-close"></i></a>
                    <div id="right-search" class="row">
                        <form class="col s12">
                            <div class="input-field">
                                <i class="mdi-action-search prefix"></i>
                                <input id="icon_prefix" type="text" class="validate">
                                <label for="icon_prefix">Search</label>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="li-hover">
                    <ul class="chat-collapsible" data-collapsible="expandable">
                        <li>
                            <div class="collapsible-header teal white-text active"><i class="mdi-social-whatshot"></i>Recent
                                Activity
                            </div>
                            <div class="collapsible-body recent-activity">
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i
                                            class="mdi-action-add-shopping-cart"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">just now</a>
                                        <p>Jim Doe Purchased new equipments for zonal office.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i
                                            class="mdi-device-airplanemode-on"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">Yesterday</a>
                                        <p>Your Next flight for USA will be on 15th August 2015.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i
                                            class="mdi-action-settings-voice"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">5 Days Ago</a>
                                        <p>Natalya Parker Send you a voice mail for next conference.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-store"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">Last Week</a>
                                        <p>Jessy Jay open a new store at S.G Road.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i
                                            class="mdi-action-settings-voice"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">5 Days Ago</a>
                                        <p>Natalya Parker Send you a voice mail for next conference.</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header light-blue white-text active"><i
                                    class="mdi-editor-attach-money"></i>Sales Repoart
                            </div>
                            <div class="collapsible-body sales-repoart">
                                <div class="sales-repoart-list  chat-out-list row">
                                    <div class="col s8">Target Salse</div>
                                    <div class="col s4"><span id="sales-line-1"></span>
                                    </div>
                                </div>
                                <div class="sales-repoart-list chat-out-list row">
                                    <div class="col s8">Payment Due</div>
                                    <div class="col s4"><span id="sales-bar-1"></span>
                                    </div>
                                </div>
                                <div class="sales-repoart-list chat-out-list row">
                                    <div class="col s8">Total Delivery</div>
                                    <div class="col s4"><span id="sales-line-2"></span>
                                    </div>
                                </div>
                                <div class="sales-repoart-list chat-out-list row">
                                    <div class="col s8">Total Progress</div>
                                    <div class="col s4"><span id="sales-bar-2"></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header red white-text"><i class="mdi-action-stars"></i>Favorite
                                Associates
                            </div>
                            <div class="collapsible-body favorite-associates">
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt=""
                                                             class="circle responsive-img online-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Eileen Sideways</p>
                                        <p class="place">Los Angeles, CA</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt=""
                                                             class="circle responsive-img online-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Zaham Sindil</p>
                                        <p class="place">San Francisco, CA</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt=""
                                                             class="circle responsive-img offline-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Renov Leongal</p>
                                        <p class="place">Cebu City, Philippines</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt=""
                                                             class="circle responsive-img online-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Weno Carasbong</p>
                                        <p>Tokyo, Japan</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt=""
                                                             class="circle responsive-img offline-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Nusja Nawancali</p>
                                        <p class="place">Bangkok, Thailand</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </aside>
        <!-- LEFT RIGHT SIDEBAR NAV-->

    </div>
    <!-- END WRAPPER -->

</div>
<!-- END MAIN -->


<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START FOOTER -->
<footer class="page-footer">
    <div class="container">

    </div>
    <div class="footer-copyright">
        <div class="container">
            Copyright © 2015 <a class="grey-text text-lighten-4"
                                href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank">GeeksLabs</a>
            All rights reserved.
            <span class="right"> Design and Developed by <a class="grey-text text-lighten-4"
                                                            href="http://geekslabs.com/">GeeksLabs</a></span>
        </div>
    </div>
</footer>
<!-- END FOOTER -->


<!-- ================================================
Scripts
================================================ -->

<!-- jQuery Library -->
<script type="text/javascript" src="dist/js/plugins/jquery-1.11.2.min.js"></script>
<!--materialize js-->
<script type="text/javascript" src="dist/js/materialize.min.js"></script>
<!--scrollbar-->
<script type="text/javascript" src="dist/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>


<!-- sparkline -->
<script type="text/javascript" src="dist/js/plugins/sparkline/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="dist/js/plugins/sparkline/sparkline-script.js"></script>

<!--jvectormap-->
<script type="text/javascript" src="dist/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script type="text/javascript" src="dist/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script type="text/javascript" src="dist/js/plugins/jvectormap/vectormap-script.js"></script>


<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="dist/js/plugins.min.js"></script>
<!--custom-script.js - Add your own theme custom JS-->
<script type="text/javascript" src="dist/js/custom-script.js"></script>
<!-- Toast Notification -->

</body>


<!-- Mirrored from demo.geekslabs.com/materialize/v3.1/ by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 07 Oct 2016 13:34:40 GMT -->
</html>
=======
<?php
echo "formulario registro proceso";

?>
>>>>>>> origin/master
