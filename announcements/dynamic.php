<?php
require_once "../lib/database.php";
$config = require "../conf/config.php";
$pdo = connect_db();

$sql = <<<SQL
    SELECT
        title,
        category,
        category_href,
        body,
        when_inserted
    FROM
        announcement
    ORDER BY
        id DESC
SQL;
foreach ($pdo->query($sql) as $announcement) {
    $when_inserted=new DateTime($announcement['when_inserted']);
    ?>
<div class="wp-block-group ext-animate--on has-global-padding is-layout-constrained wp-container-core-group-is-layout-93d1c0e2 wp-block-group-is-layout-constrained">
		
    <div class="wp-block-group alignwide is-style-ext-preset--group--natural-1--item-card-1--align-start has-global-padding is-layout-constrained wp-container-core-group-is-layout-d4c2d7a2 wp-block-group-is-layout-constrained is-style-ext-preset--group--natural-1--item-card-1--align-start--4" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">				
    </div>
    <div class="wp-block-group has-small-font-size is-layout-flow wp-container-core-group-is-layout-32398bcd wp-block-group-is-layout-flow">
        <h2 class="wp-block-post-title"><?php echo $announcement['title'];?></h2>

        
        <div class="wp-block-group is-layout-flex wp-container-core-group-is-layout-f819b59f wp-block-group-is-layout-flex">
            <div class="wp-block-post-date">
                <time datetime="<?php echo $when_inserted->format(DateTime::ATOM); ?>">
                    <?php echo $when_inserted->format("F j Y"); ?>
                </time>
            </div>

            <div class="taxonomy-category wp-block-post-terms"><a href="<?php echo $announcement['category_href'];?>" rel="tag"><?php echo $announcement['category']?></a></div>
        </div>
        
    </div>
    

    <div style="margin-top:1.5rem" class="wp-block-post-excerpt">
        <p class="wp-block-post-excerpt__excerpt">
            <?php echo $announcement['body']; ?>
        </p>
    </div>
</div>
    <?php
}
?>