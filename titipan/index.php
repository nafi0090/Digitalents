<!DOCTYPE html>
<html>
<head>
	<title>Sorting Table A-Z</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
			font-family: Arial, sans-serif;
			font-size: 14px;
		}
		th, td {
			text-align: left;
			padding: 8px;
			border-bottom: 1px solid #ddd;
		}
		th {
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>

<h2>Sorting Table A-Z</h2>

<p>Click the headers to sort the table.</p>

<table id="myTable">
  <tr>
    <th onclick="sortTable(0)">Name</th>
    <th onclick="sortTable(1)">Age</th>
    <th onclick="sortTable(2)">City</th>
  </tr>
  <tr>
    <td>John</td>
    <td>25</td>
    <td>New York</td>
  </tr>
  <tr>
    <td>Peter</td>
    <td>30</td>
    <td>Paris</td>
  </tr>
  <tr>
    <td>Mary</td>
    <td>20</td>
    <td>London</td>
  </tr>
  <tr>
    <td>David</td>
    <td>35</td>
    <td>Milan</td>
  </tr>
  <tr>
    <td>Steve</td>
    <td>28</td>
    <td>Tokyo</td>
  </tr>
</table>

<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  dir = "asc";
  while (switching) {
    switching = false;
    rows = table.rows;
    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      switchcount ++;
    } else {
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>

</body>
</html>