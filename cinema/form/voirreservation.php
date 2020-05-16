<div class="control-group">

  <?php
                          $bdd= new PDO('mysql:host=localhost;dbname=cinema_site;charset=utf8','root','');
                          $rep=$bdd->query('SELECT * from reservation');
                          $donne=$rep->fetchall();
                          foreach ($donne as $value) {
                              echo "ID : ".$value['id']." "."NOM : ".$value['nom']." "."DATE : ".$value['date']." "."HEURE : ".$value['heur'].  " "."FILM : ".$value['film'] ;
                          }

                          ?> <br/><br/>


</div>
