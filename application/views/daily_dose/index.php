<?php
$position = 0;
?>
<?php foreach ($article as $articles) :?>
    <?php if ($position%3==0){?>
        <div class="row this-month">
    <?php }
    $position++;
    ?>        <div class="col-sm-4">
            <center>
                <a href="<?php echo base_url('daily_dose/').$articles['reference'];?>">
                    <img src="<?php echo base_url('images/').$articles['image1'];?>" alt="health">
                    <h3><?php echo $articles['title']; ?></h3>
                    <h5><?php echo $articles['sub_title']; ?></h5>
                    <h5><small><?php echo $articles['month'].' '.$articles['year'];?></small></h5>
                    <p><?php echo word_limiter($articles['content'],30);?></p>
                    <footer>
                        <?php echo form_open()?>
                        <input type="hidden" name="ref" value="<?php echo $articles['reference']; ?>"/>
                        <a href="<?php echo base_url('daily_dose/').$articles['reference'];?>" class="btn btn-primary">Read More</a><br /><br />
                        <a href=""><button class="fa fa-thumbs-up btn btn-primary" name="like" type="submit"></button><b>&nbsp;&nbsp;<?php echo $articles['likes']; ?></b></a> &nbsp;&nbsp;
                        <a href=""><button class="fa fa-thumbs-down btn btn-primary" name="unlike" type="submit"></button><b>&nbsp;&nbsp;<?php echo $articles['unlikes']; ?></b></a> &nbsp;&nbsp;
                        <p class="fa fa-eye btn btn-primary" ></p><b>&nbsp;&nbsp;<?php echo $articles['views']; ?></b>
                        <?php echo form_close()?>
                    </footer>
                </a>
            </center>
        </div>
    <?php endforeach;?>
</div>
<?php
if (isset($_POST['like'])){
    $ref = $_POST['ref'];
    $my_data = $ref_obj->get_article($ref);
    $answ = $ref_obj->add_like($my_data['artId']);
    header("Location:".base_url('daily_dose/'));
    exit();
}

if (isset($_POST['unlike'])){
    $ref = $_POST['ref'];
    $my_data = $ref_obj->get_article($ref);
    $answ = $ref_obj->add_unlike($my_data['artId']);
    header("Location:".base_url('daily_dose/'));
    exit();
}
?>