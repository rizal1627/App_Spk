<div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Data Karyawan</h3>
                                    <ul class="panel-controls">
                                      
                                        <li><a href="<?= base_url('karyawan_form')?>" ><span class="fa fa-plus-square-o"></span></a></li>
                                   
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Nik</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Divisi</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($data as $d){?>
                                            <tr>
                                                <td><?= $d->nik?></td>
                                                <td><?= $d->nama?></td>
                                                <td><?= $d->jenis_kelamin?></td>
                                                <td><?= $d->divisi?></td>
                                                <td><?= $d->status_karyawan?></td>
                                                <td>
                                                    <a href="<?= base_url('karyawan_form_update/'.$d->nik)?>" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a href="<?php echo base_url('karyawan_delete/'.$d->nik)?>" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
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