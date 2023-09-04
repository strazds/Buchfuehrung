<?php
include_once './router/default.router.php';
$result = getRoute(isset($_GET["action"]) || "");
?>

<div id="layout-container">
  <div id="layout" class="vertical-layout" style="background-color: aqua">
    <div id="layout-header" class="layout" style="background-color: darkcyan">
      <h1>
        <?php echo $result["header"]; ?>
      </h1>
    </div>
    <div id="layout-body" class="layout" style="background-color: darkkhaki">
      <?php include_once $result["body"]; ?>
    </div>
    <div id="layout-footer" class="layout" style="background-color: gray">[footer]</div>
  </div>
</div>