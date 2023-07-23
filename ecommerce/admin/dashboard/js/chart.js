function getEarnings(year){
  var yearToFetch = year || '';

$('#month_of').change(function(){
  start_load();
  $('#myAreaChart').remove()
  $('#chartField').append('<canvas id="myAreaChart"></canvas>')
  $.ajax({
     type: 'GET',
      url: appRoot+"dashboard/myAreaChart/"+yearToFetch,
        dataType: "html"
    error:err=>{
      console.log(err)
      Dtoast("An error occured.",'danger')
    },
    success:function(resp){
      if(resp && (typeof JSON.parse(resp) != undefined) ){
        resp = JSON.parse(resp)
        console.log(Object.keys(resp.sday).map(k=>resp.sday[k]))
        var ctxL = document.getElementById("myAreaChart").getContext('2d');

        var dynamicLineChart = new Chart(ctxL, {
        type: 'line',
        data: {
        labels: resp.days,
        datasets: [{
        label: "Daily Sales for the month of <?php echo date("F, Y",strtotime($cdate_from)) ?>",
        data: Object.keys(resp.sday).map(k=>resp.sday[k]),
        backgroundColor: [
        '#007bffa3',
        ],
        borderColor: [
        '#007bff',
        ],
        borderWidth: 2
        }
        ]
        },
        options: {
        responsive: true,
        scales:{
          yAxes:[{
            ticks:{
              callback:function(value){
                console.log(value)
                return parseFloat(value).toLocaleString('en-US',{style:'decimal',maximumFractionDigit:2})
              }
            }
          }]
        }
        }
        });

        
      }

      end_load();
    }
  })
})}



