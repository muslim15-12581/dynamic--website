    <section>
        <div class="container-fluid content_part_full">
            <div class="row">
                <div class="col-md-2 sidebar_part">
                  <div class="user_part">
                    <img src="images/avatar.png" alt="avatar">
                    <h4><?= $_SESSION['name']; ?></h4>
                    <p><i class="fa fa-circle"></i> Online</p>
                  </div>
                  <div class="menu">
                      <ul>
                        <li><a href="index.php"><i class="fa fa-home"></i> Dashboard</a></li>
                        <?php if($_SESSION['role']==1){ ?>
                        <li><a href="all-user.php"><i class="fa fa-user-circle"></i> User</a></li>
                        <?php } ?>
                       <?php if($_SESSION['role']<=2){ ?>
                        <li><a href="#"><i class="fa fa-bandcamp"></i> Banner</a></li>
                        <?php } ?>
                        <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                      </ul>
                  </div>
                </div>
                <div class="col-md-10 content_part">
                    <div class="row custom_bread_part">
                        <div class="col-md-12 bread">
                             <ul>
                               <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                               <li><a href="#"><i class="fa fa-angle-double-right"></i> Dashboard</a></li>
                             </ul>
                        </div>
                    </div>
                    <div class="row">
