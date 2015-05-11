<?php
class sql1{
   function __construct(){
      global $db;
      $sql1 = 'select hd2013.UNITID, hd2013.INSTNM, ef2013a.EFTOTLW from hd2013 left join ef2013a on hd2013.UNITID=ef2013a.UNITID order by ef2013a DESC limit 10';

      $qry = $db->query($sql1);
      foreach($qry  as $row){
         echo $row[0].' '.$row[1].' '.$row[2].'</br>';
      }
   }
} 

class sql2{
   function __construct(){
      global $db;
      $sql2 = 'select hd2013.UNITID, hd2013.INSTNM, ef2013a.EFTOTLM from hd2013 left join ef2013a on hd2013.UNITID=ef2013a.UNITID order by ef2013a DESC limit 10';

      $qry = $db->query($sql2);
      foreach($qry  as $row){
         echo $row[0].' '.$row[1].' '.$row[2].'</br>';
      }
   }
}

class sql3{
   function __construct(){
      global $db;      
      $sql3 = 'select hd2013.UNITID, hd2013.INSTNM, f1213_f1a.F1H02 from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID order by f1213_f1a DESC limit 10';

      $qry = $db->query($sql3);
      foreach($qry  as $row){
         echo $row[0].' '.$row[1].' '.$row[2].'</br>';
      }
   }
}

class sql4{
   function __construct(){
      global $db;      
      $sql4 = 'select hd2013.UNITID, hd2013.INSTNM, ef2013c.EFRES01 from hd2013 left join ef2013c on hd2013.UNITID=ef2013c.UNITID order by ef2013c DESC limit 10';

      $qry = $db->query($sql4);
      foreach($qry  as $row){
         echo $row[0].' '.$row[1].' '.$row[2].'</br>';
      }
   }
}
 
class sql5{
   function __construct(){
      global $db;
      $sql5 = 'select hd2013.UNITID, hd2013.INSTNM, f1213_f1a.F1B09 from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID order by f1213_f1a DESC limit 10';

      $qry = $db->query($sql5);
      foreach($qry  as $row){
         echo $row[0].' '.$row[1].' '.$row[2].'</br>';
      }
   }
}

class sql6{
   function __construct(){
      global $db;     
$sql6 = 'select hd2013.UNITID, hd2013.INSTNM, f1213_f1a.F1B09 from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where f1213_f1a.F1B09> \’0\’ order by f1213_f1a AESC limit 10';

      $qry = $db->query($sql6);
      foreach($qry  as $row){
         echo $row[0].' '.$row[1].' '.$row[2].'</br>';
      }
   }
}

?>
