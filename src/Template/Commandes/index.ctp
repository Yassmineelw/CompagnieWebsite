<?php
$urlToRestApi = $this->Url->build('/api/commandes', true);
echo $this->Html->scriptBlock('var urlToRestApi = "' . $urlToRestApi . '";', ['block' => true]);
echo $this->Html->script('commandes/index', ['block' => 'scriptBottom']);
?>
        <div class="container">
            <div class="row">
                <div class="col-md-12 head">
                    <h5>Commandes (commande)</h5>
                    <!-- Add link -->
                    <div class="float-right">
                        <a href="javascript:void(0);" class="btn btn-success" data-type="add" data-toggle="modal" data-target="#modalCommandeAddEdit"><i class="plus"></i> New commande (commande)</a>
                    </div>
                </div>
                <div class="statusMsg"></div>
                <!-- List the Commandes -->
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name (name)</th>
                            <th>Code (code)</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="commandeData">
                        <?php if (!empty($commandes)) {
                            foreach ($commandes as $row) { ?>
                                <tr>
                                    <td><?php echo '#' . $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['code']; ?></td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-warning" 
                                           rowID="<?php echo $row['id']; ?>" data-type="edit" 
                                           data-toggle="modal" data-target="#modalCommandeAddEdit">
                                            edit
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-danger" 
                                           onclick="return confirm('Are you sure to delete data?') ? 
                                               commandeAction('delete', '<?php echo $row['id']; ?>') : false;">
                                            delete
                                        </a>
                                    </td>
                                </tr>
                            <?php }
                        } else { ?>
                            <tr><td colspan="5">No commande (commande) found...</td></tr>
<?php } ?>
                    </tbody>
                </table>
            </div>
        </div>



        <!-- Modal Add and Edit Form -->
        <div class="modal fade" id="modalCommandeAddEdit" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Add new commande (commande)</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <div class="statusMsg"></div>
                        <form role="form">
                            <div class="form-group">
                                <label for="name">Name (name)</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter the name (name)">
                            </div>
                            <div class="form-group">
                                <label for="code">Code (code)</label>
                                <input type="text" class="form-control" name="code" id="code" placeholder="Enter the code (code)">
                            </div>
                            <input type="hidden" class="form-control" name="id" id="id"/>
                        </form>
                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success" id="commandeSubmit">SUBMIT</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
