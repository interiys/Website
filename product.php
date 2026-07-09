<?php
    require "scripts/db.php";
    if (!isset($_SESSION["user_name"])){
        header('Location: ' . "catalog.php?login=true");
        exit();
    }
    $id = $_GET["id"];
    $stmt = $sql->prepare("SELECT * FROM catalog WHERE id=?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $pageTitle = $row["name"];
    require "frames/head.php";
?>

<body>
    <?php require "frames/header.php";?>
    <div id="product-content">
        <div class="slider-container">
            <div class="slider">
                <div class="slides">
                    <?php
                        $array = explode(",", $row["images"]);
                        foreach ($array as $item) {
                            ?>
                            <img src=" <?php echo $item;?>" class="slide">
                            <?php
                        }
                    ?>
                </div>
                <button id="previousSlide" class="slider-button">&#10094;</button>
                <button id="nextSlide" class="slider-button">&#10095;</button>
                <span class="slider-control-container"><span class="slider-control"></span></span>
            </div>
        </div>

        <div class="product-description">
            <?php echo $row["description"];?>
        </div>
    </div>
    <?php
    require "frames/footer.php";
    ?>
</body>
<script src="js/slider.js"></script>