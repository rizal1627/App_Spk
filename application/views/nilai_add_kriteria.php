<div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Data Bobot Kriteria</h3>
                                    <ul class="panel-controls">
                                      
                                        <li><a href="<?= base_url('nilai_form_kriteria/'.$this->uri->segment(2))?>" ><span class="fa fa-plus-square-o"></span></a></li>
                                   
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th width="50px">No</th>
                                                <th>Kretria</th>
                                                <th width="200px">Nilai</th>
                                               
                                               
                                                <th width="200px">Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0; foreach($data as $d){?>
                                            <tr>
                                            <td><?= ++$no; ?></td>
                                                <td><?= $d->nama_kriteria?></td>
                                                <td><?= $d->nilai?></td>
                                               
                                               
                                                <td>
                                                    <a href="<?= base_url('kriteria_nilai_update/'.$this->uri->segment(2).'/'.$d->id)?>" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a href="<?= base_url('kriteria_nilai_nilai_delete/'.$this->uri->segment(2).'/'.$d->id)?>" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
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