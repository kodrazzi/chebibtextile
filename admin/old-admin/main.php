<?php include "header.php" ?>

<main class="mn-inner inner-active-sidebar">
    <div class="middle-content">
        <div class="row no-m-t no-m-b">
        <div class="col s12 m12 l4">
            <div class="card stats-card">
                <div class="card-content">
                    <div class="card-options">
                        <ul>
                            <li class="red-text"><span class="badge cyan lighten-1">gross</span></li>
                        </ul>
                    </div>
                    <span class="card-title">Sales</span>
                    <span class="stats-counter">$<span class="counter">48190</span><small>This week</small></span>
                </div>
                <div id="sparkline-bar"></div>
            </div>
        </div>
            <div class="col s12 m12 l4">
            <div class="card stats-card">
                <div class="card-content">
                    <div class="card-options">
                        <ul>
                            <li><a href="javascript:void(0)"><i class="material-icons">more_vert</i></a></li>
                        </ul>
                    </div>
                    <span class="card-title">Page views</span>
                    <span class="stats-counter"><span class="counter">83710</span><small>This month</small></span>
                </div>
                <div id="sparkline-line"></div>
            </div>
        </div>
        <div class="col s12 m12 l4">
            <div class="card stats-card">
                <div class="card-content">
                    <span class="card-title">Reports</span>
                    <span class="stats-counter"><span class="counter">23230</span><small>Last week</small></span>
                    <div class="percent-info green-text">8% <i class="material-icons">trending_up</i></div>
                </div>
                <div class="progress stats-card-progress">
                    <div class="determinate" style="width: 70%"></div>
                </div>
            </div>
        </div>
    </div>
        <div class="row no-m-t no-m-b">
            <div class="col s12 m12 l8">
                <div class="card visitors-card">
                    <div class="card-content">
                        <div class="card-options">
                            <ul>
                                <li><a href="javascript:void(0)" class="card-refresh"><i class="material-icons">refresh</i></a></li>
                            </ul>
                        </div>
                        <span class="card-title">Visitors<span class="secondary-title">Showing stats from the last week</span></span>
                                <div id="flotchart1"></div>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l4">
                <div class="card server-card">
                    <div class="card-content">
                    <div class="card-options">
                        <ul>
                            <li class="red-text"><span class="badge blue-grey lighten-3">optimal</span></li>
                        </ul>
                    </div>
                        <span class="card-title">Server Load</span>
                                    <div class="server-load row">
                                        <div class="server-stat col s4">
                                            <p>167GB</p>
                                            <span>Usage</span>
                                        </div>
                                        <div class="server-stat col s4">
                                            <p>320GB</p>
                                            <span>Space</span>
                                        </div>
                                        <div class="server-stat col s4">
                                            <p>57.4%</p>
                                            <span>CPU</span>
                                        </div>
                                    </div>
                        <div class="stats-info">
                            <ul>
                                <li>Google Chrome<div class="percent-info green-text right">32% <i class="material-icons">trending_up</i></div></li>
                                <li>Safari<div class="percent-info red-text right">20% <i class="material-icons">trending_down</i></div></li>
                                <li>Mozilla Firefox<div class="percent-info green-text right">18% <i class="material-icons">trending_up</i></div></li>
                            </ul>
                        </div>
                        <div id="flotchart2"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-m-t no-m-b">
            <div class="col s12 m12 l12">
                <div class="card invoices-card">
                    <div class="card-content">
                        <div class="card-options">
                            <input type="text" class="expand-search" placeholder="Search" autocomplete="off">
                        </div>
                        <span class="card-title">Invoices</span>
                    <table class="responsive-table bordered">
                        <thead>
                            <tr>
                                <th data-field="id">ID</th>
                                <th data-field="number">Payment Type</th>
                                <th data-field="company">Company</th>
                                <th data-field="date">Date</th>
                                <th data-field="progress">Progress</th>
                                <th data-field="total">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#203</td>
                                <td>PayPal</td>
                                <td>Curabitur Libero Corp</td>
                                <td>Dec 16, 18:12</td>
                                <td><span class="pie">3/8</span></td>
                                <td>$5430</td>
                            </tr>
                            <tr>
                                <td>#202</td>
                                <td>American Express</td>
                                <td>Integer Mattis Ltd</td>
                                <td>Nov 29, 13:56</td>
                                <td><span class="pie">5/8</span></td>
                                <td>$1400</td>
                            </tr>
                            <tr>
                                <td>#200</td>
                                <td>Discover</td>
                                <td>Pellentesque Inc</td>
                                <td>Nov 17, 19:14</td>
                                <td><span class="pie">3/8</span></td>
                                <td>$1250</td>
                            </tr>
                            <tr>
                                <td>#199</td>
                                <td>MasterCard</td>
                                <td>Curabitur Libero Corp</td>
                                <td>Oct 21, 12:16</td>
                                <td><span class="pie">5/8</span></td>
                                <td>$1349</td>
                            </tr>
                            <tr>
                                <td>#198</td>
                                <td>Amex</td>
                                <td>Integer Mattis Ltd</td>
                                <td>Oct 14, 22:43</td>
                                <td><span class="pie">3/8</span></td>
                                <td>$980</td>
                            </tr>
                            <tr>
                                <td>#197</td>
                                <td>PayPal</td>
                                <td>Pellentesque Inc</td>
                                <td>Sept 29, 10:33</td>
                                <td><span class="pie">5/8</span></td>
                                <td>$679</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-m-t no-m-b">
          <div class="col s12 m12 l12">
            <h5>Version 1.6.7</h5>
            <h5>Copyright © 2013-2018 |
              <a style="color:#333" href="http://tarzyazilim.com.tr" target="_blank">
                <img src="img/tarz-logo-15.png" alt="tazr-logo">Tarz Yazılım</a> | Tüm hakları saklıdır.
            </h5>
          </div>
        </div>
    </div>
    <div class="inner-sidebar">
        <span class="inner-sidebar-title">New Messages</span>
        <div class="message-list">
        <div class="info-item message-item"><img class="circle" src="assets/images/profile-image-2.png" alt=""><div class="message-info"><div class="message-author">Ned Flanders</div><small>3 hours ago</small></div></div>
        <div class="info-item message-item"><img class="circle" src="assets/images/profile-image.png" alt=""><div class="message-info"><div class="message-author">Peter Griffin</div><small>4 hours ago</small></div></div>
        <div class="info-item message-item"><img class="circle" src="assets/images/profile-image-1.png" alt=""><div class="message-info"><div class="message-author">Lisa Simpson</div><small>2 days ago</small></div></div>
        </div>
        <span class="inner-sidebar-title">Events</span>
        <span class="info-item">Envato meeting<span class="new badge">12</span></span>
        <div class="inner-sidebar-divider"></div>
        <span class="info-item">Google I/O</span>
        <div class="inner-sidebar-divider"></div>
        <span class="info-item disabled">No more events scheduled</span>
        <div class="inner-sidebar-divider"></div>
        
        <span class="inner-sidebar-title">Stats <i class="material-icons">trending_up</i></span>
        <div class="sidebar-radar-chart"><canvas id="radar-chart" width="170" height="140"></canvas></div>
    </div>
</main>
<!-- <div class="content-wrapper">
  <section class="content-header">
    <h1>Kontrol Paneli<small>Ayarlar</small></h1>
    <ol class="breadcrumb">
      <li class="active"><a href="index.html"><i class="fa fa-dashboard"></i> Kontrol Paneli</a></li>
    </ol>
  </section>
  <section class="content">
    <div class="row" id="dash-section">
      <div class="col-lg-4 col-xs-12">
        <div class="info-box bg-facebook"><span class="info-box-icon"><i class="fa fa-facebook"></i></span>
          <div class="info-box-content"><span class="info-box-text">Facebook Sayfanız</span><span class="info-box-number"><?php  ?> </span><span class="progress-description">Beğeni</span></div>
        </div>
      </div>
      <div class="col-lg-4 col-xs-12">
        <div class="info-box bg-instagram"><span class="info-box-icon"><i class="fa fa-instagram"></i></span>
          <div class="info-box-content"><span class="info-box-text">Instagram Sayfanız</span><span class="info-box-number">1,410</span><span class="progress-description">Takipçi</span></div>
        </div>
      </div>
      <div class="col-lg-4 col-xs-12">
        <div class="info-box bg-google-plus"><span class="info-box-icon"><i class="fa fa-google-plus"></i></span>
          <div class="info-box-content"><span class="info-box-text">Google+ Sayfanız</span><span class="info-box-number">1,410</span><span class="progress-description">Takipçi</span></div>
        </div>
      </div>
    </div>
    <div class="row" id="dash-section">
      <div class="col-lg-4 col-xs-12">
        <div class="info-box bg-youtube"><span class="info-box-icon"><i class="fa fa-youtube-play"></i></span>
          <div class="info-box-content"><span class="info-box-text">YouTube Kanalınız</span><span class="info-box-number">1,410</span><span class="progress-description">Takipçi</span></div>
        </div>
      </div>
      <div class="col-lg-4 col-xs-12">
        <div class="info-box bg-twitter"><span class="info-box-icon"><i class="fa fa-twitter"></i></span>
          <div class="info-box-content"><span class="info-box-text">Twitter Hesabınız</span><span class="info-box-number">1,410</span><span class="progress-description">Takipçi</span></div>
        </div>
      </div>
      <div class="col-lg-4 col-xs-12">
        <div class="info-box bg-foursquare"><span class="info-box-icon"><i class="fa fa-foursquare"></i></span>
          <div class="info-box-content"><span class="info-box-text">Foursquare Hesabınız</span><span class="info-box-number">7.6/10</span><span class="progress-description">1.600 Puanlama</span></div>
        </div>
      </div>
    </div>
    <div class="row" id="dash-section">
      <div class="col-lg-4 col-xs-12">
        <div class="info-box bg-google-analytics"><span class="info-box-icon"><i class="fa fa-user"></i></span>
          <div class="info-box-content"><span class="info-box-text">Anlık Ziyaretçi Sayısı</span><span class="info-box-number">1,410</span><span class="progress-description">Kişi</span></div>
        </div>
      </div>
      <div class="col-lg-4 col-xs-12">
        <div class="info-box bg-google-analytics"><span class="info-box-icon"><i class="fa fa-users"></i></span>
          <div class="info-box-content"><span class="info-box-text">Toplam Ziyaretçi Sayısı</span><span class="info-box-number">1,410</span><span class="progress-description">Kişi</span></div>
        </div>
      </div>
      <div class="col-lg-4 col-xs-12">
        <div class="info-box bg-google-analytics"><span class="info-box-icon"><i class="fa fa-flash"></i></span>
          <div class="info-box-content"><span class="info-box-text">Toplam Sayfa Görüntüleme</span><span class="info-box-number">1,410</span>
            <span class="progress-description">Görüntüleme</span>
          </div>
        </div>
      </div>
    </div>
    <div class="row" id="dash-section">
      <div class="col-lg-3 col-xs-12"><a class="btn btn-app btn-block bg-gray" href="meta-favicon-logo.html"><i class="fa fa-globe"></i> Meta, Favicon ve Logo Düzenle</a></div>
      <div class="col-lg-3 col-xs-12"><a class="btn btn-app btn-block bg-gray" href="stil-ve-scriptler.html"><i class="fa fa-edit"></i> Özel Stil ve Scriptleri Düzenle</a></div>
      <div class="col-lg-3 col-xs-12"><a class="btn btn-app btn-block bg-gray" href="kurumsal-bilgiler.html"><i class="fa fa-edit"></i> Kurumsal Bilgileri Düzenle</a></div>
      <div class="col-lg-3 col-xs-12"><a class="btn btn-app btn-block bg-gray" href="kullanici-ekle.html"><i class="fa fa-user-plus"></i> Yeni Kullanıcı Ekle</a></div>
    </div>
  </section>
</div> -->

<?php include "footer.php" ?>