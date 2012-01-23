<?php if (count($items)): ?>
  <?php include_partial('dash_list', array('items' => $items)); ?>
<?php endif; ?>
<?php if (count($categories)): ?>
  <?php foreach ($categories as $name => $category): ?>
    <?php if (iceBackendModule::hasPermission($category, $sf_user)): ?>
    <fieldset>
      <h2><?= __(isset($category['name']) ? $category['name'] : $name, array(), 'ice_backend_plugin'); ?></h2>
      <?php include_partial('dash_list', array('items' => $category['items'])); ?>
    </fieldset>
    <?php endif; ?>
  <?php endforeach; ?>
<?php endif; ?>
