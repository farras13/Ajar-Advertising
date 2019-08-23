<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="box">
    <div class="box-header with-border">
        <div class="left">
            <h3 class="box-title"><?php echo "Image"; ?></h3>
        </div>
    </div><!-- /.box-header -->

    <div class="box-body">

        <div class="form-group m0">
            <input type="hidden" id="selected_image_type" value="image">
            <div class="row">
                <div class="col-sm-12">
                    <a class='btn btn-sm bg-purple' data-toggle="modal" data-target="#image_file_manager" onclick="$('#selected_image_type').val('image');">
                        <?php echo trans('select_image'); ?>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 m-t-15">
                    <img id="selected_image_file" name="" src="<?php echo ( isset( $post ) ? base_url() . $post->img : null ); ?>" alt="" class="img-responsive"/>
                    <?php if ( isset($post) && !empty($post->img))  { ?>
                         <a class="btn btn-danger btn-sm btn-delete-main-img" onclick="delete_img_question('<?php echo $post->id; ?>');">
                            Delete Image
                        </a>
                    <?php } ?>
                    <input type="hidden" name="post_image_id">
                </div>
            </div>

        </div>
    </div>

</div>

<?php $this->load->view("admin/includes/_file_manager_image"); ?>




