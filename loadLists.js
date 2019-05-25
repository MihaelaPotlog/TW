 google.charts.load("current", {packages:['table']});
google.charts.setOnLoadCallback(drawVisualization);
 
//function drawVisualization() {
//      var data=google.visualization.drawChart({
//        "containerId": "container1",
//        "dataSourceUrl": "//www.google.com/fusiontables/gvizdata?tq=",
//        "query":"SELECT 'category' as 'Tipul alertei','Descriere','latitude','longitude' FROM " +
//                "1t88h2rQ-TYF7J-z3lgvHpIvL5IhgLGc3dPapj5YS",
//        "refreshInterval": 0,
//        "chartType": "Table",
//        "options": {}
//     });
//    } 
  function drawVisualization() {
      var data=google.visualization.drawChart({
        "containerId": "list",
        "dataSourceUrl": "//www.google.com/fusiontables/gvizdata?tq=",
        "query":"SELECT 'AlertType' as 'Tipul alertei','Descriere','Latitude','Longitude' FROM " +
                "1CyNY17D44fZ5ceHUe-GDm4B-zfRpvkexoWD6uH-t",
        "refreshInterval": 0,
        "chartType": "Table",
        "options": {}
     });
    }  