<h1 style="text-align: center;font-size:33px;margin-top: 100px;">
    Listing
</h1>

<?php foreach ($fruits as $fruit): ?>
    <p><a href="index.php?page=detailfruit&id=<?= $fruit->id; ?>"><?php echo $fruit->title; ?></a></p>
<?php endforeach; ?>
