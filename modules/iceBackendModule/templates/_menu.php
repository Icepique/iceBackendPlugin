<?php
/**
 * @var IceBackendUser $sf_user
 * @var array $categories
 */
?>

<div id="topbar" class="topbar">
  <div class="fill">
    <div class="container">
      <a class="brand" href='<?php echo url_for('homepage') ?>'>
        <?php echo sfConfig::get('app_ice_backend_site', 'Backend'); ?>
      </a>
      <ul class="nav">
        <li><a href="/">Dashboard</a></li>
        <?php foreach ($categories as $name => $category): ?>
          <?php if (iceBackendModule::hasPermission($category, $sf_user)): ?>
            <?php if (iceBackendModule::hasItemsMenu($category['items'])): ?>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle"><?php echo isset($category['name']) ? $category['name'] : $name ?></a>
                 <?php include_partial('iceBackendModule/menu_list', array('items' => $category['items'], 'items_in_menu' => true)) ?>
              </li>
            <?php endif; ?>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>
