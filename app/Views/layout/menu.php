
<li class="menu-header text-center">Main Menu</li>

<li class="nav-item  text-dark">
        <a href="<?=site_url('inventaris')?>" class="nav-link"><i class="fas fa-list"></i><span>Inventaris HT</span></a>
</li>
<li> 
        <a href="<?=site_url('maintenance')?>" class="nav-link"><i class="fas fa-calendar-check"></i><span>Maintenance HT</span></a>
</li>
<li>        
        <?php if(userLogin()->info_user=='Administrator') : ?>        
                <a href="<?=site_url('users')?>" class="nav-link"><i class="fas fa-users-cog"></i> <span>Manage User</span></a>
        <?php endif; ?>
</li>        