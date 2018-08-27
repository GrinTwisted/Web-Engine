<head>

<!--------------------------------
    TITLE
--------------------------------->

    <title>"WEBSITE - <?php echo $title?>"</title>
        
<!--------------------------------
    META DATA
--------------------------------->

    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $meta['desc']?>">
    <meta name="keywords" content="<?php echo $meta['keys']?>">
    <meta name="author" content="GrinTwisted">

<!--------------------------------
    LINKS
--------------------------------->

<?php foreach($links as $value): ?>
    <link rel="stylesheet" href="<?php echo $value ?>">    
<?php endforeach; ?>

</head>
