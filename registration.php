<?php
include("header.php");
?>
<h1 class="text-center page-header">User Home </h1>

<form action="" method="" class="formd">

    <div class="col-md-12">
        <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step">
                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                    <p>Step 1</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                    <p>Step 2</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                    <p>Step 3</p>
                </div>
            </div>
        </div>
        <div class="row setup-content" id="step-1">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Personal Details</h3><hr>
                    <?php include("secondpart.php"); ?>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>

                </div>
                <br><br>
            </div>
        </div>
        <div class="row setup-content" id="step-2">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Prefered Contact</h3>

                    <?php include("thirdpart.php"); ?>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
                </div>
            </div>
        </div>
        <div class="row setup-content" id="step-3">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <?php include("fourpart.php"); ?>
                    <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
</form>

</div>
<?php
include("footer.php");
?>
 
 
