<div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     Data Pelanggaran
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Dashboard</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#">Laporan Pelanggaran</a>
                           <span class="divider">/</span>
                       </li>
					   <li>
                           <a href="#">Data Pelanggaran</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Tambah Data Pelanggaran
                       </li>
                       <li class="pull-right search-wrap">
                           <form action="http://thevectorlab.net/metrolab/search_result.html" class="hidden-phone">
                               <div class="input-append search-input-area">
                                   <input class="" id="appendedInputButton" type="text">
                                   <button class="btn" type="button"><i class="icon-search"></i> </button>
                               </div>
                           </form>
                       </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN ADVANCED TABLE widget-->
            <div class="row-fluid">
                <div class="span12">
                <!-- BEGIN EXAMPLE TABLE widget-->
                <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Tambah Data Pelanggaran</h4>
                            
                        </div>
                        <div class="widget-body">
                            <!-- BEGIN FORM-->
                           <form method="post" action="<?php echo base_url();?>dashboard/save_data_laporan" class="form-horizontal" enctype="multipart/form-data">
                            <div class="control-group">
                                <label class="control-label">Siswa Pelanggar</label>
                                <div class="controls">
                                    <select name="nis" class="span6">
									<option>-- Pilih Siswa --</option>
									<?php foreach($siswa as $row){?>
									<option value="<?php echo $row->nis;?>"><?php echo $row->nama_siswa;?></option>
									<?php } ?>
									</select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Pelanggaran</label>
                                <div class="controls">
                                    <select name="pelanggaran" class="span6">
									<option>-- Pilih Pelanggaran --</option>
									<?php foreach($pelanggaran as $row){?>
									<option value="<?php echo $row->id;?>"><?php echo $row->kenakalan;?></option>
									<?php } ?>
									</select>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Foto Bukti</label>
                                <div class="controls" style="text-align:left">
								<input type="file" name="bukti" class="span6">
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Keterangan</label>
                                <div class="controls" style="text-align:left">
								<textarea name="ket" class="span6"></textarea>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <a href="<?php echo base_url();?>dashboard/master_siswa"><button type="button" class="btn">Cancel</button>
                            </div>
                            </form>
                            <!-- END FORM-->
                        </div>
						
                    </div>
                <!-- END EXAMPLE TABLE widget-->
                </div>
            </div>

            <!-- END ADVANCED TABLE widget-->
         </div>
         <!-- END PAGE CONTAINER-->
      </div>