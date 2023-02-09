<?php
//including the database connection file
require_once('./db_operations/connect.php');

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM user ORDER BY id DESC"); // mysql_query is deprecated

$result = mysqli_query($con, "SELECT * FROM annonce  ORDER BY id DESC ");
// using mysqli_query instead
//ORDER BY id DESC
//WHERE id = (
// SELECT MAX(id) FROM usertable)
?>

<link rel="stylesheet" href="./css/home.css">

<div class="home-wrapper">
    <div class="descpription">
        <!-- <img src="./images/logoBlack.svg" alt="logo"> -->
        <h1>Application Agence Immobiliere <br> Bienvenue chez nous</h1>
        <p>Trouver la maison de vos reves chez notre agence immobiliere
        </p>

    </div>
    <h2>TITLE HEADING</h2>
    <h5>Title description, juin, 2022</h5>
    <div class="fakeimg">
        <!-- <section class="room-details-section spad"> -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="room-details-item">
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
                    </div>
                </div>
            </div>
            <table id="myTable">
                <tbody>
                    <tr bgcolor='#333'>
                        <th>
                            <h4>proporite</h4>
                        </th>
                        <th>
                            <h4>emplacement</h4>
                        </th>
                        <th>
                            <h4>nbr_chambr</h4>
                        </th>
                        <th>
                            <h4>description</h4>
                        </th>
                        <th>
                            <h4>prix</h4>
                        </th>
                        <th>
                            <h4>photo</h4>
                        </th>
                    </tr>
                    <!-- </section> -->
                    <?php while ($res = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $res['proporite'] ?></td>
                            <td><?php echo $res['emplacement'] ?></td>
                            <td><?php echo $res['nbr_chambr'] ?></td>
                            <td><?php echo $res['description'] ?></td>
                            <td><?php echo $res['prix'] ?></td>
                            <td><?php echo $res['photo'] ?></td>
                        </tr>
                    <?php } ?>

                </tbody>

            </table>
        </div>
    </div>
    <!-- <div class="rd-reviews">
    </div> -->