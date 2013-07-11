<div id="branding" class="clearfix">
  <?php
    global $user;
    if (in_array('Site Administrator', $user->roles)):
  ?>
  <div id="logout-link"><a href="<?php global $base_url; print $base_url; ?>/user/logout">Logout</a></div>
  <?php print $breadcrumb; ?>
  <?php endif; ?>
  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <h1 class="page-title"><?php print $title; ?></h1>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php print render($primary_local_tasks); ?>
</div>

<div id="page">
  <?php print render($secondary_local_tasks); ?>

  <div id="content" class="clearfix">
    <div class="element-invisible"><a id="main-content"></a></div>
    <?php if ($messages): ?>
      <div id="console" class="clearfix"><?php print $messages; ?></div>
    <?php endif; ?>
    <?php if (!empty($page['help'])): ?>
      <div id="help">
        <?php print render($page['help']); ?>
      </div>
    <?php endif; ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    <?php print render($page['content']); ?>
  </div>
  
  <div id="footer">
    <?php print $feed_icons; ?>
  </div>
  
</div>