<!-- if using include and it find a error it throws the error and continue executing the script -->
<!-- if using require and it find a error it throws the error and stop executing the script -->
<!-- The require_once statement is identical to require except PHP will check if the file has already been included, and if so, not include (require) it again -->
<?php include 'include/header.php'; ?>
<h1>Content</h1>
<?php include 'include/footer.php'; ?>