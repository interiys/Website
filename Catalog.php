<!DOCTYPE html>
<html>

<?php
$pageTitle = "Ноутбуки";
require "frames/head.php";
?>

<body>

<?php
require "frames/header.php";
?>

<div id="main-content">
<section class="PC">
    <h2>Ноутбуки в ассортименте:</h2>
    <div class="product-list">
        <?php
            $stmt = $sql->prepare("SELECT * FROM catalog WHERE type='Laptop'");
            $stmt->execute();
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
                ?>
                <article class="product-item">
                    <a href="product.php?id=<?php echo $row["id"];?>" class="product-link">
                        <img src="<?php echo $row["logo"];?>">
                        <h3><?php echo $row["name"];?></h3>
                        <p><?php echo $row["shortdescription"];?></p>
                    </a>
                </article>
            <?php
            }
            $stmt->close();
        ?>
    </div>
</section>
</div>
<?php
require "frames/footer.php";
?>
</body>
</html>