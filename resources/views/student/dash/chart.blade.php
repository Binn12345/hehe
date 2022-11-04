@extends('layouts.app')
<title>

        BCP - Statistics

</title>
@section('content')
<script type="text/javascript" defer>
  let analytics = <?php echo $gender; ?>;
  let application = <?php echo $application; ?>;
</script>

<div class="content-wrapper">
      


      <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Pie chart</h3>
                    </div>
                    <div class="panel-body" align="center">
                        <div id="pie_chart"></div>
                    </div>
                </div>
            </div>


            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Line chart</h3>
                    </div>
                    <div class="panel-body" align="center">
                        <div id="linechart"></div>
                    </div>
                </div>
            </div>

        </div>

      </div>







</div>
@endsection