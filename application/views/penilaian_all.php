<div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Data Penilaian Pegawai</h3>
                                    <ul class="panel-controls">
                                       
                                        <li><a href="<?= base_url('penilaian_karwayan_form/'.$this->uri->segment(2))?>" ><span class="fa fa-plus-square-o"></span></a></li>
                                   
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="100px" rowspan="2">No</th>
                                                <th rowspan="2">Nama</th>
                                                <th colspan="<?= count($kriteria) ?>" style="text-align: center;">Kriteria</th>
                                                
                                                <th width="200px" rowspan="2">Action</th>
                                               
                                            </tr>
                                            <tr>
                                            <?php  foreach($kriteria as $k){?>
                                                <th><?= $k->nama?></th>
                                            <?php }?>
                                               
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0; foreach($data as $d){?>
                                            <tr>
                                            <td><?= ++$no?></td>
                                                <td><?= $d->nama?></td>
                                               
                                                <?php  foreach($kriteria as $k){?>
                                                <td style="text-align: center;">
                                                    <?php foreach($evaluasi as $e){ ?>
                                                           <?php if($e->nik == $d->nik && $e->id_kriteria == $k->id){ echo $e->id_nilai;}?> 
                                                    <?php } ?>
                                                
                                                
                                                </td>
                                                <?php }?>
                                               
                                                <td>
                                                    <a href="<?= base_url('penilaian_karwayan_form_update/'.$this->uri->segment(2).'/'.$d->nik)?>" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a href="<?= base_url('penilaian_karwayan_delete/'.$this->uri->segment(2).'/'.$d->nik)?>" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                             </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->

                      

                        
                    </div>
                    </div>   