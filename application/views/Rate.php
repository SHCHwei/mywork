<div id="page-wrapper">

<h1>匯率</h1>

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">各貨幣</div>
          <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>轉換方式</th>
                                            <th>匯率</th>
                                            <th>日期時間</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?foreach($Rate as $key => $value):?>
                                        <tr>
                                            <td><span><a href="https://www.google.com/search?q=<?=substr($key,3)?>"><?=substr($key,3)?></span></td>
                                            <td><?=$key?></td>
                                            <td><?=$value["Exrate"]?></td>
                                            <td><?=$value["UTC"]?></td>
                                        </tr>
                                      <?endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
      </div>
</div><!-- row>

</div><!-- /#page-wrapper -->
