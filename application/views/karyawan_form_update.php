<div class="page-content-wrap">
                
                <div class="row">
                    <div class="col-md-12">
                        
                        <form class="form-horizontal" method="post" action="<?= base_url('karyawan_update/'.$this->uri->segment(2))?>">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Karyawan</strong> Form Update</h3>
                                <ul class="panel-controls">
                                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                </ul>
                            </div>
                            <div class="panel-body">                                                                        
                                
                                <div class="row">
                                    
                                    <div class="col-md-6">
                                    <div class="form-group">
                                            <label class="col-md-3 control-label">NIK</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" name="nik" value="<?= $data->nik?>" class="form-control"/>
                                                </div>                                            
                                         
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Nama</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" class="form-control" name="nama" value="<?= $data->nama?>"/>
                                                </div>                                            
                                         
                                            </div>
                                        </div>
                                        
                              
                                        
                                     
                                        <div class="form-group">                                        
                                            <label class="col-md-3 control-label">Tanggal Lahir</label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                    <input type="text" class="form-control datepicker" >                                            
                                                </div>
                                            
                                            </div>
                                        </div>

                                        <div class="form-group">                                        
                                            <label class="col-md-3 control-label">Jenis Kelamin</label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                   <?php foreach($jk as $j){?>
                                                        <div class="col-md-6">                                    
                                                            <label class="check"><input type="radio" name="jk" value="<?= $j->id?>"/> <?= $j->nama?></label>
                                                        </div>  
                                                   <?php } ?>
                                                
                                                </div>
                                            
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Status Kawin</label>
                                            <div class="col-md-9">                                                                                            
                                                <select class="form-control select" name="statkawin">
                                                    <?php foreach($stkawin as $d){?>
                                                    <option value="<?= $d->id ?>"><?= $d->nama?></option>
                                                    <?php } ?>
                                                </select>
                                            
                                            </div>
                                        </div> 



                                

                              
                                    </div>
                                    <div class="col-md-6">
                                        
                                    <div class="form-group">
                                            <label class="col-md-3 control-label">Divisi</label>
                                            <div class="col-md-9">                                                                                            
                                                <select class="form-control select" name="divisi">
                                                    <?php foreach($divisi as $d){?>
                                                    <option value="<?= $d->id ?>"><?= $d->nama?></option>
                                                    <?php } ?>
                                                </select>
                                               
                                            </div>
                                        </div> 

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Pendidikan</label>
                                            <div class="col-md-9">                                                                                            
                                                <select class="form-control select" name="pendidikan">
                                                    <?php foreach($pendidikan as $p){?>
                                                    <option value="<?= $p->id ?>"><?= $p->nama?></option>
                                                    <?php } ?>
                                                </select>
                                               
                                            </div>
                                        </div> 

                                      


                                        <div class="form-group">                                        
                                            <label class="col-md-3 control-label">Status</label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                   <?php foreach($sk as $j){?>
                                                        <div class="col-md-6">                                    
                                                            <label class="check"><input type="radio"  name="sk" value="<?= $j->id?>"/> <?= $j->nama?></label>
                                                        </div>  
                                                   <?php } ?>
                                                
                                                </div>
                                            
                                            </div>
                                        </div>
                                     
                                        
                                 
                                        
                                     
                                        
                                    </div>
                                    
                                </div>

                            </div>
                            <div class="panel-footer">
                                <a href="<?= base_url('karyawan')?>" class="btn btn-default">Kembali</a>                                    
                                <button class="btn btn-primary pull-right">Simpan</button>
                            </div>
                        </div>
                        </form>
                        
                    </div>
                </div>                    
                
            </div>