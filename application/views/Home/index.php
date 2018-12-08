<?php $this->load->view('Include/header'); ?>
<div class="container">
    <form method="post" action="<?php echo base_url();?>Search">

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <select class="form-control" id="did" name="did">
                        <?php
                        foreach ($diseases as $disease)
                        {
                        ?>

                        <option value="<?php echo $disease->did; ?>"><?php echo $disease->dname; ?></option>
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
            <div class="col-md-3">
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

</body>
</html>
