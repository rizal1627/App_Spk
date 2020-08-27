<div class="page-content-wrap">
                
                <div class="row">
                    <div class="col-md-12">
                        
                        <form class="form-horizontal" method="post" action="<?= base_url('kriteria_nilai_save/'.$this->uri->segment(2))?>"> 
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Kriteria</strong> Form Create</h3>
                                <ul class="panel-controls">
                                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                </ul>
                            </div>
                            <div class="panel-body">                                                                        
                                
                                <div class="row">
                                    
                                    <div class="col-md-6">
                                    <div class="form-group">
                                            <label class="col-md-3 control-label">Kriteria</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                  
                                                    <select type="text" class="form-control" name="kriteria">
                                                    <?php foreach($kriteria as $k){?>
                                                        <option value="<?= $k->id?>" ><?= $k->nama?></option>
                                                    <?php } ?>
                                                     </select>
                                                </div>                                            
                                         
                                            </div>
                                        </div>
                                    <div class="form-group">
                                            <label class="col-md-3 control-label">Nilai</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" class="form-control" name="nilai" value=""/>
                                                </div>                                            
                                         
                                            </div>

                                            <!-- <label class="col-md-3 control-label">Sampai</label>
                                            <div class="col-md-3">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" class="form-control" name="nama" value=""/>
                                                </div>                                            
                                         
                                            </div> -->
                                        </div>
                                        
                                      
                                       <!-- <div class="form-group">
                                            <label class="col-md-3 control-label">Bobot</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" class="form-control" name="bobot" value="<?= $data->bobot?>"/>
                                                </div>                                            
                                         
                                            </div>
                                        </div> -->
                                        <!-- <div class="form-group">
                                            <label class="col-md-3 control-label">Atribut</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <select type="text" class="form-control" name="atribut">
                                                        <option value="cost" <?php if($data->atribut == 'cost'){ echo 'selected';}?>>Cost</option>
                                                        <option value="benefit" <?php if($data->atribut == 'benefit'){ echo 'selected';}?>>Benefit</option>
                                                     
                                                    </select>
                                                </div>                                            
                                         
                                            </div>
                                        </div> -->
                                    </div>
                                  
                                    
                                </div>

                            </div>
                            <div class="panel-footer">
                                <a href="<?= base_url('nilai_add_kriteria/'.$this->uri->segment(2))?>" class="btn btn-default">Kembali</a>                                    
                                <button class="btn btn-primary pull-right">Simpan</button>
                            </div>
                        </div>
                        </form>
                        
                    </div>
                </div>                    
                
            </div>