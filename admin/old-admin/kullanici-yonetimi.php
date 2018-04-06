<?php 
include "header.php"; 
include "functions.php";
?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>Kullanıcı Yönetimi<small>Ayarları</small></h1>
    <ol class="breadcrumb">
      <li><a href="index.html"><i class="fa fa-dashboard"></i> Kontrol Paneli</a></li>
      <li class="active">Kullanıcı Yönetimi</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <div class="box box-solid">
          <form role="form">
            <!-- Box Header -->
            <!-- ================================================== -->
            <div class="box-header with-border">
              <div class="col-sm-6 col-xs-12">
                <h3 class="box-title">Kullanıcı Yönetimi</h3>
              </div>
              <div class="col-sm-6 col-xs-12 text-right"><a class="btn btn-primary ajax" href="kullanici-ekle.php">Yeni Kullanıcı Ekle</a></div>
            </div>
            <!-- Box Body -->
            <!-- ================================================== -->
            <div class="box-body">
              <div class="form-group">
                <div class="col-xs-12">
                  <table class="table table-bordered table-hover table-striped" id="example1">
                    <thead>
                      <tr>
                        <th>Adı</th>
                        <th>Soyadı</th>
                        <th>Kullanıcı Adı</th>
                        <th>E-Posta Adresi</th>
                        <th>Parolası</th>
                        <th>Yetkisi</th>
                        <th>Kayıt Tarihi</th>
                        <th>İşlemler</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $baglan = $db->query("SELECT * FROM users", PDO::FETCH_ASSOC);
                    if ( $baglan->rowCount() ){
                      foreach( $baglan as $row ){ ?>
                        
                      <tr>
                        <td>
                          <?php echo $row['adi']?>
                        </td>
                        <td>
                          <?php echo $row['soyadi']?>
                        </td>
                        <td>
                          <?php echo $row['kullaniciAdi']?>
                        </td>
                        <td>
                          <?php echo $row['email']?>
                        </td>
                        <td>
                          <?php echo $row['sifre']?>
                        </td>
                        <td>
                          <?php echo $row['yetkisi']?>
                        </td>
                        <td>
                          <?php echo $row['kayitTarihi']?>
                        </td>
                        <td>
                          <a class="btn btn-success" href="profil-duzenle.php?id=<?php echo $row['id']; ?>" data-toggle="tooltip" data-placement="top" title="Düzenle"><i class="fa fa-edit"></i></a>
                          <a class="btn btn-danger" href="kullanici-yonetimi.php?sil=<?php echo $row['id']; ?>"  title="Sil"><i class="fa fa-trash"></i></a>
                </div>
                </td>
                </tr>
                <?php }} ?>

                </tbody>
                <tfoot>
                  <tr>
                    <th>Adı</th>
                    <th>Soyadı</th>
                    <th>Kullanıcı Adı</th>
                    <th>E-Posta Adresi</th>
                    <th>Parolası</th>
                    <th>Yetkisi</th>
                    <th>Kayıt Tarihi</th>
                    <th>İşlemler</th>
                  </tr>
                </tfoot>
                </table>
              </div>
              <!-- /.modal-dialog -->
                <?php if(isset($_GET['sil'])==true){ ?>
                           <div class="modal modal-default fade no-modal" style="display:block; opacity:1">
                           <div class="modal-dialog">
                             <div class="modal-content" style=" margin-top: 35vh">
                               <div class="modal-header">
                                 <h4 class="modal-title">Silme İşlemi</h4>
                               </div>
                               <div class="modal-body">
                               <p>
                                 <?php
                                 $id=$_GET['sil'];
                                  $baglan = $db->query("SELECT * FROM users WHERE id=$id", PDO::FETCH_ASSOC);
                                 if ( $baglan->rowCount() ){
                                   foreach( $baglan as $row ){ 
                                     echo $row['adi']." ".$row['soyadi']." isimli kullanıcıyı silmek istediğinize emin misiniz ?";
                                   }
                                 }
                                   ?> 
                                 </p>
                               </div>
                               <div class="modal-footer">
                                 <a href="kullanici-yonetimi.php" class="btn btn-danger pull-left" data-dismiss="modal">Hayır</a>
                                 <a href="kullanici-yonetimi.php?silindi=<?php echo $_GET['sil']; ?>" class="btn btn-success">Evet</a>
                               </div>
                             </div>
                           </div>
                         </div>
              <?php } ?>
               <!-- /.modal-dialog -->
            </div>
            <?php
              if(isset($_GET['silindi'])==true){
                $query = $db->prepare("DELETE FROM users WHERE id = :id");
                $delete = $query->execute(array(
                  'id' => $_GET['silindi']
                ));
                header("Location:kullanici-yonetimi.php");
              }
            ?>
        </div>
        <!-- Box Footer -->
        <!-- ================================================== -->
        <div class="box-footer">
          <div class="col-sm-6 col-xs-12">
            <p class="box-title">Kullanıcı Yönetimi</p>
          </div>
          <div class="col-sm-6 col-xs-12 text-right"><a class="btn btn-primary ajax" href="kullanici-ekle.php">Yeni Kullanıcı Ekle</a></div>
        </div>
        </form>
      </div>
    </div>
</div>
</section>
</div>

<?php include "footer.php" ?>
<script type="text/javascript">
  $(document).ready(function () {
    $('#example1').DataTable({
      "language": {
        "lengthMenu": "Sayfa başına _MENU_ kayıt göster",
        "loadingRecords": "Yükleniyor...",
        "processing": "İşleniyor...",
        "zeroRecords": "Kayıt Bulunamadı - 0",
        "info": "Gösterilen Sayfa _PAGE_ / _PAGES_",
        "infoEmpty": "Kayıt mevcut değil",
        "infoFiltered": "(Toplam _MAX_ kayıt içerisinden filtrelendi)",
        "sSearch": "Arama Yap:",
        "paginate": {
          "first": "İlk sayfa",
          "last": "Son sayfa",
          "next": "Sonraki",
          "previous": "Önceki"
        },
      }
    });
  });
</script>
