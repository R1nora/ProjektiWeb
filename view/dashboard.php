<?php
session_start();
require_once '../controller/teamsController.php';
require_once '../controller/sliderController.php';
require_once '../controller/sliderController2.php';
require_once '../controller/sliderController3.php';
require_once '../controller/reviewsController.php';
require_once '../controller/pricingController.php';
require_once '../controller/ofertatController.php';
require_once '../controller/userController.php';
require_once '../controller/tabelaofertController.php';
?>


<style>
*{
  font-family: sans-serif; 
}

.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  width: 100%;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.link{
    text-decoration: none;
    color: red;
    font-size: 17px;
}
.first-link{
  color: black;
  font-size: 22px;
  padding-left: 50%;
  position: relative;
  top: 20px;
}
.top-links{
    font-size: 30px;
    color: black;
    padding: 30px;
    text-decoration: none;
}
</style>


    <table class="content-table">
        <thead>
        <tr>
            <th>USERS</th>
            <th></th>
            <th></th>

          </tr>
            <tr>
              <th>Email</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $u=new userController;
          $users= $u->readData();
          foreach($users as $user): ?>
          <tr>
            <td><?php echo $user['email'];?></td>
            <td><a href="edit-1.php?id=<?php echo $user['id_user']; ?>">Edit</a></td>
            <td><a href="delete-1.php?id=<?php echo $user['id_user']; ?>">Delete</a></td>
          </tr>
          <?php endforeach;?>
        </tbody>
    </table>
  

    <table class="content-table">
        <thead>
            <tr>
            <th>Id_teams</th>
              <th>Linku</th>
              <th>Image</th>
              <th>Emri</th>
              <th>Kategoria</th>
              <th>Pershkrimi</th>
              <th>edit</th>
              <th>delete</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $team=new teamsController;
          $allTeams= $team->readData();
          foreach($allTeams as $teams): ?>
          <tr>
            <td><?php echo $teams['id_teams']; ?></td>
            <td><?php echo $teams['linku'];?></td>
            <td><?php echo $teams['foto'];?></td>
            <td><?php echo $teams['emri'];?></td>
            <td><?php echo $teams['kategoria'];?></td>
            <td><?php echo $teams['pershkrimi'];?></td>
            <td><a href="edit-teams.php?id=<?php echo $teams['id_teams']; ?>">Edit</a></td>
            <td><a href="delete-teams.php?id=<?php echo $teams['id_teams']; ?>">Delete</a></td>
          </tr>
          <?php endforeach;?>
        </tbody>
    </table>

    <table class="content-table">
        <thead>
            <tr>
            <th>Id_slider</th>

              <th>Foto</th>
              <th>Nenkategoria</th>
              <th>edit</th>
              <th>delete</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $slide=new sliderController;
          $alls= $slide->readData();
          foreach($alls as $slider): ?>
          <tr>
            <td><?php echo $slider['id_slider']; ?></td>
            <td><?php echo $slider['foto'];?></td>
            <td><?php echo $slider['nenkategoria'];?></td>
            <td><a href="edit-slider.php?id=<?php echo $slider['id_slider']; ?>">Edit</a></td>
            <td><a href="delete-slider.php?id=<?php echo $slider['id_slider']; ?>">Delete</a></td>
          </tr>
          <?php endforeach;?>
        </tbody>
    </table>
    <table class="content-table">
        <thead>
            <tr>
            <th>Id_slider</th>
            <th>Linku</th>
              <th>Foto</th>
              <th>Nenkategoria</th>
              <th>edit</th>
              <th>delete</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $slide2=new sliderController2;
          $alls2= $slide2->readData();
          foreach($alls2 as $slider22): ?>
          <tr>
            <td><?php echo $slider22['id_slider']; ?></td>
            <td><?php echo $slider22['linku']; ?></td>
            <td><?php echo $slider22['foto'];?></td>
            <td><?php echo $slider22['nenkategoria'];?></td>
            <td><a href="edit-slider2.php?id=<?php echo $slider22['id_slider']; ?>">Edit</a></td>
            <td><a href="delete-slider2.php?id=<?php echo $slider22['id_slider']; ?>">Delete</a></td>
          </tr>
          <?php endforeach;?>
        </tbody>
    </table>
    <table class="content-table">
        <thead>
            <tr>
            <th>Id_slider</th>
            <th>Linku</th>
              <th>Foto</th>
              <th>Nenkategoria</th>
              <th>edit</th>
              <th>delete</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $slide3=new sliderController3;
          $alls3= $slide3->readData();
          foreach($alls3 as $slider33): ?>
          <tr>
            <td><?php echo $slider33['id_slider']; ?></td>
            <td><?php echo $slider33['linku']; ?></td>
            <td><?php echo $slider33['foto'];?></td>
            <td><?php echo $slider33['nenkategoria'];?></td>
            <td><a href="edit-slider3.php?id=<?php echo $slider33['id_slider']; ?>">Edit</a></td>
            <td><a href="delete-slider3.php?id=<?php echo $slider33['id_slider']; ?>">Delete</a></td>
          </tr>
          <?php endforeach;?>
        </tbody>
    </table>
    <table class="content-table">
        <thead>
            <tr>
            <th>Id_reviews</th>
              <th>Emri</th>
              <th>Rating</th>
              <th>Pershkrimi</th>
              <th>edit</th>
              <th>delete</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $rev=new reviewsController;
          $reviews= $rev->readData();
          foreach($reviews as $reviews1): ?>
          <tr>
            <td><?php echo $reviews1['id_reviews']; ?></td>
            <td><?php echo $reviews1['emri']; ?></td>
            <td><?php echo $reviews1['rating'];?></td>
            <td><?php echo $reviews1['pershkrimi'];?></td>
            <td><a href="edit-reviews.php?id=<?php echo $reviews1['id_reviews']; ?>">Edit</a></td>
            <td><a href="delete-reviews.php?id=<?php echo $reviews1['id_reviews']; ?>">Delete</a></td>
          </tr>
          <?php endforeach;?>
        </tbody>
    </table>
    <table class="content-table">
        <thead>
            <tr>
            <th>Id_pricing</th>
              <th>Lloji</th>
              <th>Vlera</th>
              <th>Kategoria</th>
              <th>sherbimi1</th>
            <th>sherbimi2</th>
            <th>sherbimi3</th>
            <th>sherbimi4</th>
              <th>edit</th>
              <th>delete</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $price=new pricingController;
          $pricing= $price->readData();
          foreach($pricing as $prices): ?>
          <tr>
            <td><?php echo $prices['id_pricing']; ?></td>
            <td><?php echo $prices['Lloji'];?></td>
            <td><?php echo $prices['Vlera'];?></td>
            <td><?php echo $prices['Kategoria'];?></td>
            <td><?php echo $prices['sherbimi1'];?></td>
            <td><?php echo $prices['sherbimi2'];?></td>
            <td><?php echo $prices['sherbimi3'];?></td>
            <td><?php echo $prices['sherbimi4'];?></td>
            <td><a href="edit-pricing.php?id=<?php echo $prices['id_pricing']; ?>">Edit</a></td>
            <td><a href="delete-pricing.php?id=<?php echo $prices['id_pricing']; ?>">Delete</a></td>
          </tr>
          <?php endforeach;?>
        </tbody>
    </table>
  
    <table class="content-table">
        <thead>
            <tr>
            <th>Id_oferta</th>
              <th>titulli</th>
              <th>nentitulli</th>
              <th>cmimipazbritje</th>
              <th>zbritja</th>
              <th>cmimimezbritje</th>
              <th>renew</th>
              <th>tabelaofert</th>
              <th>edit</th>
              <th>delete</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $team=new ofertatController;
          $allTeams= $team->readData();
          foreach($allTeams as $teams): ?>
          <tr>
            <td><?php echo $teams['id_oferta']; ?></td>
            <td><?php echo $teams['titulli'];?></td>
            <td><?php echo $teams['nentitulli'];?></td>
            <td><?php echo $teams['cmimipazbritje'];?></td>
            <td><?php echo $teams['zbritja'];?></td>
            <td><?php echo $teams['cmimimezbritje'];?></td>
            <td><?php echo $teams['renew'];?></td>
            <td><?php echo $teams['id_tabela'];?></td>
            <td><a href="edit-ofertat.php?id=<?php echo $teams['id_oferta']; ?>">Edit</a></td>
            <td><a href="delete-ofertat.php?id=<?php echo $teams['id_oferta']; ?>">Delete</a></td>
          </tr>
          <?php endforeach;?>
        </tbody>
    </table>
    <table class="content-table">
        <thead>
            <tr>
            <th>Id_tabela</th>
            <th>Pershkrimi1</th>
            <th>Pershkrimi2</th>
            <th>Pershkrimi3</th>
            <th>Pershkrimi4</th>
            <th>Pershkrimi5</th>
            <th>Pershkrimi6</th>
            <th>Pershkrimi7</th>
            <th>Pershkrimi8</th>
            <th>Pershkrimi9</th>
            <th>Pershkrimi10</th>
            <th>Pershkrimi11</th>
            <th>Pershkrimi12</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $tabela=new tabelaofertController;
          $alltabela= $tabela->readData();
          foreach($alltabela as $tab): ?>
          <tr>
            <td><?php echo $tab['id_tabela']; ?></td>
            <td><?php echo $tab['p1'];?></td>
            <td><?php echo $tab['p2'];?></td>
            <td><?php echo $tab['p3'];?></td>
            <td><?php echo $tab['p4'];?></td>
            <td><?php echo $tab['p5'];?></td>
            <td><?php echo $tab['p6'];?></td>
            <td><?php echo $tab['p7'];?></td>
            <td><?php echo $tab['p8'];?></td>
            <td><?php echo $tab['p9'];?></td>
            <td><?php echo $tab['p10'];?></td>
            <td><?php echo $tab['p11'];?></td>
            <td><?php echo $tab['p12'];?></td>
            <td><a href="edit-tabelaofert.php?id=<?php echo $tab['id_tabela']; ?>">Edit</a></td>
            <td><a href="delete-tabelaofert.php?id=<?php echo $tab['id_tabela']; ?>">Delete</a></td>
          </tr>
          <?php endforeach;?>
        </tbody>
    </table>

</div>