
<div class="topbar">
    <div class="toggle">
        <ion-icon name="menu-outline"></ion-icon>
    </div>

    <div class="search">
        <label>
            <input type="text" placeholder="Search here">
            <ion-icon name="search-outline"></ion-icon>
        </label>
    </div>
    
    <div class="user">
        <img src="../images/default-profile.png" alt="">
        <div class="info">
            <p><?php echo $_SESSION['username']; ?></p>
            <small><?php echo $_SESSION['role']; ?></small>  
        </div>
    </div>
</div>