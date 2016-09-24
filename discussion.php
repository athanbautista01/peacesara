        <?php
        //Connect to MySQL
        // require_once("database/connect.php");
        //include the header
        $title="Peacesara | Discussions";
        include("include/header.php");
        ?>

        <div class="container">
            <hr>
            <div class="col-lg-6">
                <h2>Is the idea of world peace an impossible dream?</h2>
                <p class="dDesc">The First World War was supposed to be the “war to end war”. One hundred years ago, millions were dying in one of the deadliest conflicts in history. Machine guns, barbed wire and poison gas brought innovative new ways of brutalisig our neighbours.
                    <br><br>
                    Of course, 1918 did not bring the end of warfare. An even more bloody conflict would begin in 1939 and, as Syria, Iraq, Ukraine, Yemen and Libya have shown, warfare is very much still alive in the 21st Century.
                    <br><br>
                    However, is it naïve to believe that war might one day become a thing of the past? In 2011, Steven Pinker argued in his book, The Better Angels of Our Nature, that wars were growing less common and less violent. Even with the recent upsurge in violence this year, there are still fewer deaths caused by conflict than during the Cold War (180,000 a year from 1950 to 1989, according to the Peace Research Institute Oslo) and many times fewer than during the First or Second World Wars.</p>
                    <br>
                    <img height="300px" src="img/debate1.jpg">
                    <br><br>
                    <div class="col-lg-6">
                        <span class="badge">5</span>&emsp;<a class="btn btn-success" href="#" role="button">PRO</a> 
                    </div>
                    <div class="col-lg-6">
                        <a class="btn btn-danger" href="#" role="button">CON</a>&emsp;<span class="badge">5</span>
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
            <br>
            <?php
        //include the header
            include("include/footer.php");
            ?>