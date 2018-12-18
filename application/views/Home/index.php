<?php $this->load->view('Include/header'); ?>
<!--<img class="banner" src="<?php echo base_url(); ?>assets/img/banner.jpg">-->
<div class="fluid-container banner" style="height: 400px;">
    <div class="container">
        <form method="get" action="<?php echo base_url();?>Search">

            <div class="row searchBar">
                <div class="col-md-4">
                    <div class="form-group">
                        <select class="form-control" id="dname" name="dname">
                            <?php
                            foreach ($diseases as $disease)
                            {
                            ?>

                            <option value="<?php echo $disease->dname; ?>"><?php echo $disease->dname; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <script type="text/javascript">
                            $('#did').select2({
                                placeholder: '--- Select Diseases ---',
                            });
                        </script>
                    </div>               

                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <select name="couid" id="couid" class="form-control">
                            <?php
                            foreach ($countries as $country)
                            {
                            ?>

                            <option value="<?php echo $country->couid; ?>"><?php echo $country->couname; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <script type="text/javascript">
                            $('#couid').select2({
                                placeholder: '--- Select Country ---',
                            });
                        </script>
                    </div>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary mb-2">Search</button>
                </div>
            </div>
        </form>
    </div>
</div>
<br>
<div class="container">
    <h2>About Us</h2>
    <p>@Chud37: it depends what you have to do, tables for layout are generally not versatile and long to type in code, with css you can easily change a 2 cols layout into a 3/4/5 sols layout etc. But in this case is different, using dozens of css tips-and-tricks for such a simple task that could be accomplished with a perfect cross-browser table, it's like attempting to enter in your house through the window instead of using the door. – Marco Demaio Jan 24 '13 at 19:52
    </p>
    <p>@Chud37: it depends what you have to do, tables for layout are generally not versatile and long to type in code, with css you can easily change a 2 cols layout into a 3/4/5 sols layout etc. But in this case is different, using dozens of css tips-and-tricks for such a simple task that could be accomplished with a perfect cross-browser table, it's like attempting to enter in your house through the window instead of using the door. – Marco Demaio Jan 24 '13 at 19:52
    </p>
    <p>@Chud37: it depends what you have to do, tables for layout are generally not versatile and long to type in code, with css you can easily change a 2 cols layout into a 3/4/5 sols layout etc. But in this case is different, using dozens of css tips-and-tricks for such a simple task that could be accomplished with a perfect cross-browser table, it's like attempting to enter in your house through the window instead of using the door. – Marco Demaio Jan 24 '13 at 19:52
    </p>
</div>
<?php $this->load->view('Include/footer'); ?>
</body>
</html>
