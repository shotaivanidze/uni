<div class="header">
    <ul>
        <li><a href="admin.php">Administrator</a></li>
        <li><a href="company.php">Company</a></li>
        <?php if(isset($_SESSION['companyname'])):?>
        <li><a href="?logout=1">Logout</a></li>
        <?php endif ?>
    </ul>
</div>