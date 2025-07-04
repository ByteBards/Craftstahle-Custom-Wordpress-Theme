 <?php 
// Get the ACF field 'terms_page_content' 
$ce_content = get_sub_field('ce_content');
if ($ce_content) {
?>
<section class="privacypolicy-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pps-c-content">
                    <?php echo $ce_content; ?>
                </div>
            </div>
        </div>
    </div>
 </section>

 <?php
 }
 ?>