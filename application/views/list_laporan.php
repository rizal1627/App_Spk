<br>    
<div class="row">

<div class="col-md-12">

<div class="panel panel-default tabs">                            
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Nilai Alternatif Per-Kriteria</a></li>
                                    <li><a href="#tab-second" role="tab" data-toggle="tab">Normalisasi</a></li>
                                    <li><a href="#tab-third" role="tab" data-toggle="tab">Hasil Akhir</a></li>
                                  
                                </ul>                            
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">

                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">No</th>
                                                <th rowspan="2">Alternatif</th>
                                                <th colspan="<?php echo count($kriteria);?>"style="text-align: center;" >Kriteria </th>
                                                
                                            </tr>
                                            <tr>
                                                <?php foreach($kriteria as $k){?>
                                                <th><?= $k->nama?></th>
                                                <?php }?>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=0; foreach($data as $d){?>
                                                <tr>
                                                    <td><?= ++$no?></td>
                                                    <td><?= $d->nama?></td>
                                                <?php foreach($kriteria as $k){?>
                                                    <th>
                                                   <?php foreach($v_evaluasi as $ve){ ?>
                                                       <?php if($ve->nik == $d->nik && $k->id == $ve->id_kriteria){?>
                                                            <?php if( $k->id == 12){?>
                                                                <?php foreach($v_keterangan as $vk){?>
                                                                    <?php if($vk->id_kriteria == $k->id){?>
                                                                        <?php if($ve->id_nilai == 0 && $vk->nilai == 0){?>
                                                                            <?= $vk->jumlah?>
                                                                        <?php }elseif(($ve->id_nilai > 0 && $ve->id_nilai <= 4) && $vk->nilai == 1){?>
                                                                            <?= $vk->jumlah?>
                                                                        <?php }elseif(($ve->id_nilai > 4 && $ve->id_nilai <= 7) && $vk->nilai == 4){?>
                                                                            <?= $vk->jumlah?>
                                                                        <?php }elseif( $ve->id_nilai > 7 && $vk->nilai == 7){?>
                                                                            <?= $vk->jumlah?>
                                                                        <?php } ?>
                                                                       
                                                                    <?php } ?>
                                                                <?php } ?>
                                                            <?php }else{?>

                                                                <?php foreach($v_keterangan as $vk){?>
                                                                    <?php if($vk->id_kriteria == $k->id){?>
                                                                        <?php if($ve->id_nilai <= 6  && $vk->nilai == 4){?>
                                                                            <?= $vk->jumlah?>
                                                                        <?php }elseif(($ve->id_nilai > 6 && $ve->id_nilai <= 7) && $vk->nilai == 6){?>
                                                                            <?= $vk->jumlah?>
                                                                        <?php }elseif(($ve->id_nilai > 7  && $ve->id_nilai < 9) && $vk->nilai == 7){?>
                                                                            <?= $vk->jumlah?>
                                                                        <?php }elseif( $ve->id_nilai >= 9 && $vk->nilai == 9){?>
                                                                            <?= $vk->jumlah?>
                                                                        <?php } ?>
                                                                       
                                                                    <?php } ?>
                                                                <?php } ?>
                                                                
                                                            <?php }?>
                                                        <?php }?>

                                                   <?php }?>
                                                        
                                                    </th>
                                                <?php }?>
                                                </tr>
                                            <?php }?>
                                            
                                        </tbody>
                                    </table>    
                                </div>
                                    <div class="tab-pane" id="tab-second">
                                   
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">No</th>
                                                <th rowspan="2">Alternatif</th>
                                                <th colspan="<?php echo count($kriteria);?>"style="text-align: center;" >Kriteria </th>
                                                
                                            </tr>
                                            <tr>
                                                <?php foreach($kriteria as $k){?>
                                                <th><?= $k->nama?></th>
                                                <?php }?>
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <?php $no=0; foreach($data as $d){?>
                                                <tr>
                                                    <td><?= ++$no?></td>
                                                    <td><?= $d->nama?></td>
                                                <?php foreach($kriteria as $k){?>
                                                    <th>
                                                   <?php foreach($v_evaluasi as $ve){ ?>
                                                       <?php if($ve->nik == $d->nik && $k->id == $ve->id_kriteria){?>
                                                            <?php if( $k->id == 12){?>
                                                                <!-- <?= $normal_2->maxdata?> -->
                                                                <!-- <?php  $jumlah='';?> -->
                                                                <?php foreach($data_nilai as $dn){ ?>
                                                                   <?php if($dn->nilai == 0){?>
                                                                        <?php  $jumlah = $dn->jumlah; ?>
                                                                   <?php }elseif($dn->nilai == 1){?>
                                                                        <?php  $jumlah = $dn->jumlah; ?>
                                                                   <?php }elseif($dn->nilai == 4){?>
                                                                        <?php  $jumlah = $dn->jumlah; ?>
                                                                   <?php }elseif($dn->nilai == 7){?>     
                                                                        <?php  $jumlah = $dn->jumlah; ?>


                                                                <?php } } ?>
                                                                

                                                                <?php foreach($v_keterangan as $vk){?>
                                                                    <?php if($vk->id_kriteria == $k->id){?>
                                                                        <?php if($ve->id_nilai == 0 && $vk->nilai == 0){?>

                                                                            <?= $jumlah / $vk->jumlah?> 
                                                                        <?php }elseif(($ve->id_nilai > 0 && $ve->id_nilai <= 4) && $vk->nilai == 1){?>
                                                                            <?= $jumlah / $vk->jumlah?>
                                                                        <?php }elseif(($ve->id_nilai > 4 && $ve->id_nilai <= 7) && $vk->nilai == 4){?>
                                                                            <?= $jumlah / $vk->jumlah?>
                                                                        <?php }elseif( $ve->id_nilai > 7 && $vk->nilai == 7){?>
                                                                            <?= $jumlah / $vk->jumlah?>
                                                                        <?php } ?>
                                                                       
                                                                    <?php } ?>
                                                                <?php } ?>
                                                            <?php }else{?>

                                                                <?php foreach($v_keterangan as $vk){?>
                                                                    <?php foreach($normal_1 as $n1){?>
                                                                        <?php if($vk->id_kriteria == $k->id && $n1->id_kriteria == $k->id){?>
                                                                            <?php if($ve->id_nilai <= 6  && $vk->nilai == 4){?>
                                                                                <?php $data1 =  $vk->jumlah / $n1->normal; echo $data1; ?>
                                                                            <?php }elseif(($ve->id_nilai > 6 && $ve->id_nilai <= 7) && $vk->nilai == 6){?>
                                                                                <?php $data1 =  $vk->jumlah / $n1->normal; echo $data1; ?>
                                                                            <?php }elseif(($ve->id_nilai > 7  && $ve->id_nilai < 9) && $vk->nilai == 7){?>
                                                                                <?php $data1 =  $vk->jumlah / $n1->normal; echo $data1; ?>
                                                                            <?php }elseif( $ve->id_nilai >= 9 && $vk->nilai == 9){?>
                                                                                <?php $data1 =  $vk->jumlah / $n1->normal; echo $data1; ?>
                                                                            <?php } ?>
                                                                        
                                                                        <?php } ?>
                                                                    <?php } ?>
                                                                <?php } ?>
                                                                
                                                            <?php }?>
                                                        <?php }?>

                                                   <?php }?>
                                                        
                                                    </th>
                                                <?php }?>
                                                </tr>
                                            <?php }?>
                                            
                                        </tbody>
                                    </table>   
                                </div>
                                    <div class="tab-pane" id="tab-third">

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">No</th>
                                                <th rowspan="2">Alternatif</th>
                                                <th colspan="<?php echo count($kriteria);?>"style="text-align: center;" >Kriteria </th>
                                                <th rowspan="2">Jumlah</th>
                                            </tr>
                                            <tr>
                                                <?php foreach($kriteria as $k){?>
                                                <th><?= $k->nama?></th>
                                                <?php }?>
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <?php $no=0; foreach($data as $d){?>
                                                <tr>
                                                    <td><?= ++$no?></td>
                                                    <td><?= $d->nama?></td>
                                                <?php foreach($kriteria as $k){?>
                                                    <th> 
                                                   <?php foreach($v_evaluasi as $ve){ ?>
                                                       <?php if($ve->nik == $d->nik && $k->id == $ve->id_kriteria){?>
                                                            <?php if( $k->id == 12){?>
                                                               
                                                                <?php foreach($data_nilai as $dn){ ?>
                                                                   <?php if($dn->nilai == 0){?>
                                                                        <?php  $jumlah = $dn->jumlah; ?>
                                                                   <?php }elseif($dn->nilai == 1){?>
                                                                        <?php  $jumlah = $dn->jumlah; ?>
                                                                   <?php }elseif($dn->nilai == 4){?>
                                                                        <?php  $jumlah = $dn->jumlah; ?>
                                                                   <?php }elseif($dn->nilai == 7){?>     
                                                                        <?php  $jumlah = $dn->jumlah; ?>


                                                                <?php } } ?>
                                                                

                                                                <?php foreach($v_keterangan as $vk){?>
                                                                    <?php if($vk->id_kriteria == $k->id){?>
                                                                        <?php if($ve->id_nilai == 0 && $vk->nilai == 0){?>

                                                                            <?php $hasil = $jumlah / $vk->jumlah; ?> 
                                                                        <?php }elseif(($ve->id_nilai > 0 && $ve->id_nilai <= 4) && $vk->nilai == 1){?>
                                                                            <?php $hasil = $jumlah / $vk->jumlah; ?> 
                                                                        <?php }elseif(($ve->id_nilai > 4 && $ve->id_nilai <= 7) && $vk->nilai == 4){?>
                                                                            <?php $hasil = $jumlah / $vk->jumlah; ?> 
                                                                        <?php }elseif( $ve->id_nilai > 7 && $vk->nilai == 7){?>
                                                                            <?php $hasil = $jumlah / $vk->jumlah; ?> 
                                                                        <?php } ?>
                                                                       
                                                                    <?php } ?>
                                                                <?php } ?>
                                                                <?= $hasil * $k->bobot?>
                                                            <?php }else{?>

                                                                <?php foreach($v_keterangan as $vk){?>
                                                                    <?php foreach($normal_1 as $n1){?>
                                                                        <?php if($vk->id_kriteria == $k->id && $n1->id_kriteria == $k->id){?>
                                                                            <?php if($ve->id_nilai <= 6  && $vk->nilai == 4){?>
                                                                                <?php $hasil =  $vk->jumlah / $n1->normal;  ?>
                                                                            <?php }elseif(($ve->id_nilai > 6 && $ve->id_nilai <= 7) && $vk->nilai == 6){?>
                                                                                <?php $hasil =  $vk->jumlah / $n1->normal;?>
                                                                            <?php }elseif(($ve->id_nilai > 7  && $ve->id_nilai < 9) && $vk->nilai == 7){?>
                                                                                <?php $hasil =  $vk->jumlah / $n1->normal;?>
                                                                            <?php }elseif( $ve->id_nilai >= 9 && $vk->nilai == 9){?>
                                                                                <?php $hasil =  $vk->jumlah / $n1->normal;?>
                                                                            <?php } ?>
                                                                        
                                                                        <?php } ?>
                                                                    <?php } ?>
                                                                <?php } ?>
                                                                
                                                                

                                                                    
                                                                
                                                                <?php if($k->id == 2){ ?>
                                                                    <?php  $hasil1 =  $hasil * $k->bobot; $hasil2 = $hasil1;?>
                                                                <?php }elseif($k->id == 3){ ?>
                                                                    <?php  $hasil1 =  $hasil * $k->bobot; $hasil3 = $hasil1;?>
                                                                <?php }elseif($k->id == 14){ ?>
                                                                    <?php  $hasil1 =  $hasil * $k->bobot; $hasil14 = $hasil1;?>
                                                                <?php }elseif($k->id == 15){ ?>
                                                                    <?php  $hasil1 =  $hasil * $k->bobot; $hasil15 = $hasil1;?>
                                                                <?php }elseif($k->id == 16){ ?>
                                                                    <?php  $hasil1 =  $hasil * $k->bobot; $hasil16 = $hasil1;?>   
                                                                <?php }elseif($k->id == 17){ ?>
                                                                    <?php  $hasil1 =  $hasil * $k->bobot; $hasil17 = $hasil1;?> 
                                                                <?php }?>

                                                               <?=  $hasil1?>
                                                            <?php }?>
                                                        <?php }?>
                                                       
                                                   <?php }?>
                                                   
                                                    </th>
                                                <?php }?>
                                                <th><?= $hasil + $hasil2 + $hasil3 + $hasil14 + $hasil15 + $hasil16 + $hasil17 ?></th>
                                                </tr>
                                            <?php }?>
                                            
                                        </tbody>
                                    </table>      
                                </div>
                                  
                                </div>
                            </div>  

                            </div>
                            </div> 