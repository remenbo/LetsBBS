    <div class="footer">
        <div class="container">
            <p>Copyright © 2014 <a href="<?php echo base_url();?>"><?php echo $site_name;?></a>. All rights reserved.</p>
            <p>Powered By <a href="http://letsbbs.com">Let'sBBS</a> v0.1.2 build-141205. Page rendered in <?php echo $this->benchmark->elapsed_time();?> seconds.</p>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url('static/js/jquery.min.js');?>"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url('static/js/bootstrap.min.js');?>"></script>
        <?php echo $site_analysis;?>
    </div><!-- /.footer -->
