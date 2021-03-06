<?php $this->load->view('auth/dressings/header');?>
<?php $this->load->view('auth/dressings/navbar');?>

<!-- Added these scripts to beautify textarea's-->


<body>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class = "page-header"><?php echo $title;?></h1>
            <p><?php echo lang('index_subheading');?></p>
        </div>

    <div id="content-outer" class ="clear"><div id="content-wrapper">
        <div id="content"><div class="col-one">
            <?php 
            if(validation_errors()){echo validation_errors('<p class = "error">','</p>');}?>
            <?php echo output_message($this->session->flashdata('message')); ?>
         
            <?php echo form_open('add_post');?>
            <p><strong>Title</strong>:<br />
			<input type="text" name="title" size="60" value = "<?php echo set_value('title')?>" /></p>
            <br clear="all" />
            
            <p><strong>Body</strong>: (HTML mode)</p>
            <textarea rows="6" cols="80%" name="content" style="resize:none;" value =""><?php echo set_value('content');?></textarea>
            
            
            <br clear="all" />
            <?php echo form_multiselect('post_cats[]', $categories, $temp_cats);?>
            
            <p><input type="submit" value="Submit" /></p>
            <?php echo form_close(); ?>
            
            <hr />
        </div><!-- Close content -->
        </div>

</body>
	

        <?php $this->load->view('auth/dressings/footer');?>
