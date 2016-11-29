<?php session_start(); ?>
<?php include("header.php"); ?>
<body>
    <?php 
        if (!isset($_SESSION["inv"])) 
            $_SESSION["inv"] = null;
    ?>
    <div class="row">
        <h1>Please login to enjoy our math game.</h1>
    </div>
    <div class="row">
        <div class="col-offset-sm-4 col-sm-8 pull-right">
        <span class="error"><?php echo $_SESSION["inv"]; ?></span>
    </div>
    </div>
    <form class="form-horizontal" action="validate.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-4" for="email">Email:<span id="req">*</span></label>
          <div class="col-sm-4">
            <input type="text" name="email" class="form-control" id="name" placeholder="Enter email" required/>
          </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="pass">Password:<span id="req">*</span></label>
          <div class="col-sm-4">
            <input type="text" name="pass" class="form-control" placeholder="Enter password" required/>
          </div>
    </div>
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-info col-sm-offset-4">Login</button>
    </div>
    </form>
</body>