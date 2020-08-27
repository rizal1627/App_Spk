<div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Laporan</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th style="width:50px">No</th>
                                                <th>Kelompok</th>
                                                <th>Keterangan</th>
                                               
                                                <th style="width:150px; ">Jumlah Karyawan</th>
                                                <th style="width:200px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no = 0; foreach($data as $d){?>
                                            <tr>
                                                <td><?= ++$no?></td>
                                                <td><?= $d->nama?></td>
                                                <td><?= $d->keterangan?></td>
                                                <td style="text-align: center;"><?= $d->karyawan?></td>
                                                <td>
                                                <a Href="<?= base_url('list_laporan/'.$d->id)?>" class="btn btn-primary"><i class="fa fa-bars"></i></a>
                                                <a Href="<?= base_url('print/'.$d->id)?>" class="btn btn-warning" target="_blank"><i class="fa fa-print"></i></a>
                                                
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