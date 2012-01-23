[?php if ($sf_user->hasFlash('notice')): ?]
  <div class="alert-message success fade in" data-alert="alert">
    <a class="close" href="#">×</a>
    <p><strong>SUCCESS:</strong> [?php echo __($sf_user->getFlash('notice'), array(), 'ice_backend_plugin') ?]</p>
  </div>
[?php endif; ?]

[?php if ($sf_user->hasFlash('error')): ?]
  <div class="alert-message error fade in" data-alert="alert">
    <a class="close" href="#">×</a>
    <p><strong>ERROR:</strong> [?php echo __($sf_user->getFlash('error'), array(), 'ice_backend_plugin') ?]</p>
  </div>
[?php endif; ?]
