<?php include_once 'footer.php'; include_once 'header.php'; ?>
<style>
    <?php include_once '../assets/css/style.css'; ?>
</style>
<body class="bg-info">
<div class="container-fluid col-md-10 offset-md-1"
     <div class="row"
          <div class="'card mt-3 px-2 py-2"
               <h1>Stationery Application</h1>
<p>Welcome to this fictional stationery
    application page created for COMP2001 example. To continue, please accept our terms and conditions</p>
<form class="termsForm" action="agreement.php" method="post">
    <input type="radio" id="yes" name="agree" value="yes">
        I agree.
    <input type="radio" id="no" name="agree" value="no">
        I disagree.
    <br>
    <input type="submit"  value="Submit">
</form>
</body>

