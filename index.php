<?php session_start(); ?>
<?php include("header.php"); ?>
<body>
    <?php
        $_SESSION["var1"] = rand(0,20);
        $_SESSION["var2"] = rand(0,20);
        $_SESSION["op"] = rand(1,2);           
    if(!isset( $_SESSION["total"])) {
        $_SESSION["total"] = 0;
    }
    if(!isset($_SESSION["score"])) {
        $_SESSION["score"] = 0;
    }
    if(!isset($_SESSION["message"])) {
        $_SESSION["message"] = null;
    }
    if(!isset($_SESSION["right"])) {
        $_SESSION["right"] = null;
    }
    if($_SESSION["op"] == 1) {
        $_SESSION["mult"] = -1;
        $_SESSION["ques"] = $_SESSION["var1"]." - ".$_SESSION["var2"];
    } 
    else {
        $_SESSION["mult"] = 1;
        $_SESSION["ques"] = $_SESSION["var1"]." + ".$_SESSION["var2"];
    }
    $_SESSION["ans"] = $_SESSION["var1"] + $_SESSION["mult"] * $_SESSION["var2"];
        
    ?>
    <div class="container">
        <form action="MathGame.php" method="post" role="form" class="form-horizontal">
            <div class="row">
                <div class ="col-sm-4 col-sm-offset-4">
                    <h1>Math Game</h1>
                </div>
                <div class="com-sm-4">
                    <a href="logout.php" class="btn btn-default">Logout</a>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <?php echo $_SESSION["ques"]; ?>
                </div>
            </div>
            <br />
            <div class="form-group">
            <div class="col-sm-3 col-sm-offset-4">
                <input type="text" class="form-control" id="answer" name="answer" placeholder="Enter answer">
            </div>
            </div>
            <br />
            <div class="form-group">
            <div class="col-sm-3 col-sm-offset-4">
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            </div>
            </div>
            <br />
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <span class="error"><?php echo $_SESSION["message"]; ?></span>
                    <span class="right"><?php echo $_SESSION["right"]; ?></span>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    Score: <?php echo $_SESSION["score"]; ?>/<?php echo $_SESSION["total"]; ?>
                </div>
            </div>
        </form>
    </div>
    
</body>