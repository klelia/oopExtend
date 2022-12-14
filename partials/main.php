<div class="container">

<div><?php echo $userPremium->name ?></div>
<div><?php echo $userPremium->membership->getMembershipDetails() ?></div>

<div><?php echo $user->name ?></div>
<div><?php echo $user->get_discount(); ?></div>
<div><?php echo User::country ?></div>
</div>