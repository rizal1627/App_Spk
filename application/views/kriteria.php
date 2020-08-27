                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Data Kriteria</h3>
                                    <ul class="panel-controls">
                                      
                                        <li><a href="<?= base_url('kriteria_form')?>" ><span class="fa fa-plus-square-o"></span></a></li>
                                   
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th width="100px">No</th>
                                                <th>Nama</th>
                                                <th width="200px">Type</th>
                                                <th width="100px">Bobot</th>
                                                <th width="100px">Atribut</th>
                                                <th width="200px">Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0; foreach($data as $d){?>
                                            <tr>
                                            <td><?= ++$no?></td>
                                                <td><?= $d->nama?></td>
                                                <td><?= $d->keterangan?></td>
                                                <td><?= $d->bobot?></td>
                                                <td><?= $d->atribut?></td>
                                                <td>
                                                    <a href="<?= base_url('kriteria_form_update/'.$d->id)?>" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i></button>
                                                    <a href="<?= base_url('kriteria_delete/'.$d->id)?>" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
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