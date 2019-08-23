<div class="box">
    <div class="box-header with-border">
        <div class="left">
            <h3 class="box-title"><?php echo trans('post_details'); ?></h3>
        </div>
    </div><!-- /.box-header -->

    <div class="box-body">
        <!-- include message block -->
        <?php $this->load->view('admin/includes/_messages'); ?>

        <input type="hidden" name="id" value="<?php echo html_escape($post->id); ?>">
        <input type="hidden" name="referrer" class="form-control" value="<?php echo  $this->agent->referrer(); ?>">

        <div class="form-group">
            <label class="control-label"><?php echo trans('title'); ?></label>
            <input type="text" class="form-control" name="title" placeholder="<?php echo trans('title'); ?>"
                   value="<?php echo html_escape($post->title); ?>" <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?> required>
        </div>

        <div class="form-group">
            <label class="control-label"><?php echo trans('slug'); ?>
                <small>(<?php echo trans('slug_exp'); ?>)</small>
            </label>
            <input type="text" class="form-control" name="title_slug" placeholder="<?php echo trans('slug'); ?>"
                   value="<?php echo html_escape($post->title_slug); ?>" <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
        </div>

        <div class="form-group">
            <label class="control-label"><?php echo trans('summary'); ?> & <?php echo trans("description"); ?> (<?php echo trans('meta_tag'); ?>)</label>
            <textarea class="form-control text-area" name="summary"
                      placeholder="<?php echo trans('summary'); ?> & <?php echo trans("description"); ?> (<?php echo trans('meta_tag'); ?>)" <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>><?php echo html_escape($post->summary); ?></textarea>
        </div>

        <div class="form-group">
            <label class="control-label"><?php echo trans('keywords'); ?> (<?php echo trans('meta_tag'); ?>)</label>
            <input type="text" class="form-control" name="keywords"
                   placeholder="<?php echo trans('keywords'); ?> (<?php echo trans('meta_tag'); ?>)" value="<?php echo html_escape($post->keywords); ?>" <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
        </div>

        <div class="form-group">
            <label class="control-label"><?php echo trans('category'); ?></label>
            <select id="categories" name="category_id" class="form-control max-600" onchange="get_sub_categories(this.value);" required>
                <option value=""><?php echo trans('select_category'); ?></option>
                <?php foreach ($categories as $item): ?>
                    <?php if ($item->id == $post->category_id): ?>
                        <option value="<?php echo html_escape($item->id); ?>" selected><?php echo html_escape($item->name); ?></option>
                    <?php else: ?>
                        <option value="<?php echo html_escape($item->id); ?>"><?php echo html_escape($item->name); ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label class="control-label"><?php echo trans('subcategory'); ?></label>
            <select id="subcategories" name="subcategory_id" class="form-control max-600">
                <option value="0"><?php echo trans('select_category'); ?></option>

                <?php foreach ($subcategories as $item): ?>
                    <?php if ($item->id == $post->subcategory_id): ?>
                        <option value="<?php echo html_escape($item->id); ?>" selected><?php echo html_escape($item->name); ?></option>
                    <?php else: ?>
                        <option value="<?php echo html_escape($item->id); ?>"><?php echo html_escape($item->name); ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>

        <?php if (is_admin()): ?>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-3 col-xs-12 col-lang">
                        <label><?php echo trans('visibility'); ?></label>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-12 col-lang">
                        <input type="radio" id="rb_visibility_1" name="visibility" value="1" class="square-purple" <?php echo ($post->visibility == 1) ? 'checked' : ''; ?>>&nbsp;&nbsp;
                        <label for="rb_visibility_1" class="cursor-pointer"><?php echo trans('show'); ?></label>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-12 col-lang">
                        <input type="radio" id="rb_visibility_2" name="visibility" value="0" class="square-purple" <?php echo ($post->visibility == 0) ? 'checked' : ''; ?>>&nbsp;&nbsp;
                        <label for="rb_visibility_2" class="cursor-pointer"><?php echo trans('hide'); ?></label>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <input type="hidden" name="visibility" value="<?php echo $post->visibility; ?>">
        <?php endif; ?>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-3 col-xs-12 col-lang">
                    <label><?php echo trans('show_right_column'); ?></label>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-12 col-lang">
                    <input type="radio" name="show_right_column" value="1" id="right_column_enabled"
                           class="square-purple" <?php echo ($post->show_right_column == 1) ? 'checked' : ''; ?>>
                    <label for="right_column_enabled" class="option-label"><?php echo trans('yes'); ?></label>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-12 col-lang">
                    <input type="radio" name="show_right_column" value="0" id="right_column_disabled"
                           class="square-purple" <?php echo ($post->show_right_column == 0) ? 'checked' : ''; ?>>
                    <label for="right_column_disabled" class="option-label"><?php echo trans('no'); ?></label>
                </div>
            </div>
        </div>

        <?php if (is_admin()): ?>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <label class="control-label"><?php echo trans('add_featured'); ?></label>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <input type="checkbox" name="is_featured" value="1" class="square-purple" <?php echo ($post->is_featured == 1) ? 'checked' : ''; ?>>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <input type="hidden" name="is_featured" value="<?php echo $post->is_featured; ?>">
        <?php endif; ?>


        <?php if (is_admin()): ?>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <label class="control-label"><?php echo trans('add_breaking'); ?></label>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <input type="checkbox" name="is_breaking" value="1" class="square-purple" <?php echo ($post->is_breaking == 1) ? 'checked' : ''; ?>>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <input type="hidden" name="is_breaking" value="<?php echo $post->is_breaking; ?>">
        <?php endif; ?>

        <?php if (is_admin()): ?>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <label class="control-label"><?php echo trans('add_slider'); ?></label>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <input type="checkbox" name="is_slider" value="1" class="square-purple" <?php echo ($post->is_slider == 1) ? 'checked' : ''; ?>>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <input type="hidden" name="is_slider" value="<?php echo $post->is_slider; ?>">
        <?php endif; ?>


        <?php if (is_admin()): ?>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <label class="control-label"><?php echo trans('add_recommended'); ?></label>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <input type="checkbox" name="is_recommended" value="1" class="square-purple" <?php echo ($post->is_recommended == 1) ? 'checked' : ''; ?>>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <input type="hidden" name="is_recommended" value="<?php echo $post->is_recommended; ?>">
        <?php endif; ?>

        <div class="form-group">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <label class="control-label"><?php echo trans('show_only_registered'); ?></label>
                </div>
                <div class="col-md-9 col-sm-12">
                    <input type="checkbox" name="need_auth" value="1" class="square-purple" <?php echo ($post->need_auth == 1) ? 'checked' : ''; ?>>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label"><?php echo trans('tags'); ?></label>
            <input id="tags_1" type="text" name="tags" class="form-control tags" value="<?php echo html_escape($tags); ?>"/>
            <small>(<?php echo trans('type_tag'); ?>)</small>
        </div>

        <div class="form-group">
            <label class="control-label"><?php echo trans('optional_url'); ?></label>
            <input type="text" class="form-control"
                   name="optional_url" placeholder="<?php echo trans('optional_url'); ?>"
                   value="<?php echo html_escape($post->optional_url); ?>" <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
        </div>

        <div class="form-group">
            <label class="control-label"><?php echo trans('content'); ?></label>
            <textarea id="ckEditor" class="form-control"
                      name="content" placeholder="<?php echo trans('content'); ?>"><?php echo html_escape($post->content); ?></textarea>
        </div>


    </div>
</div>

<?php $this->load->view("admin/includes/_file_manager_ckeditor"); ?>