@extends('dashboard.layout.dashboardMaster')
@section('contact-page')


 <div class="row my-3 ms-3">
  <div class=" col-sm-12 col-md-6">
    <canvas id="myChart"  width="150" height="100" ></canvas>
  </div>
  <div class=" col-sm-12 col-md-6">
    <canvas id="myChart2"  width="150" height="100" ></canvas>
  </div>
</div>
 <form>
 <div class="input-group mb-3 col-4">
      <select name="date" id="changedate" class="form-select">
          <option  value="{{date("Y-m-d H:i:s",time()-24*60*60)}}"  >Day</option>
          <option  value="{{date("Y-m-d H:i:s",time()-7*24*60*60)}}">Week</option>
          <option  value="{{date("Y-m-d H:i:s",time()-30*24*60*60)}}">Monthes</option>
      </select>
      <input type="submit"  class="btn btn-primary" value="{{__('dashboard.change')}}">
  </div>
</form>
 <div class="row mt-3 ms-3">
  <div class=" col-sm-12 col-md-6">
    <canvas id="myChart3"  width="150" height="100" ></canvas>
  </div>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="/js/jquery.min.js"></script>

<script>

  const ctx = document.getElementById('myChart');
    $.get('/api/charts',(data)=>{
   counts=[]
   country=[]
      for(var i=0;i<data.length;i++){
        counts.push(data[i].count)
        country.push(data[i].country)
      }
      new Chart(ctx, {
    type: 'bar',
    data: {

      labels:country,
      datasets: [{
        label: 'Country',
        data: counts,
        borderWidth: true
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
 })
 // chart 2
   const ctx2 = document.getElementById('myChart2');
    $.get('/api/charts-page',(data)=>{
   counts=[]
   page=[]
      for(var i=0;i<data.length;i++){
        counts.push(data[i].count)
        page.push(data[i].page)
      }
      console.log(counts)
      new Chart(ctx2, {
    type: 'line',
    data: {
      labels:page,
      datasets: [{
        label:'Count page',
        data: counts,
        borderWidth: true
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
 })

 
  $("form").on("submit",(e)=>{
    e.preventDefault()
   date=$("#changedate").val()
   const ctx3 = document.getElementById('myChart3');
    $.get('/api/reports-page?date='+date,(data)=>{
   counts=[]
   page=[]
      for(var i=0;i<data.length;i++){
        counts.push(data[i].count)
        page.push(data[i].page)
      }
      console.log(counts)
      new Chart(ctx3, {
    type: 'line',
    data: {
      labels:page,
      datasets: [{
        label:'Count page',
        data: counts,
        borderWidth: true
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
 })
})

</script>
 
@endsection