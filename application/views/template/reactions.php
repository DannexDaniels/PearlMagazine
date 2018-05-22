<?php
if (isset($article)){
    $answ = $ref_obj->add_view($article['artId']);
    $all = $ref_obj->get_specific_article($article['reference']);
    ?>
    <footer style="position:sticky;top:90%;padding-left: 30%" class="label-info">
    <?php echo form_open();?>
    <input type="hidden" name="ref" value="<?php echo $all['reference']; ?>"/>
    <a href=""><button class="fa fa-thumbs-up btn btn-primary" name="like" type="submit"></button><b>&nbsp;&nbsp;<?php echo "Likes: ".$all['likes']; ?></b></a> &nbsp;&nbsp;
    <a href=""><button class="fa fa-thumbs-down btn btn-primary" name="unlike" type="submit"></button><b>&nbsp;&nbsp;<?php echo "Dislikes: ".$all['unlikes']; ?></b></a> &nbsp;&nbsp;
    <p class="fa fa-eye btn btn-primary" ></p><b>&nbsp;&nbsp;<?php echo "Views: ".$all['views']; ?></b>
    <?php echo form_close();}?>
    </footer>

<?php
if (isset($_POST['like'])){
    $ref = $_POST['ref'];
    $my_data = $ref_obj->get_article($ref);
    $answ = $ref_obj->add_like($my_data['artId']);
    header("Refresh:0");
}

if (isset($_POST['unlike'])){
    $ref = $_POST['ref'];
    $my_data = $ref_obj->get_article($ref);
    $answ = $ref_obj->add_unlike($my_data['artId']);
    header("Refresh:0");
}
?>