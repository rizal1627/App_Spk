<div class="page-content-wrap">
                
                <div class="row">
                    <div class="col-md-12">
                        
                        <form class="form-horizontal" method="post" action="<?= base_url('kriteria_save')?>"> 
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Kriteria</strong> Form Input</h3>
                                <ul class="panel-controls">
                                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                </ul>
                            </div>
                            <div class="panel-body">                                                                        
                                
                                <div class="row">
                                    
                                    <div class="col-md-6">
                                    <div class="form-group">
                                            <label class="col-md-3 control-label">Nama</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" class="form-control" name="nama"/>
                                                </div>                                            
                                         
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Keterangan</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <!-- <input type="text" class="form-control" name="type"/> -->
                                                    <select type="text" class="form-control" name="keterangan">
                                                        <option value="sangat baik">Sangat Baik</option>
                                                        <option value="memenuhi">Memenuhi</option>
                                                        <option value="cukup">Cukup</option>
                                                    </select>
                                                </div>                                            
                                         
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Bobot</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" class="form-control" name="bobot"/>
                                                </div>                                            
                                         
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Atribut</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <select type="text" class="form-control" name="atribut">
                                                        <option value="cost">Cost</option>
                                                        <option value="benefit">Benefit</option>
                                                     
                                                    </select>
                                                </div>                                            
                                         
                                            </div>
                                        </div>
                                    </div>
                                  
                                    
                                </div>

                            </div>
                            <div class="panel-footer">
                                <a href="<?= base_url('kriteria')?>" class="btn btn-default">Kembali</a>                                    
                                <button class="btn btn-primary pull-right">Simpan</button>
                            </div>
                        </div>
                        </form>
                        
                    </div>
                </div>                    
                
            </div>