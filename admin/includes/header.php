<div class="navbar navbar-inverse navbar-fixed-top"  role="navigation" >
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="login.php"><?php echo $config['title']; ?></a>
        </div>
        <div id="primary-menu" class="collapse navbar-collapse navbar-right custom-controls" data-animations="fadeInDown fadeInRight fadeInUp fadeInLeft id="controls">
            <ul class="nav navbar-nav">
                <li><a href="add_place.php" class="add">Добавить</a>
                <li><a href="delete_all.php" class="add">Удалить всё</a></li>
                <li><a href="logout.php" >Выйти</a>


                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>

</div>