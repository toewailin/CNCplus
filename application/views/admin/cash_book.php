<div class="container">
  
  </div>
                <div class="panel panel-primary" id="reportdata">
              <div class="panel-heading heading-over">

                  <div class="container"> 

          <div class="col-md-6">                <h3 class="panel-title"><i class="fa fa-bars"></i> Daily Cash Book for <?=$dateinterval?> </h3>
</div>

                <div class="col-md-6">
                    <form name="getreport"  id="daily_income_outcome">
              <?=$from?>
              <?=$to?> 
              <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
<input type="text" name="startdate" class="form-control-sale date" id="date1"/>
              <input type="button" class="btn btn-primary" value="<?=$search?>" onclick="search_incomeoutcome()">
            <!--  <span class="btn btn-default active" style="float:right" onclick="show_form('purchase_form')" >+ Add New</span> </a> -->
            </form>
                </div>
              </div>
              </div>
             
              <div class="panel-body">
                <div class="table-responsive panel-over">
           <div class="col-md-4">Incomes</div>
           <div class="col-md-4">Outcomes</div>

           <div class="col-md-4">col1</div>

                </div>
              </div>

            </div>
          </div>
     
