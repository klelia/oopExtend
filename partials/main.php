<div class="container">

<div><?php echo $iopremium->name ?></div>
<div><?php echo $iopremium->membership->getMembershipDetails() ?></div>

<div><?php echo $io->name ?></div>
<div><?php echo $io->get_discount(); ?></div>
<div><?php echo User::country ?></div>
</div>