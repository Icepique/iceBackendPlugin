<?php
/**
 * @var IceBackenduser $sf_user
 *
 * @var array $items
 * @var array $items_in_menu
 */
?>

<ul class="dropdown-menu">
<?php foreach ($items as $key => $item): ?>
  <?php if (iceBackendModule::hasPermission($item, $sf_user)): ?>
    <?php if (($items_in_menu && $item['in_menu']) || (!$items_in_menu && !$item['in_menu'])): ?>
      <li>
        <a href="<?= url_for($item['url']) ?>" title="<?= __($item['name'], array(), 'ice_backend_plugin'); ?>">
          <span><?= __($item['name'], array(), 'ice_backend_plugin'); ?></span>
        </a>
      </li>
    <?php endif; ?>
  <?php endif; ?>
<?php endforeach; ?>
</ul>
