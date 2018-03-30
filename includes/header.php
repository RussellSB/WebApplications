<!-- The icon at the upperleft of the site. -->
    <div id="iconbox" class="hovering">
        <a href="../page-structures/frontPage.php"><img src="../images/synewave_icon_blended.gif" id="syneicon"></a>
    </div>

    <!-- The left side of the header. Contains the title, and three menu items. -->
    <div id="leftside">
        <a href="../page-structures/frontPage.php" class="navtext synewave">SyneWave</a>
        <a href="../page-structures/products.php" class="navtext menus">Products</a>
        <a href="../page-structures/aboutPage.php" class="navtext menus">About Us</a>
        <a href="../page-structures/contactUs.php" class="navtext menus">Contact Us</a>
    </div>

    <!-- The right side of the header. Contains the search bar, button, and shopping button. -->
    <div id="rightside">
        <form id="searcher">
            <input id="searchbox" type="text" placeholder="Search for Products" onkeypress="handle(event)">
        </form>
        <button id="search" onClick="search_func()"></button>
        <button id="shopping"></button>
    </div>