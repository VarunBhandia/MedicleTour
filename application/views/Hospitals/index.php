
<?php $this->load->view('Include/header'); 

foreach($hospitals as $hospital)
{
?>
<div class="card">
  <div class="card-body">
    <h5 class="card-title"><?php echo $hospital->hname; ?></h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<?php
}
?>

