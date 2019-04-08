<?php
foreach($query_urn->result() as $row){
  $username = $row->username;
?>
<h1 class="h2"><?= $username ?>'s Dashboard</h1>
<?php } ?>