<div class="row">
    <div class="col-lg-12"><br />    
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('anggota'); ?>">Anggota</a></li>
            <li class="active">Data anggota</li>
        </ol>
        <?php            
            if(!empty($message)) {
                echo $message;
            }
        ?>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <?php echo anchor('anggota/create', 'Add', array('class' => 'btn btn-primary btn-sm')); ?>
        <br /><br />
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Anggota
            </div>
            <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <td>No.</td>
                                        <td>Image</td>
                                        <td>Nis</td>
                                        <td>Nama</td>
                                        <td>Tanggal Lahir</td>
                                        <td>Kelas</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $no = 1;
                                foreach($anggota->result() as $row) {
                                ?>
                                    <tr>
                                        <td><?php echo $no;?></td>
                                        <td><?php if($row->image != "") { ?>
                                            <img src="<?php echo base_url('assets/img/anggota/'.$row->image);?>" width="100px" height="100px">
                                        <?php }else{ ?>
                                            <img src="<?php echo base_url('assets/img/anggota/images.jpg');?>" width="100px" height="100px">
                                        <?php } ?> 
                                        </td>
                                        <td><?php echo $row->nis;?></td>
                                        <td><?php echo $row->nama;?></td>
                                        <td><?php echo $row->ttl;?></td>
                                        <td><?php echo $row->kelas;?></td>
                                        <td class="text-center">
                                <a href="<?php echo base_url('anggota/edit/'.$row->nis) ?>"><input type="submit" class="btn btn-success btn-xs" name="edit" value="Edit"></a>
                                <a href="#" name="<?php echo $row->nama;?>" class="hapus btn btn-danger btn-xs" kode="<?php echo $row->nis;?>">Hapus</a>
                            </td>
                                    </tr>
                                <?php $no++; } ?>    
                                </tbody>
                            </table>
                        </div>
        </div>        
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Konfirmasi</h4>
        </div>
        <div class="modal-body">
            <input type="hidden" name="idhapus" id="idhapus">
                <p>Apakah anda yakin ingin menghapus anggota <strong class="text-konfirmasi"> </strong> ?</p>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-success btn-xs" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger btn-xs" id="konfirmasi">Hapus</button>
        </div>
    </div>
    </div>
</div>

<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/metisMenu/metisMenu.min.js"></script>
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/datatables-responsive/dataTables.responsive.js"></script>
<script src="<?php echo base_url(); ?>template/backend/sbadmin/dist/js/sb-admin-2.js"></script>
<script>
$(document).ready(function() {
    $('#dataTables-example').DataTable({
        responsive: true
    });
});
</script>

<script type="text/javascript">
    $(function(){
        $(".hapus").click(function(){
            var kode=$(this).attr("kode");
            var name=$(this).attr("name");           
            $(".text-konfirmasi").html(name)
            $("#idhapus").val(kode);
            $("#myModal").modal("show");
        });        
        $("#konfirmasi").click(function(){
            var kode=$("#idhapus").val();            
            $.ajax({
                url:"<?php echo site_url('anggota/delete');?>",
                type:"POST",
                data:"kode="+kode,
                cache:false,
                success:function(html){
                    location.href="<?php echo site_url('anggota/index/delete-success');?>";
                }
            });
        });
    });
</script>

