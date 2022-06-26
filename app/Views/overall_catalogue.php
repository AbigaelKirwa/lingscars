<?php 
     $session = session();

    $this->extend('/templates/catalogue_template');

    $this->section('content');

    
 
?>

    <!-- attempting to display data from database -->

    <!-- end of displaying from database -->

    <!-- this section is the one above the navigation -->
    <section class="top">

        <div class="row">
            <div class="top-bar">
                <p>Vehicle models</p>
            </div>
        </div>
    </section>    

    <section class="frames">
        <div class="row">
            <div class="frame-one">
                <h2><b>Description</b></h2>
                <p>This model is amazing. Features are even better than the last model. You will get maximum mileage from this. Enjoy the sleek new white color that is now available.<br>Reliable engine and amazing wheels that are sure to stand the test of time</p>
                <img src="../images/frame1.png" alt="car">
            </div>
            <div class="frame-two">
                <h1><b>Vehicle Highlights</b></h1>
            </div>
            <table class="table table-hover">

                <tbody>

                    <?php foreach ($images as $row): ?>

                        <form action="vehicle" method="post">

                            <tr>

                                <td class="td-car"><img src="<?php echo $row['image']; ?>" alt="Vehicle Image" srcset=""></td>
                                
                                <td class="td-words align-items-center">
                                    <h2 class="vehicle_name"><b><?php echo $row['vehicle_model']; ?></b></h2>
                                    <p><?php echo $row['vehicle_description']; ?></p>
                                    <b>Price: €<?php echo $row['unit_price']; ?></b>
                                    <input type="text" style="display: none;" name="vehicle_id" value="<?php echo $row['vehicle_id']; ?>">
                                    <?php if(isset($_SESSION["user_details"])){ ?>
                                        <input style="margin-right: 210px;" type="submit" value="Add to Cart" class="btn btn-dark">
                                    <?php } else { ?>
                                        <a href="/auth/register"><input style="margin-right: 210px;" type="button" value="Add to Cart" class="btn btn-dark"></a>
                                    <?php } ?>                                
                                </td>

                            </tr>
                        </form>

                    <?php endforeach; ?> 

                </tbody>

            </table>
        </div>
    </section>
   

    <?php $this->endSection();?>
