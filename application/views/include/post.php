<div class="bg-white p-0 rounded shadow">

    <?php $this->load->view('include/_file_manager_ckeditor'); ?>

    <form  method="POST" action="<?php echo site_url() ?>/Dashboard/add_post">
        <div class="row py-4 px-5 fz-1">
            
        </div>
        <div class="mr-3 ml-5 pt-1 pr-4 ">
            <h3> <b> Add Post ! </b></h3>
            <h4>Let’s start make a noise for your brand !</h4>

            <div class="form-group account mt-5 ">
                <label><b>Title</b></label>
                <input type="text" class="form-control w-70 my-4" id="title" name="title" placeholder="Title" required="">
            </div>

            <div class="form-group account mt-5 ">
                <label><b>Content</b></label> 
                <textarea id="ckEditor" class="form-control" name="content" placeholder="Content" required=""></textarea>
            </div>

            <div class="form-group account mt-5 ">
                <label>
                    <b>Slug</b>
                    <small>(If you leave it blank, it will be generated automatically.)</small>
                </label> 
                <input type="text" class="form-control w-70 my-4" name="title_slug" placeholder="Slag">
            </div>   
                      
            <div class="form-group account mt-5 ">
                <label><b>Summary & Description (Meta Tag)</b></label> 
                <textarea class="form-control h-50 my-4" name="summary" placeholder="Summary & Description (Meta Tag)" required=""></textarea>
            </div>

            <div class="form-group account mt-5 ">
                <label><b>Keywords (Meta Tag)</b></label> 
                <input type="text" class="form-control w-70 my-4" id="keywords" name="keywords" placeholder="Keywords (Meta Tag)" required="">
            </div>

            <div class="form-group account mt-5 ">
                <label><b>Language</b></label> 
                <select class="form-control w-60 my-4" id="lang" name="lang">
                    <option value="">Choose your Language</option>
                    <?php foreach ($lang as $l): ?>
                        <option value="<?php echo $l->id; ?>"><?php echo $l->name ?></option>
                    <?php endforeach ?>
                </select>
            </div>

             <div class="form-group account mt-5 ">
                <label><b>Category</b></label> 
                <select class="form-control w-60 my-4" id="category" name="category">
                    <option value="">Select a category</option>
                    
                </select>
            </div>

             <div class="form-group account mt-5 ">
                <label><b>Sub Category</b></label> 
                <select class="form-control w-60 my-4" id="subcategory" name="subcategory">
                    <option value="">Select a Subcategory</option>
                </select>
            </div>            
                   
            <div class="w-70 text-center py-5">
                <button type="submit" class="btn btn-outline-primary w-50 btn-rounded py-2 ">Posting</button>
            </div>
        </div> 
    </form>
</div>
