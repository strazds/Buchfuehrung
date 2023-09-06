<?php
$api_response = require_once('./utils/api.php');
include_once './router/default.router.php';
$result = getRoute(isset($_GET["action"]) ? $_GET["action"] : "home");
?>

<div id="layout-container">
  <div id="layout" class="vertical-layout">
    <div id="layout-header" class="layout">
      <h1>
        <?php echo $result["header"]; ?>
      </h1>
    </div>
    <div id="layout-body" class="layout">
      <?php include_once $result["body"]; ?>
    </div>
    <div id="layout-footer" class="layout">
      <?php if (isset($_GET['action'])) { ?>
        <a href="./">&#9668;</a>
      <?php } ?>
      <?php echo json_decode($api_response)->message; ?>
    </div>
  </div>
</div>