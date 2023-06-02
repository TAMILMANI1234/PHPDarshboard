<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <script src='https://cdn.plot.ly/plotly-2.20.0.min.js'></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="./index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Darshboard</title>
</head>

<body >
    <div class="container-fluid p-3">
         <div class="holder">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid">
                        <a class="navbar-brand" style="font-weight: bolder;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;" href="#">Darshboard</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-center"></div>
                               <div style="   padding-right: 20px;">
                               <h5>Welcome, Admin </h5>
                              </div>
                              <img style="width:40px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0PJZjbefCeukT7aMxU9MQ3h9Qn15ErvhDOHCPG0g&s"></img>
                        </div>
                        </div>
                    </nav>
         </div>

         <div class="container-fluid text-center first pt-3">
                <div class="row ">
                  <div class="col-sm ">
                        <div class="tab_data">
                                <table class="table  table-striped " id="myTable">
                                <thead style="position: sticky;top: 0" >
                                        <tr>
                                            <th style="position: sticky;top: 0">Started Year</th>
                                            <th style="position: sticky;top: 0">Ended Year</th>
                                            <th style="position: sticky;top: 0">Sectors</th>
                                            <th style="position: sticky;top: 0">Topics</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    include('./database/connection.php');
                                    $sql2= "SELECT * FROM data";
                                    $result2 =mysqli_query($con,$sql2);
                                    while($row =mysqli_fetch_array($result2)) 
                                    {
                                    ?>
                                    
                                    <tr>
                                        <td><?php  echo $row['end_year']; ?></td>
                                        <td><?php  echo $row['start_year']; ?></td>
                                        <td><?php  echo $row['sector']; ?></td>
                                        <td><?php  echo $row['topic']; ?></td>
                                    </tr>
                                    
                                    <?php } ?>
                                        
                                </table>
                        </div>
                        <div class="p-3">
                           <input class="form-control" type="text" style=" box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" id="myInput" onkeyup="search1()" placeholder="Search by year">
                        </div>
                  </div>
                  
                  <div class="col-sm">
                    <div class="tab_data">
                            <table class="table  table-striped " id="myTable2">
                                    <thead style="position: sticky;top: 0" >
                                        <tr>
                                            <th style="position: sticky;top: 0">Topics</th>
                                            <th style="position: sticky;top: 0">Added </th>
                                            <th style="position: sticky;top: 0">Published</th>
                                        </tr>
                                    <thead>
                                <?php
                                    $sql2= "SELECT * FROM data";
                                    $result2 =mysqli_query($con,$sql2);
                                    while($row =mysqli_fetch_array($result2)) 
                                    {
                                    ?>
                                    <tr>
                                        <td><?php  echo $row['topic']; ?></td>
                                        <td><?php  echo $row['added']; ?></td>
                                        <td><?php  echo $row['published']; ?></td>
                                    
                                    </tr>
                                    <?php } ?>
                            </table>
                        </div>
                        <div class="p-3">
                           <input class="form-control" type="text" style=" box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" id="myInput2" onkeyup="search2()" placeholder="Search by topics">
                        </div>
                  </div>
                  <div class="col-sm ">
                      <div class="tab_data">
                            <table class="table  table-striped " id="myTable3">
                                    <thead style="position: sticky;top: 0" >
                                        <tr>
                                            <th style="position: sticky;top: 0">Pestle</th>
                                            <th style="position: sticky;top: 0">Title</th>
                                            <th style="position: sticky;top: 0">Likelihood</th>
                                        </tr>
                                    <thead>
                                <?php
                                    $sql2= "SELECT * FROM data";
                                    $result2 =mysqli_query($con,$sql2);
                                    while($row =mysqli_fetch_array($result2)) 
                                    {
                                    ?>
                                    <tr>
                                        <td><?php  echo $row['pestle']; ?></td>
                                        <td><?php  echo $row['title']; ?></td>
                                        <td><?php  echo $row['likelihood']; ?></td>
                                    
                                    </tr>
                                    <?php } ?>
                            </table>

                        </div>
                        <div class="p-3 " >
                           <input class="form-control" type="text" style=" box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"  id="myInput3" onkeyup="search3()" placeholder="Search by Pestle">
                        </div>
                   </div>
                </div>
 
               <div class="chart1 p-3 ">
                  <div class="row">
                      <div class="col-lg-6 ">
                           <div style="display:flex; justify-content: center;">
                            <label style="font-size:20px;padding-right:15px;" >How many Year? </label>
                            <input id="getyear" type="number" class="form-control" placeholder="" onchange="search_by_years()"/>
                           </div>
                          <br>
                          <canvas id="myChart"  ></canvas> 
                      </div>
                      
                      <div class="col-lg-6 ">
                          <div style="display:flex; justify-content: center;">
                            <label style="font-size:20px;padding-right:15px;" >How many Countries? </label>
                            <input id="get_country_count" type="number" class="form-control" placeholder="" onchange="barchart()"/>
                           </div>
                          <br>
                          <div id="myPlot" style=" overflow: auto;"></div>
                      </div>
                  </div>

              </div>

                 <br>
              <div class="chart1 p-3">
                <div class="row">
                      <div class="col col-lg-6">
                            <div style="display:flex; justify-content: center;">
                            <label style="font-size:20px;padding-right:15px;" >How many Countries? </label>
                            <input id="get_country_count_pie" type="number" class="form-control" placeholder="" onchange="piechart()"/>
                           </div>
                          <canvas id="pie"  ></canvas>
                      </div>
                      
                       <div class="col col-lg-6">
                            <div style="display:flex; justify-content: center;">
                            <label style="font-size:20px;padding-right:15px;" >How many Countries? </label>
                            <input id="get_country_count_donut" type="number" class="form-control" placeholder="" onchange="donutchart()"/>
                           </div>
                         <canvas id="donut" style="width:100%;max-width:1000px;"></canvas>
                      </div>
                    </div>
                </div>

              
               
             
         </div>
         <br>
<footer class="container-fluid p-3">
  <div>
    <h3>Tamilmani, Young Developer</h3>
    <b>Describtion </b>
     <p>
         FrontEnd:HTML,CSS, Bootstrap
         <br>
         Backend:MYsql,PHP 
    </p>
  </div>
  <ul class="socials">
   <li><a href="https://www.facebook.com/profile.php?id=100069607300005"><i class="fa fa-facebook"></i></a></li>
   <li><a href=”#”><i class="fa fa-twitter"></i></a></li>
   <li><a href="https://www.linkedin.com/in/tamil-mani-a55283212/"><i class="fa fa-linkedin-square"></i></a></li>
</ul>
 
</footer>

 <script>
  var search_by_year;
  var no_of_year=0;

  var end_year=0;
  var citylng =0;
  var citylat=0;
  var intensity=0;
  var sector=0;
  var topic =0;
  var insight =0;
  var swot=0;
  var url =0;
  var region =0;
  var start_year=0;
  var impact =0;
  var added  =0;
  var published  =0;
  var city  =0;
  var country =0;
  var relevance=0;
  var pestle =0;
  var source =0;
  var title =0;
  var likelihood =0;

 /*Temp variable*/
  var take_country=[];

fetch('./database/fetch.php').then(response => response.json())
    .then(data => {
        
         end_year = data.map(item => item.end_year);
         citylng = data.map(item => item.citylng);
         citylat = data.map(item => item.citylat);
         intensity = data.map(item => item.intensity);
         sector = data.map(item => item.sector);
         topic = data.map(item => item.topic);
         insight = data.map(item => item.insight);
         swot = data.map(item => item.swot );
         url = data.map(item => item.url);
         region = data.map(item => item.region);
         start_year = data.map(item => item.start_year);
         impact = data.map(item => item.impact);
         added = data.map(item => item.added);
          published = data.map(item => item.published);
          city = data.map(item => item.city);
          country = data.map(item => item.country);
          relevance = data.map(item => item.relevance);
          pestle = data.map(item => item.pestle);
          source = data.map(item => item.source);
          title = data.map(item => item.title);
          likelihood = data.map(item => item.likelihood);
         
        no_of_year=end_year.length
        
        //get county=ry only*/
        let j=0;
        for(let i=0;i<country.length;i++){
           if(country[i]!==""){             
            take_country[j]=country[i];  
            j++;
           }
        }
        piechart();
        barchart();
        donutchart();
       



        //charts start  
      

        /*Line chart*/
          var xValues = [];
          var data1=[];
          var data2=[];
          var data3=[];
          for(let i=0;i<10;i++){
            xValues[i] =parseInt(end_year[i]);
            data1[i]=parseInt(intensity[i]);
            data2[i]=parseInt(relevance[i]);
            data3[i]=parseInt(likelihood [i]);
            
          }
        new Chart("myChart", {
          type: "line",
          data: {
            labels: xValues,
            datasets: [{
              data: data1,
              borderColor: "red",
              fill: false,
              label:"Intensity"
            },{
              data:data2,
              borderColor: "green",
              fill: false,
              label:"Relevance"
            },{
              data:data3,
              borderColor: "blue",
              fill: false,
              label:"Likelihood"
            }]
          },
          options: {
            legend: {display: true}
          }
        });
        /*Line chart*/
        // chart ends
}).catch(error => console.log(error));

function barchart(){
    var xArray = [];
    var yArray=[];
    let default_value=0;
    var count=document.getElementById("get_country_count").value;
    if(count===""){
      default_value=10
    }else{
      default_value=count;
    }
     for(let i=0;i<default_value;i++){
            xArray[i] = take_country[i];
            yArray[i]=parseInt(intensity[i]);  
          }  
        const data = [{
                    x:xArray,
                    y:yArray,
                    type:"bar"
                  }];

    const layout = {title:"Country - Intensity"};

  Plotly.newPlot("myPlot", data, layout);
}

function donutchart(){
  var xValues = [];
  var yValues = [];
  let default_value=0;
    var count=document.getElementById("get_country_count_donut").value;
    if(count===""){
      default_value=10
    }else{
      default_value=count;
    }
  for(let i=0;i<default_value;i++){
            xValues[i] = take_country[i];
            yValues[i]=parseInt(impact[i]);  
          } 
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145",
  "#e2baf5",
  "#13a000",
  "#ccc399",
  "#2e2d88",
  "#75531c",
  "#ae140c",
  "#fc1fa9",
  "#ccc499",
  "#3864c3",
  "#baebae",

];

new Chart("donut", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Country-Impact"
    }
  }
});
}
 
 
function piechart(){
  var xValues = [];
  var yValues = [];
  let default_value=0;
    var count=document.getElementById("get_country_count_pie").value;
    if(count===""){
      default_value=10
    }else{
      default_value=count;
    }
  for(let i=0;i<default_value;i++){
            xValues[i] = take_country[i];
            yValues[i]=parseInt(relevance[i]);  
          } 
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145",
  "#e2baf5",
  "#13a000",
  "#ccc399",
  "#2e2d88",
  "#75531c",
  "#ae140c",
  "#fc1fa9",
  "#ccc499",
  "#3864c3",
  "#baebae",

];

new Chart("pie", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Country-Relevence"
    }
  }
});
}

 
 function search_by_years(){
          var get_year=document.getElementById("getyear").value;   
          var xValues = [];
          var data1=[];
          var data2=[];
          var data3=[];
          
          for(let i=0;i<get_year;i++){
            xValues[i] =parseInt(end_year[i]);
            data1[i]=parseInt(intensity[i]);
            data2[i]=parseInt(relevance[i]);
            data3[i]=parseInt(likelihood [i]);
            
          }
          
          new Chart("myChart", {
            type: "line",
            data: {
              labels: xValues,
              datasets: [{
                data:  data1,
                borderColor: "red",
                fill: false,
                label:"Intensity"
              },{
                 
                data:  data2,
                borderColor: "green",
                fill: false,
                label:"Relevance"
              },{
               
                data: data3,
                borderColor: "blue",
                fill: false,
                label:"Likelihood"
                 
              }]
            },
            options: {
              legend: {display: true}
            }
          });      
           
 }



function search1() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

function search2() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable2");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

function search3() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput3");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable3");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

     
            
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
 
</body>

</html>
