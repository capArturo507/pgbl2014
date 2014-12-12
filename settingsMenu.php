<?php
require 'src/login/usuario.php';
session_name('Global');
session_id('pgbl');
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Global Brigades Panama | Configuraciones de <?php echo $_SESSION["position"]?> </title>
        <meta name="description" content="Global Brigades Panama: Main Menu" />
        <meta name="keywords" content="global brigades, panama, main, menu" />
        <meta name="author" content="APSolution" />
        <link rel="shortcut icon" href="img/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="css/header.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/settingsMenu.css" media="all">
        <!-- DC DataGrid CSS -->
        <link rel="stylesheet" href="dreamcodes/datagrid/css/tsc_datagrid.css" />
        <!-- jQuery Library (skip this step if already called on page ) -->
        <script type="text/javascript" src="dreamcodes/jquery.min.js"></script> <!-- (do not call twice) -->
        <!-- DC DataGrid JS -->
        <script type="text/javascript" src="dreamcodes/datagrid/js/tsc_datagrid.js"></script>
    </head>
    <body>
        <div class="main_body">
            <?php
                require 'header.php';
            ?>           
        </div>
        <!-- DC DataGrid Start -->
         <div id="tsort-tablewrapper" style="width:90%;">
          <div id="tsort-tableheader">
            <div class="tsort-search">
              <select id="tsort-columns" onchange="sorter.search('query')">
              </select>
              <input type="text" id="query" onkeyup="sorter.search('query')" />
            </div>
            <span class="tsort-details">
            <div>Records <span id="tsort-startrecord"></span>-<span id="tsort-endrecord"></span> of <span id="tsort-totalrecords"></span></div>
            <div><a href="javascript:sorter.reset()">reset</a></div>
            </span> </div>
          <table cellpadding="0" cellspacing="0" border="0" id="tsctablesort1" class="tinytable">
            <thead>
              <tr>
                <th class="nosort"><h3>ID</h3></th>
                <th><h3>Name</h3></th>
                <th><h3>Phone</h3></th>
                <th><h3>Birthdate</h3></th>
                <th><h3>Last Access</h3></th>
                <th><h3>Rating</h3></th>
                <th><h3>Done</h3></th>
                <th><h3>Salary</h3></th>
                <th><h3>Score</h3></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>John Hart</td>
                <td>(627) 536-4760</td>
                <td>12/02/1962</td>
                <td>March 26, 2012</td>
                <td>-7</td>
                <td>7%</td>
                <td>$73,229</td>
                <td>6.9</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jaquelyn Pace</td>
                <td>(921) 943-5780</td>
                <td>06/03/1957</td>
                <td>October 20, 2010</td>
                <td>-7</td>
                <td>33%</td>
                <td>$130,752</td>
                <td>4.9</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Lois Pickett</td>
                <td>(835) 361-5993</td>
                <td>10/15/1983</td>
                <td>June 01, 1999</td>
                <td>4</td>
                <td>44%</td>
                <td>$48,684</td>
                <td>5.5</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Keane Raymond</td>
                <td>(605) 803-1561</td>
                <td>07/30/1982</td>
                <td>July 24, 1996</td>
                <td>5</td>
                <td>20%</td>
                <td>$7,023</td>
                <td>9.5</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Porter Thomas</td>
                <td>(666) 569-9894</td>
                <td>09/27/1986</td>
                <td>December 05, 2007</td>
                <td>1</td>
                <td>66%</td>
                <td>$69,875</td>
                <td>0.9</td>
              </tr>
              <tr>
                <td>6</td>
                <td>Imani Murphy</td>
                <td>(771) 294-6690</td>
                <td>10/23/1970</td>
                <td>December 08, 1996</td>
                <td>-1</td>
                <td>30%</td>
                <td>$113,763</td>
                <td>4.9</td>
              </tr>
              <tr>
                <td>7</td>
                <td>Zachery Guthrie</td>
                <td>(851) 784-4129</td>
                <td>12/22/1972</td>
                <td>September 20, 2002</td>
                <td>-5</td>
                <td>24%</td>
                <td>$130,248</td>
                <td>6.9</td>
              </tr>
              <tr>
                <td>8</td>
                <td>Harper Bowen</td>
                <td>(810) 652-6704</td>
                <td>10/26/1973</td>
                <td>May 29, 2011</td>
                <td>5</td>
                <td>49%</td>
                <td>$73,197</td>
                <td>4.5</td>
              </tr>
              <tr>
                <td>9</td>
                <td>Caldwell Larson</td>
                <td>(850) 562-3177</td>
                <td>07/20/1985</td>
                <td>June 15, 2012</td>
                <td>-3</td>
                <td>81%</td>
                <td>$63,736</td>
                <td>7.5</td>
              </tr>
              <tr>
                <td>10</td>
                <td>Baker Osborn</td>
                <td>(378) 371-0559</td>
                <td>03/29/1970</td>
                <td>July 23, 2011</td>
                <td>-7</td>
                <td>61%</td>
                <td>$2,868</td>
                <td>0.1</td>
              </tr>
              <tr>
                <td>11</td>
                <td>Yael Owens</td>
                <td>(465) 520-1801</td>
                <td>08/10/1963</td>
                <td>April 09, 1997</td>
                <td>10</td>
                <td>85%</td>
                <td>$126,469</td>
                <td>8.9</td>
              </tr>
              <tr>
                <td>12</td>
                <td>Fletcher Briggs</td>
                <td>(992) 962-9419</td>
                <td>08/12/1971</td>
                <td>December 12, 2006</td>
                <td>7</td>
                <td>23%</td>
                <td>$142,448</td>
                <td>8.9</td>
              </tr>
              <tr>
                <td>13</td>
                <td>Maggy Murphy</td>
                <td>(585) 210-0390</td>
                <td>07/11/1968</td>
                <td>April 02, 2007</td>
                <td>9</td>
                <td>31%</td>
                <td>$40,267</td>
                <td>6.9</td>
              </tr>
              <tr>
                <td>14</td>
                <td>Maggie Blake</td>
                <td>(489) 101-5447</td>
                <td>04/11/1970</td>
                <td>May 24, 2008</td>
                <td>-2</td>
                <td>32%</td>
                <td>$99,686</td>
                <td>7.9</td>
              </tr>
              <tr>
                <td>15</td>
                <td>Ginger Bell</td>
                <td>(934) 692-7294</td>
                <td>06/10/1957</td>
                <td>April 13, 2003</td>
                <td>-10</td>
                <td>74%</td>
                <td>$112,997</td>
                <td>4.5</td>
              </tr>
            </tbody>
          </table>
          <div id="tsort-tablefooter">
            <div id="tsort-tablenav">
              <div> <img src="dreamcodes/datagrid/images/first.gif" width="16" height="16" alt="First Page" onclick="sorter.move(-1,true)" /> <img src="dreamcodes/datagrid/images/previous.gif" width="16" height="16" alt="First Page" onclick="sorter.move(-1)" /> <img src="dreamcodes/datagrid/images/next.gif" width="16" height="16" alt="First Page" onclick="sorter.move(1)" /> <img src="dreamcodes/datagrid/images/last.gif" width="16" height="16" alt="Last Page" onclick="sorter.move(1,true)" /> </div>
              <div>
                <select id="tsort-pagedropdown">
                </select>
              </div>
              <div> <a href="javascript:sorter.showall()">view all</a> </div>
            </div>
            <div id="tsort-tablelocation">
              <div>
                <select onchange="sorter.size(this.value)">
                  <option value="5">5</option>
                  <option value="10" selected="selected">10</option>
                  <option value="20">20</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
                </select>
                <span>Entries Per Page</span> </div>
              <div class="tsort-page">Page <span id="tsort-currentpage"></span> of <span id="tsort-totalpages"></span></div>
            </div>
          </div>
        </div>
        <!-- DC DataGrid Settings -->
        <script type="text/javascript">
            var sorter = new TINY.table.sorter('sorter','tsctablesort1',{
                headclass:'head',
                ascclass:'asc',
                descclass:'desc',
                evenclass:'tsort-evenrow',
                oddclass:'tsort-oddrow',
                evenselclass:'tsort-evenselected',
                oddselclass:'tsort-oddselected',
                paginate:true, // pagination (true,false)
                size:10, // show 10 results per page
                colddid:'tsort-columns',
                currentid:'tsort-currentpage',
                totalid:'tsort-totalpages',
                startingrecid:'tsort-startrecord',
                endingrecid:'tsort-endrecord',
                totalrecid:'tsort-totalrecords',
                hoverid:'tsort-selectedrow',
                pageddid:'tsort-pagedropdown',
                navid:'tsort-tablenav',
                sortcolumn:1, // sort column 1
                sortdir:1, // sort direction
                sum:[8], // create totalsum for column 8
                avg:[6,7,8,9], // create averages for column 6,7,8,9
                columns:[{index:6, format:'%', decimals:1},{index:7, format:'$', decimals:0}], // classify for proper sorting
                init:true // activate datagrid (true,false)
            });
          </script>
        <!-- DC DataGrid End -->
        <div class="tsc_clear"></div> <!-- line break/clear line -->
        <div class="menu">
            <a href="<?php echo "src/webrouter.php?position=$position+&action=Crear"?>" name="Crear">
                            <button class="btn" name="Crear">Crear</button>
            </a>
            <br><br>
            <a href="<?php echo "src/webrouter.php?position=$position+&action=Editar"?>" name="Editar">
                            <button class="btn" name="Editar">Editar</button>
            </a>   
            <br><br>
            <a href="<?php echo "src/webrouter.php?position=$position+&action=Eliminar"?>" name="Eliminar">
                            <button class="btn" name="Eliminar">Eliminar</button>
            </a>   
        </div>     
    </body>
</html>
