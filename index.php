<?php
    require 'engine.php';
    $obj = new Domain;
    // <input id="search_btn" name="domain_search" type="submit" class="btn btn-info" value="SEARCH"> 
?>
<html>
    <head>
        <title>Max Defers Removal</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style type="text/css">
            #table-domain
            {
                width: 30%;
            }
        </style>
    </head>
    <body>
        <div class="jumbotron">
        </div>
        <div class="container-fluid">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h2>MAX-DEFER REMOVAL [ BETA 0.1 ]</h2>
                    </div>
                    <div class="panel-body">
                        <p class="txt" id="notification"><?php echo $notification ?></p>
                        <form method="post" name="search_form">
                            <div class="form-group">
                                <input id="prependedtext" name="txt_domain" type="text" placeholder="domain" class="form-control input-md">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info" name="domain_search"><b><span class="glyphicon glyphicon-search"></span> SEARCH</b></button>
                            </div>
                            <div class="form-group" id="action-table">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th id="table-domain">
                                                    Domain
                                                </th>
                                                <th>
                                                    Actions
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>
                                                    <?php echo $domain ?>
                                                </th>
                                                <th>
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-danger form-control" name="remove_defer"><b><span class="glyphicon glyphicon-remove"></span> REMOVE</b></button>
                                                    </div>
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer">
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#action-table').hide();
                $lock = $('#notification').text();
                if($lock == "NOT LISTED" || $lock == "Domain must be valid" || $lock == "Enter the domain")
                {
                    $('#action-table').hide();
                }
                else
                {
                    $('#action-table').slideDown();
                }
            });
        </script>
    </body>
</html>