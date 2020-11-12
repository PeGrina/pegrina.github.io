<?
  if($_POST['username'] !== 'admin'){
    echo 'Error';
  }else{
    if($_POST['password'] !== 'fak123'){
      echo 'Error';
    }else{
      echo 'FLAG_NE_NRTJ:{1mp0st3rs_wAs_3j3ct3d}';
    }
  }
?>
