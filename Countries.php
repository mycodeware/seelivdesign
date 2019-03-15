<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
<?php include("head.php") ?>
</head>

<body>
<?php include("header.php"); ?>
<main>
<section class="side-bar">
  <div class="side-bar-content">
    <div class="search-list-item"><input type="text" placeholder="Search here"></div>
    <div class="sidebar-list">
    <ul class="fa-ul">
                                <li><a class="active" href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Countries</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-map-marker"></i></span>States</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-envelope"></i></span>Postal Address</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-subway" ></i></span>Subway Address</a></li>
                          </ul>
                          </div>
  </div>
</section>
<div class="content">
  <div class="content-data">
  <div class="content-in">
    <div class="content-fix-head">
       <h1>Countries</h1>
       <div class="filter-form">
         <div class="mob-filt-btn"><button id="filter-open"><i class="fa fa-search"></i></button></div>
         <div class="form-fl form-3">
           <div class="mob-filter-head"><button id="filter-close"><i class="fa fa-arrow-left"></i></button><p>Country Search</p></div>
           <div class="t-b-one"><input type="text" placeholder="Country id" ><button type="submit"><i class="fa fa-search"></i></button></div>
           <div class="o-b-one">
             <div class="select-box">
             <label for="accent-sel" />All Accent</label>
             <select id="accent-sel">
             <option>All Accent</option>
             <option>----</option>
             <option>----</option>
             </select>
             </div>
           </div>
           <div class="t-b-one"><input type="text" placeholder="Enter country Name" ><button type="submit"><i class="fa fa-search"></i></button></div>
         </div>
         <div class="form-usr-option">
           <a href="#" class="add-opn">Add As New</a>
           <a href="#" class="rew-opn">Review Selected</a>
           <a href="#" class="del-opn">Delete Selected</a>
         </div>
       </div>   
       <div class="table-options">
         <div class="all-sel"><input type="checkbox" /> Select All</div>
         <div class="sort-option">
           <button class="sort-button active">All</button>
           <button class="sort-button">Review In Pending</button>
           <button class="sort-button">Review Completed</button>
         </div>
         <div class="table-pagging">
           <a href="#">&lt;</a>
           <a href="#">1</a>
           <a href="#">2</a>
           <a href="#">3</a>
           <a href="#">&gt;</a>
         </div>
       </div>
    </div>
    <div class="main-content">
      <div class="table-list country-table">
        <div class="table-row">
          <div class="cnt-top">
          <div class="country-name"><input type="checkbox" /> Canada</div>
          <div class="row-option"><a href="#">Edit</a></div>
          </div>
          <div class="cnt-btom">
           <ul class="row-list">
                                                   <li><img src="images/icon19.png"><span>621 </span></li>
                                                   <li><img src="images/icon29.png"><span>Kamran Ali </span></li>
                                                    <li><img src="images/icon20.png"><span>GH213433453324532343</span></li>
                                                     <li><img src="images/icon30.png"><span>Review In Pending</span> </li>
                                                      <li><img src="images/icon10.png"><span>Kamran Ali </span></li>
                                                       <li><img src="images/icon22.png"><span>GH213433453324532343</span></li>
                                             </ul>
          </div>
        </div>
        <div class="table-row">
          <div class="cnt-top">
          <div class="country-name"><input type="checkbox" /> India</div>
          <div class="row-option"><a href="#">Edit</a></div>
          </div>
          <div class="cnt-btom">
           <ul class="row-list">
                                                   <li><img src="images/icon19.png"><span>1 </span></li>
                                                   <li><img src="images/icon29.png"><span>Kamran Ali </span></li>
                                                    <li><img src="images/icon20.png"><span>GH213433453324532343</span></li>
                                                     <li><img src="images/icon30.png"><span>Review In Pending</span> </li>
                                                      <li><img src="images/icon10.png"><span>Kamran Ali </span></li>
                                                       <li><img src="images/icon22.png"><span>GH213433453324532343</span></li>
                                             </ul>
          </div>
        </div>
        <div class="table-row">
          <div class="cnt-top">
          <div class="country-name"><input type="checkbox" /> China</div>
          <div class="row-option"><a href="#">Edit</a></div>
          </div>
          <div class="cnt-btom">
           <ul class="row-list">
                                                   <li><img src="images/icon19.png"><span>1000 </span></li>
                                                   <li><img src="images/icon29.png"><span>Kamran Ali </span></li>
                                                    <li><img src="images/icon20.png"><span>GH213433453324532343</span></li>
                                                     <li><img src="images/icon30.png"><span>Review In Pending</span> </li>
                                                      <li><img src="images/icon10.png"><span>Kamran Ali </span></li>
                                                       <li><img src="images/icon22.png"><span>GH213433453324532343</span></li>
                                             </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
</main>
<?php include("footer.php"); ?>
</body>
</html>