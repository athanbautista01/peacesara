        <?php
        //Connect to MySQL
        // require_once("database/connect.php");
        //include the header
        $title="Peacesara | Discussions";
        include("include/header.php");
        ?>
        <hr>
        <div class="container">
            <div class="col-lg-6">
                <h2 class="dDesc">Is the idea of world peace an impossible dream?</h2>
                <p class="dDesc">TLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed lobortis risus, vitae viverra erat. Aliquam dictum urna sed feugiat consequat. Cras tincidunt mollis lorem ac aliquet. Fusce elit ante, aliquam finibus semper vehicula, pellentesque quis tellus. Sed mollis congue metus, nec dignissim est vehicula vel. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In tristique, enim a aliquet sagittis, justo velit congue nisl, et condimentum diam velit ac urna. Sed mollis, quam nec eleifend porta, sapien augue elementum ante, non iaculis nulla enim a diam. Maecenas vitae tempus lectus. Etiam dapibus quam quis pulvinar dictum. Vivamus efficitur interdum odio vitae lobortis.</p>
                <br>
                <img class="img-responsive" src="img/debate1.jpg">
                <br><br>
                <div class="col-lg-12">
                    <span class="badge">5</span>&nbsp;<a class="btn btn-success" href="#" role="button">PRO</a> 
                    &nbsp;&nbsp;
                    <a class="btn btn-danger" href="#" role="button">CON</a>&nbsp;<span class="badge">5</span>
                </div>
            </div>
            <div class="col-lg-3">
                <h2 class="bg-success">PRO</h2>
                <form action="uploadBlog.php" method="post">
                    <textarea class="input form-control" rows="3" type="text" name="content" required placeholder="Input opinion for this topic." class="input form-control"></textarea>
                    <input type="submit" name="submitAdd" value="Submit" class="btn btn-default" />
                    <a class="btn btn-default" href="index.php">Cancel</a>
                </form>
                <hr>
                <div class="gg">
                    <div class="col-lg-3">
                        <img height="50px" src="img/about/athan.png">
                    </div>

                    <div class="col-lg-9">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed lobortis risus, vitae viverra erat. Aliquam dictum urna sed feugiat consequat. Cras tincidunt mollis lorem ac aliquet. Fusce elit ante, aliquam finibus semper vehicula, pellentesque quis tellus. Sed mollis congue metus, nec dignissim est vehicula vel. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In tristique, enim a aliquet sagittis, justo velit congue nisl, et condimentum diam velit ac urna. Sed mollis, quam nec eleifend porta, sapien augue elementum ante, non iaculis nulla enim a diam. Maecenas vitae tempus lectus. Etiam dapibus quam quis pulvinar dictum. Vivamus efficitur interdum odio vitae lobortis.</p>
                        <hr>
                    </div>
                    <div class="col-lg-3">
                        <img height="50px" src="img/about/ivy.png">
                    </div>

                    <div class="col-lg-9">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed lobortis risus, vitae viverra erat. Aliquam dictum urna sed feugiat consequat. Cras tincidunt mollis lorem ac aliquet. Fusce elit ante, aliquam finibus semper vehicula, pellentesque quis tellus. Sed mollis congue metus, nec dignissim est vehicula vel. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In tristique, enim a aliquet sagittis, justo velit congue nisl, et condimentum diam velit ac urna. Sed mollis, quam nec eleifend porta, sapien augue elementum ante, non iaculis nulla enim a diam. Maecenas vitae tempus lectus. Etiam dapibus quam quis pulvinar dictum. Vivamus efficitur interdum odio vitae lobortis.</p>
                        <hr>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <h2 class="bg-danger">CON</h2>
                <form action="uploadBlog.php" method="post">
                    <textarea class="input form-control" rows="3" type="text" name="content" required placeholder="Input opinion for this topic." class="input form-control"></textarea>
                    <input type="submit" name="submitAdd" value="Submit" class="btn btn-default" />
                    <a class="btn btn-default" href="index.php">Cancel</a>
                </form>
                <hr>
                <div class="gg">
                    <div class="col-lg-3">
                        <img height="50px" src="img/about/mads.png">
                    </div>

                    <div class="col-lg-9">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed lobortis risus, vitae viverra erat. Aliquam dictum urna sed feugiat consequat. Cras tincidunt mollis lorem ac aliquet. Fusce elit ante, aliquam finibus semper vehicula, pellentesque quis tellus. Sed mollis congue metus, nec dignissim est vehicula vel. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In tristique, enim a aliquet sagittis, justo velit congue nisl, et condimentum diam velit ac urna. Sed mollis, quam nec eleifend porta, sapien augue elementum ante, non iaculis nulla enim a diam. Maecenas vitae tempus lectus. Etiam dapibus quam quis pulvinar dictum. Vivamus efficitur interdum odio vitae lobortis.</p>
                        <hr>
                    </div>
                    <div class="col-lg-3">
                        <img height="50px" src="img/about/kristel.png">
                    </div>

                    <div class="col-lg-9">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed lobortis risus, vitae viverra erat. Aliquam dictum urna sed feugiat consequat. Cras tincidunt mollis lorem ac aliquet. Fusce elit ante, aliquam finibus semper vehicula, pellentesque quis tellus. Sed mollis congue metus, nec dignissim est vehicula vel. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In tristique, enim a aliquet sagittis, justo velit congue nisl, et condimentum diam velit ac urna. Sed mollis, quam nec eleifend porta, sapien augue elementum ante, non iaculis nulla enim a diam. Maecenas vitae tempus lectus. Etiam dapibus quam quis pulvinar dictum. Vivamus efficitur interdum odio vitae lobortis.</p>
                        <hr>
                    </div>
                </div>
            </div>

        </div>
        <hr>
        <?php
        //include the header
        include("include/footer.php");
        ?>