[?php if ($field->isPartial()): ?]
  [?php include_partial('<?php echo $this->getModuleName() ?>/'.$name, array('type' => 'filter', 'form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?]
[?php elseif ($field->isComponent()): ?]
  [?php include_component('<?php echo $this->getModuleName() ?>', $name, array('type' => 'filter', 'form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?]
[?php else: ?]
  <div class="span7" style="margin-left: 5px;">
    [?php echo $form[$name]->renderLabel($label) ?]
    <div class="input">
      [?php echo $form[$name]->renderError() ?]
      [?php echo $form[$name]->render($attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes) ?]

      [?php if ($help || $help = $form[$name]->renderHelp()): ?]
        <span class="help-block">
          [?php echo __($help, array(), '<?php echo $this->getI18nCatalogue() ?>') ?]
        </span>
      [?php endif; ?]
    </div>
  </div>
[?php endif; ?]