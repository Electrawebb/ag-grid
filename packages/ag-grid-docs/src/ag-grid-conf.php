<?php 
include_once 'includes/html-helpers.php';
gtm_data_layer('about');
?>
<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <?php

    meta_and_links("ag-Conf London and New York", "About ag-Grid", "ag-Grid is a feature-rich datagrid available in Free or Enterprise versions. This is the story of ag-Grid and explains our mission, where we came from and who we are.", true);
    ?>
    <link rel="stylesheet" href="dist/homepage.css">
</head>

<body>
    <header id="nav" class="compact">
        <?php 
        $version = 'latest';
        include './includes/navbar.php';
        ?>
    </header>

    <div class="info-page">
        <br>
        <img src="images/agldnyc2.png" style="width: 100%">

        <div>
            <section>
                <p class="text-center">
                    <h1 style="text-align: center;">
                        ag-Grid Conf
                    </h1>

                    <p class="lead" align="center">
                        Where CTO's, Senior Developers, Developers and Product Managers serious about JavaScript data <br>presentation can learn more about ag-Grid and share their experiences with the ag-Grid team. 
                    </p>

                    <div class="container">
                      <div class="row">
                        <div class="col-sm"  style="text-align: center;"">
                            <h2>
                                New York
                            </h2>
                            October 10th 2018
                            <br>
                            <a href="https://www.eventbrite.com/e/ag-grid-conf-london-tickets-49732217401" target="_blank"><button type="button" class="btn btn-primary" style="margin-top: 10px">Register for New York</button></a>
                        </div>
                        <div class="col-sm"  style="text-align: center";>
                            <h2>
                                London
                            </h2>
                            November 13th 2018
                            <br>
                            <a href="https://www.eventbrite.com/e/ag-grid-conf-london-tickets-49732217401" target="_blank"><button type="button" class="btn btn-primary" style="margin-top: 10px">Register for London</button></a>
                        </div>
                    </div>
                </div>

                <br>

                <h4 class="text-center"> 
                    No charge, but you must register
                </h4>
                <div>
                </div>
                <br>
                <div style="max-width: : 100%">
                    <h2 class="text-center" style="background-color: whitesmoke;padding-top: 10px">
                        Speakers
                    </p>
                    <hr>
                </h2>

                <br>
                <div class="inline-container team" align="center">
                    <div class="row">

                        <div class="col-md-4">
                            <div>
                                <img src='images/team/niall.jpg' alt="Niall Crosby, CEO"/>
                            </div>
                            <h3>Niall Crosby</h3>
                            <h4>Founder, CEO & CTO, ag-Grid</h4>

                        </div>

                        <div class="col-md-4">
                            <div>
                                <img src='images/team/sean.jpg' alt="Sean Landsman, Lead Developer"/>
                            </div>
                            <h3>Sean Landsman</h3>
                            <h4>Javascript Frameworks Guru, ag-Grid</h4>

                        </div>

                        <div class="col-md-4">
                            <div>
                                <img src='images/team/rob.jpg' alt="Alberto Gutierrez, Lead Developer"/>
                            </div>
                            <h3>Robert Clarke </h3>
                            <h4>Enterprise Applications Guru, ag-Grid</h4>

                        </div>
                    </div>
                    <br>
                    <hr>

                    <h2 class="text-center" style="background-color: whitesmoke;padding-top: 10px">
                        New York Schedule
                        <hr>
                    </h2>
                    <hr>

                    <head>
                        <style>
                        table, th, td {
                            border: 1px solid black;
                            border-collapse: collapse;
                        }
                        th, td {
                            padding: 15px;
                        }
                    </style>
                </head>

                <table style="width:60%">
                  <tr style="background-color: #e2f2ff">
                    <th align="center">Time</th>
                    <th>Conference Program</th> 
                </tr>
                                <tr>
                    <td>2:00pm - 3:00pm</td>
                    <td><strong>Meet the Technical Team & Networking</strong>
                        <br>
                    Networking, free time, chat to the ag-Grid team, ask anything</td>
                </tr>
                <tr>
                    <td>3:00pm - 3:50pm</td>
                    <td><strong>Overview of Tricky Features</strong>
                        <br>
                    Technical look into ag-Grid's features with the Core team, followed by a Q&A</td>
                </tr>
                                <tr>
                    <td>3:50pm - 4:00pm</td>
                    <td>[Break]</td>
                </tr>
                <tr>
                    <td style="background-color: whitesmoke">4:00pm - 4:25pm</td>
                    <td style="background-color: whitesmoke"><strong>ag-Grid - Complexity and Performance</strong>
                        <br>
                        Looking at the challenges of building a component like ag-Grid, the internal framework ag-Grid now uses, and how to best squeeze ag-Grid for performance.
                    </td>
                </tr>
                <tr>
                    <td>4:25pm - 4:50pm</td>
                    <td><strong>Big Data with the Server Side Row Model</strong>
                        <br>
                        Big data is no common place in industry, so how do you best show big data in ag-Grid? Introducing the Server Side Row Model, with examples connecting to Oracle and Apache Spark.
                    </td>
                </tr>
                                                <tr>
                    <td>4:50pm - 5:00pm</td>
                    <td>[Break]</td>
                </tr>
                <tr>
                    <td style="background-color: whitesmoke">5:00 - 5:30 PM</td>
                    <td style="background-color: whitesmoke"><strong>Supporting the Frameworks</strong>
                        <br>
                        Showing how ag-Grid is committed to the rapid changing world of JavaScript frameworks.
                    </tr>
                    <tr>
                        <td>5:30pm - 6:00pm</td>
                        <td><strong>Origins of ag-Grid, Current State, and Roadmap</strong>
                            <br>
                            The story of ag-Grid, where we are, where we are going.
                        </tr>
                                            <tr>
                        <td>6:00pm - 8:00pm</td>
                        <td><strong>Networking, Drinks, Bar Tab and Food.</strong>
                        </tr>
                    </table>
                    <br>
                    <p>
                        <strong>*Final Schedule TBC*</strong>
                    </p>
                    <hr>
                    <h2 class="text-center" style="background-color: whitesmoke;padding-top: 10px">
                        London Schedule
                        <hr>
                    </h2>


                                       <head>
                        <style>
                        table, th, td {
                            border: 1px solid black;
                            border-collapse: collapse;
                        }
                        th, td {
                            padding: 15px;
                        }
                    </style>
                </head>

                <table style="width:60%">
                  <tr style="background-color: #e2f2ff">
                    <th align="center">Time</th>
                    <th>Conference Program</th> 
                </tr>
                                <tr>
                    <td>2:00pm - 3:00pm</td>
                    <td><strong>Meet the Technical Team & Networking</strong>
                        <br>
                    Networking, free time, chat to the ag-Grid team, ask anything</td>
                </tr>
                <tr>
                    <td>3:00pm - 3:50pm</td>
                    <td><strong>Overview of Tricky Features</strong>
                        <br>
                    Technical look into ag-Grid's features with the Core team, followed by a Q&A</td>
                </tr>
                                <tr>
                    <td>3:50pm - 4:00pm</td>
                    <td>[Break]</td>
                </tr>
                <tr>
                    <td style="background-color: whitesmoke">4:00pm - 4:25pm</td>
                    <td style="background-color: whitesmoke"><strong>ag-Grid - Complexity and Performance</strong>
                        <br>
                        Looking at the challenges of building a component like ag-Grid, the internal framework ag-Grid now uses, and how to best squeeze ag-Grid for performance.
                    </td>
                </tr>
                <tr>
                    <td>4:25pm - 4:50pm</td>
                    <td><strong>Big Data with the Server Side Row Model</strong>
                        <br>
                        Big data is no common place in industry, so how do you best show big data in ag-Grid? Introducing the Server Side Row Model, with examples connecting to Oracle and Apache Spark.
                    </td>
                </tr>
                                                <tr>
                    <td>4:50pm - 5:00pm</td>
                    <td>[Break]</td>
                </tr>
                <tr>
                    <td style="background-color: whitesmoke">5:00 - 5:30 PM</td>
                    <td style="background-color: whitesmoke"><strong>Supporting the Frameworks</strong>
                        <br>
                        Showing how ag-Grid is committed to the rapid changing world of JavaScript frameworks.
                    </tr>
                    <tr>
                        <td>5:30pm - 6:00pm</td>
                        <td><strong>Origins of ag-Grid, Current State, and Roadmap</strong>
                            <br>
                            The story of ag-Grid, where we are, where we are going.
                        </tr>
                                            <tr>
                        <td>6:00pm - 8:00pm</td>
                        <td><strong>Networking, Drinks, Bar Tab and Food.</strong>
                        </tr>
                    </table>


                    <br>
                    <p>
                        <strong>*Final Schedule TBC*</strong>
                    </p>
                    <hr>
                    <br>



   <br><br>
   <div style="background-color: whitesmoke">
    <h2 class="text-center" style="background-color: whitesmoke;padding-top: 10px;padding-bottom: 10px">
        Tickets
    </h2>
    <div class="card">
      <div class="card-body">
        <p class="text-center">
            <div class="container">
              <div class="row">
                <div class="col-sm"  style="text-align: center;"">
                    <h3>
                        New York
                    </h3>
                    October 10th 2018
                    <br>
                    <a href="https://www.eventbrite.com/e/ag-grid-conf-london-tickets-49732217401" target="_blank"><button type="button" class="btn btn-primary">Register for London</button></a>
                </div>
                <div class="col-sm">
                    <p class="text-center"  style="text-align: center;""><br>

                        No charge, but you must register

                    </p>
                </div>
                <div class="col-sm"  style="text-align: center";>
                    <h3>
                        London
                    </h3>
                    November 13th 2018
                    <br>
                    <a href="https://www.eventbrite.com/e/ag-grid-conf-london-tickets-49732217401" target="_blank"><button type="button" class="btn btn-primary">Register for New York</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<br><br>

<?php include_once("./includes/footer.php"); ?>
<?php include_once("./includes/analytics.php"); ?>
</body>
</html>
