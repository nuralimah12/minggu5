<!DOCTYPE HTML>
<html>
    <head>
      <link rel="stylesheet" type="text.css" href="style.css"/> 
    </head>
    <table>
     <tr>
        <th>Judul Film</th>
        <th>Tahun</th>
        <th>Rating</th>
    </tr>
        
     <?php
        $movie = array(
            array ("Avengers: Invinity War", 2018, 8.7),
            array ("The Avengers", 2012, 8.1),
            array("Guardians of the Galaxy", 2014, 8.1),
            array ("Iron Man", 2008, 7.9)
            );

           
        foreach($movie as $key){
                 echo'<tr>
                        <td>'.$key[0].'<td>
                        <td>'.$key[1].'<td>
                        <td>'.$key[2].'<td>
                        <tr>';
            }

        
        ?>

    </table>
</html>