<div class="page-content-wrap">
                
                <div class="row">
                    <div class="col-md-12">
                        
                        <form class="form-horizontal" method="post" action="<?= base_url('penilaian_karwayan_update/'.$this->uri->segment(2).'/'.$this->uri->segment(3))?>"> 
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Nilai</strong> Form Update</h3>
                                <ul class="panel-controls">
                                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                </ul>
                            </div>
                            <div class="panel-body">                                                                        
                                
                                <div class="row">
                                    
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Karyawan</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text"  class="form-control" name="karyawan" value="<?= $data->nama?>">
                                                    

                                                </div>                                            
                                         
                                            </div>
                                        </div>

                                          
                                    <?php foreach($kriteria as $k){?>
                                    <div class="form-group">
                                            <label class="col-md-3 control-label"><?= $k->nama?></label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="number"  class="form-control" name="<?= $k->id?>" style="width:50px" value="<?php foreach($val as $v){ if($k->id == $v->id_kriteria ){ echo $v->id_nilai; }}?>">
                                                   

                                                </div>                                            
                                         
                                            </div>
                                        </div>
                                    <?php } ?>
                                  
                                        
                                        
                                    </div>

                                   
                                  
                                    
                                </div>

                            </div>
                            <div class="panel-footer">
                                <a href="<?= base_url('penilaian_all/'.$this->uri->segment(2))?>" class="btn btn-default">Kembali</a>                                    
                                <button class="btn btn-primary pull-right">Simpan</button>
                            </div>
                        </div>
                        </form>
                        
                    </div>
                </div>                    
                
            </div>