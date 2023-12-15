<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Video Section</h6>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="<?= admin_url();?>">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">All Video's</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <?= form_open_multipart('admin/video/process', 'class="custom-validation"');?>
      
                            <div class="row">
                                <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header bg-primary text-light">
                                        Add New Video
                                    </div>
                                    <div class="card-body text-center">
                                        <label for=""></label>
                                        <div class="mb-3" style="display: flex;justify-content: center;align-items: center;">
                                            <img class="img-thumbnail rounded me-2" src="<?= get_image($allitems[0]->thumbnail); ?>" id="blah" alt="" width="800" src="" data-holder-rendered="true" style="display:<?= $allitems[0]->thumbnail!=0?'block':'none';?>">
                                        </div>
                                        <div class="mb-0">
                                            <input type="file" name="file" class="filestyle" id="imgInp" data-input="false" data-buttonname="btn-secondary">
                                            <input type="hidden" name="media_id" id="media_id" />
                                            <input type="hidden" name="hdn_media_id" id="media_id" value="<?= $allitems[0]->thumbnail;?>" />
                                            <a href="javascript:;" id="openLibrary">or Choose From Library</a>
                                        </div> 
                                    </div>
                                    <div class="card-body text-center">
                                        <div class="mb-3" style="display: flex;justify-content: center;align-items: center;">
                                            <!-- <img class="img-thumbnail rounded me-2" id="blah" alt="" width="800" src="" data-holder-rendered="true" style="display: none;"> -->
                                            <video width="470" height="255" controls>
                                                <source src="<?= base_url($allitems[0]->video_path.$allitems[0]->video_name) ?>" type="video/mp4">
                                            </video>
                                        </div>
                                        <div class="mb-0">
                                            <input type="file" name="filef" class="filestyle" id="imgInp" data-input="false" data-buttonname="btn-secondary">
                                        </div> 
                                    </div>
                                    <div class="col-lg-2 ml-3">
                                        <div class="card">
                                            <div class="card-header bg-primary text-light" style="text-align:center;"><input type="submit" value="Publish"></div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        <?= form_close();?>

                    </div> <!-- container-fluid -->
                </div>